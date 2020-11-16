
#include "EmonLib.h" //Inclui biblioteca Emonlib
#include <LiquidCrystal.h>//Display
#include "FS.h"
#include "SD.h"
#include "SPI.h"
#include <time.h> 
#include <WiFi.h>
#include <HTTPClient.h>
 

#define ADC_1 36  //corrente fase 1 -->VP
#define ADC_2 39  //corrente fase 2 -->VN
#define ADC_3 34  //corrente fase 3 -->D34
#define ADC_4 35  //Tensão fase 1 -->D35
#define ADC_5 32  //Tensão fase 2 -->D32
#define ADC_6 33  //Tensão fase 3 -->D33
#define RS 16     //display 16x2 -->RX2
#define EN 5      //display 16x2 -->D5
#define d4 17     //display 16x2 -->TX2
#define d5 4     //display 16x2 -->D4
#define d6 2     //display 16x2 -->D2
#define d7 15     //display 16x2 -->D15
#define SD_CS 22     //SD_CARD -->D22
#define SD_MOSI 23   //SD_CARD -->D23
#define SD_MISO 19   //SD_CARD -->D19
#define SD_SCK 18    //SD_CARD -->D18
#define BT_1 13    //botão touch, muda display
#define LED_BUILTIN 2 //led no ESP32
#define ADC_BITS 12 //Define a leitura como 12 Bits
#define VOLT_CAL_1 42.5 //VALOR DE CALIBRAÇÃO (DEVE SER AJUSTADO EM PARALELO COM UM MULTÍMETRO)
#define VOLT_CAL_2 41.5
const char* ssid     = "DZ-302";
const char* password = "dz11270107";
HTTPClient http;

const long  gmtOffset_sec = -3*3600;
const int daylightOffset_sec = 0;

EnergyMonitor SCT013_1; 
EnergyMonitor SCT013_2; 
//EnergyMonitor SCT013_3; 
EnergyMonitor ZMP101B_1; 
EnergyMonitor ZMP101B_2; 
//EnergyMonitor ZMP101B_3; 
float corrente[3] = {0,0,0};
float tensao[3] = {0,0,0};
char str_1[16];
char str_2[16];
char str_3[16];
char disp[16];
int escolha = 0;
int ini = 0;
long lastms;//Váriavel para guardar o ultimo toque.
LiquidCrystal lcd (RS, EN, d4, d5, d6, d7);
//LiquidCrystal lcd(19, 23, 18, 17, 16, 15);
void setup()
{
  Serial.begin(115200);//Inicializa a janela serial em 115200 baud
  
  pinMode(LED_BUILTIN, OUTPUT);//Define o LED OnBoard como saída
  touchAttachInterrupt(BT_1, led, 20);//Atribui uma função (led) quando for detectado um valor menor de (20) ao pino (4).
  lastms = 0;//Inicializa a váriavel em 0.
  // configura o número de colunas e linhas do LCD:
  lcd.begin(16, 2);
  // Imprime uma mensagem no LCD.
  lcd.print("Iniciando ...");
  delay(2500);
  lcd.clear();

//---------------Configuração de corrente---------------------------------------
  SCT013_1.current(ADC_1, 22.73);//current(x,y) onde x é o pino ADC a ser mensurado e y é a constante de calibração
  SCT013_2.current(ADC_2, 22.73);
//  SCT013_3.current(ADC_3, 22.73);
 //---------------Configuração de Tensão---------------------------------------
  ZMP101B_1.voltage(ADC_4, VOLT_CAL_1, 1.7); //PASSA PARA A FUNÇÃO OS PARÂMETROS (PINO ANALÓGIO / VALOR DE CALIBRAÇÃO / MUDANÇA DE FASE)
  ZMP101B_2.voltage(ADC_5, VOLT_CAL_2, 1.7);
//  ZMP101B_3.voltage(ADC_6, VOLT_CAL, 1.7);

  // We start by connecting to a WiFi network
  lcd.print("Conectando... ");
  delay(2500);
  lcd.clear();
  lcd.print(ssid);
  lcd.clear();
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
      delay(500);
      lcd.print(".");
  }
  delay(500);
  lcd.clear();
  lcd.print("WiFi conectado");
  delay(1000);
  lcd.clear();
  lcd.print("IP: ");
  lcd.setCursor (0, 1);
  lcd.print(WiFi.localIP());
  delay(2500);
  lcd.clear();
  configTime(gmtOffset_sec, daylightOffset_sec,"time.nist.gov", "0.pool.ntp.org", "1.pool.ntp.org");
  struct tm tmstruct ;
  delay(5000);
  tmstruct.tm_year = 0;
  getLocalTime(&tmstruct, 5000);
  lcd.print("Hora Atual:");
  sprintf(disp,"%d-%02d-%02d %02d:%02d:%02d",(tmstruct.tm_year)+1900,( tmstruct.tm_mon)+1, tmstruct.tm_mday,tmstruct.tm_hour , tmstruct.tm_min, tmstruct.tm_sec);
  lcd.setCursor (0, 1);
  lcd.print(disp);
  delay(2500);
  lcd.clear();

  SD.begin(SD_CS);
  if(!SD.begin(SD_CS)){
      lcd.print("Montagem do MicroSD falhou!");
      delay(5000);
      lcd.clear();
      return;
  }
  uint8_t cardType = SD.cardType();

  if(cardType == CARD_NONE){
      lcd.print("Nenhum SD conectado!");
      delay(5000);
      lcd.clear();
      return;
  }

//  lcd.print("SD Card Tipo: ");
//  delay(5000);
//  lcd.clear();
//  if(cardType == CARD_MMC){
//      lcd.print("MMC");
//  } else if(cardType == CARD_SD){
//      lcd.print("SDSC");
//  } else if(cardType == CARD_SDHC){
//      lcd.print("SDHC");
//  } else {
//      lcd.print("UNKNOWN");
//  }
//  delay(5000);
//  lcd.clear();

  uint64_t cardSize = SD.cardSize() / (1024 * 1024);
  sprintf(disp,"Espaco: %lluMB", cardSize);
  lcd.print(disp);
  delay(5000);
  //manipulando arquivos no SD Card
//  listDir(SD, "/", 0);//listar conteudo da pasta
//  removeDir(SD, "/mydir");//remover pasta
//  createDir(SD, "/mydir");//cria pasta
//  deleteFile(SD, "/datalog_ESP32.txt");//deleta arquivo
//  writeFile(SD, "/datalog_ESP32.txt", "Hello ");//cria arquivo
//  appendFile(SD, "/datalog_ESP32.txt", "World!\n");//insere no arquivo

  writeFile(SD, "/datalog_ESP32.txt", "Time, Tensao_1,Tensao_2,Tensao_3, Corrente_1,Corrente_2,Corrente_3 \r\n");
  //writeFile(SD, "/datalog_ESP32.txt", "Time; Corrente_1;Corrente_2 \r\n");
   
}
void loop()
{
    lcd.clear();//limpa a tela
    //Serial.println(touchRead(4));//Mostra o valor do touch no monitor.
    ZMP101B_1.calcVI(17,1480);  //FUNÇÃO DE CÁLCULO (17 SEMICICLOS, TEMPO LIMITE PARA FAZER A MEDIÇÃO) 
    ZMP101B_2.calcVI(17,1480);
//    ZMP101B_3.calcVI(17,2000);
    corrente[0] = SCT013_1.calcIrms(1480);//Numero de amostras que contém em 1 período de 60Hz
    corrente[1] = SCT013_2.calcIrms(1480);
//    corrente[2] = SCT013_3.calcIrms(1480);
    corrente[0] = tara(corrente[0]);
    corrente[1] = tara(corrente[1]);
//    corrente[2] = tara(corrente[2]);
    tensao[0] = ZMP101B_1.Vrms; //VARIÁVEL RECEBE O VALOR DE TENSÃO RMS OBTIDO
    tensao[1] = ZMP101B_2.Vrms;
//    tensao[2] = ZMP101B_3.Vrms;
    if(escolha == 0)
    {
      lcd.setCursor (0, 0);
      sprintf(str_1,"I1: %.1f",corrente[0]);
      lcd.print (str_1);
      lcd.setCursor (0, 1);
      sprintf(str_2,"I2: %.1f",corrente[1]);
      lcd.print (str_2);
    }
    else if(escolha == 1)
    {
      lcd.setCursor (0, 0);
      sprintf(str_1,"V1: %.1f",tensao[0]);
      lcd.print (str_1);
      lcd.setCursor (0, 1);
      sprintf(str_2,"V2: %.1f",tensao[1]);
      lcd.print (str_2);
    }
    else if(escolha == 2)
    {
      lcd.setCursor (0, 0);
      sprintf(str_1,"Pot 1: %.1f",tensao[0]*corrente[0]);
      lcd.print (str_1);
      lcd.setCursor (0, 1);
      sprintf(str_2,"Pot 2: %.1f",tensao[1]*corrente[1]);
      lcd.print (str_2);
    }
    while(ini < 6)
    {
      lcd.clear();
      lcd.print("Calibrando..");
      ZMP101B_1.calcVI(17,1480);  //FUNÇÃO DE CÁLCULO (17 SEMICICLOS, TEMPO LIMITE PARA FAZER A MEDIÇÃO) 
      ZMP101B_2.calcVI(17,1480);
//    ZMP101B_3.calcVI(17,2000);
      corrente[0] = SCT013_1.calcIrms(1480);//Numero de amostras que contém em 1 período de 60Hz
      corrente[1] = SCT013_2.calcIrms(1480);
      ini ++;
      delay(500);
    }
   
    String dataString = "";
    configTime(gmtOffset_sec, daylightOffset_sec,"time.nist.gov", "0.pool.ntp.org", "1.pool.ntp.org");
    struct tm tmstruct ;
    tmstruct.tm_year = 0;
    getLocalTime(&tmstruct, 5000);
    String endWeb = "https://aureziano.000webhostapp.com/salvar_tcc.php?tensao_1=";
    endWeb += String(tensao[0]);
    endWeb += "&tensao_2=";
    endWeb += String(tensao[1]);
    endWeb += "&tensao_3=";
    endWeb += String(tensao[2]);
    endWeb += "&corrente_1=";
    endWeb += String(corrente[0]);
    endWeb += "&corrente_2=";
    endWeb += String(corrente[1]);
    endWeb += "&corrente_3=";
    endWeb += String(corrente[2]);
    endWeb += "&id_medidor=1";
//    endWeb += ;
    http.begin(endWeb);
    int httpCode = http.GET(); //Make the request
    if (httpCode > 0) { //Check for the returning code
            String payload = http.getString();
            //Serial.println(httpCode);  // funciona sem essa linha
            //Serial.println(payload);
    }
    else {
            Serial.println("Error on HTTP request");
    }
    http.end(); //Free the resources

    char hora [50]="";
    sprintf(hora,"%d-%02d-%02d %02d:%02d:%02d",(tmstruct.tm_year)+1900,( tmstruct.tm_mon)+1, tmstruct.tm_mday,tmstruct.tm_hour , tmstruct.tm_min, tmstruct.tm_sec);
    dataString += hora;
    dataString += ";";
    dataString += String(tensao[0]);
    dataString += ";";
    dataString += String(tensao[1]);
    dataString += ";";
    dataString += String(tensao[2]);
    dataString += ";";
    dataString += String(corrente[0]);
    dataString += ";";
    dataString += String(corrente[1]);
    dataString += ";";
    dataString += String(corrente[2]);
    dataString += "\r\n";
    appendFile(SD, "/datalog_ESP32.txt", dataString.c_str());
    delay(500);
}

float tara(float corrente)
{
  if(corrente < 0.7)
    corrente = 0.0;
  else
    corrente = corrente- 0.72;
  return(corrente);  
}

int muda_escolha(int esc)
{
  if(esc == 0)
    escolha = 1;
  else if(esc == 1)
    escolha = 2;
  else
    escolha = 0;  
  return(escolha);  
}

void led()//função que foi atribuida para o evento do touch.
{
    if (millis() - lastms > 150)//Verifica se o ultimo toque faz mais de 150mS
    {
        digitalWrite(LED_BUILTIN, !digitalRead(LED_BUILTIN));//Inverte o estado do led.
        lastms = millis();//Salva o ultimo tempo em que foi tocado.
        escolha = muda_escolha(escolha);
    }
}


void listDir(fs::FS &fs, const char * dirname, uint8_t levels){
    Serial.printf("Listing directory: %s\n", dirname);

    File root = fs.open(dirname);
    if(!root){
        Serial.println("Failed to open directory");
        return;
    }
    if(!root.isDirectory()){
        Serial.println("Not a directory");
        return;
    }

    File file = root.openNextFile();
    while(file){
        if(file.isDirectory()){
            Serial.print("  DIR : ");
            Serial.print (file.name());
            time_t t= file.getLastWrite();
            struct tm * tmstruct = localtime(&t);
            Serial.printf("  LAST WRITE: %d-%02d-%02d %02d:%02d:%02d\n",(tmstruct->tm_year)+1900,( tmstruct->tm_mon)+1, tmstruct->tm_mday,tmstruct->tm_hour , tmstruct->tm_min, tmstruct->tm_sec);
            if(levels){
                listDir(fs, file.name(), levels -1);
            }
        } else {
            Serial.print("  FILE: ");
            Serial.print(file.name());
            Serial.print("  SIZE: ");
            Serial.print(file.size());
            time_t t= file.getLastWrite();
            struct tm * tmstruct = localtime(&t);
            Serial.printf("  LAST WRITE: %d-%02d-%02d %02d:%02d:%02d\n",(tmstruct->tm_year)+1900,( tmstruct->tm_mon)+1, tmstruct->tm_mday,tmstruct->tm_hour , tmstruct->tm_min, tmstruct->tm_sec);
        }
        file = root.openNextFile();
    }
}

void createDir(fs::FS &fs, const char * path){
    Serial.printf("Creating Dir: %s\n", path);
    if(fs.mkdir(path)){
        Serial.println("Dir created");
    } else {
        Serial.println("mkdir failed");
    }
}

void removeDir(fs::FS &fs, const char * path){
    Serial.printf("Removing Dir: %s\n", path);
    if(fs.rmdir(path)){
        Serial.println("Dir removed");
    } else {
        Serial.println("rmdir failed");
    }
}

void readFile(fs::FS &fs, const char * path){
    Serial.printf("Reading file: %s\n", path);

    File file = fs.open(path);
    if(!file){
        Serial.println("Failed to open file for reading");
        return;
    }

    Serial.print("Read from file: ");
    while(file.available()){
        Serial.write(file.read());
    }
    file.close();
}

void writeFile(fs::FS &fs, const char * path, const char * message){
    Serial.printf("Writing file: %s\n", path);

    File file = fs.open(path, FILE_WRITE);
    if(!file){
        Serial.println("Failed to open file for writing");
        return;
    }
    if(file.print(message)){
        Serial.println("File written");
    } else {
        Serial.println("Write failed");
    }
    file.close();
}

void appendFile(fs::FS &fs, const char * path, const char * message){
    if (path[0] != '/'){
      Serial.println("File path needs start with /. Change it.");
    }

    Serial.printf("Appending to file: %s\n", path);

    File file = fs.open(path, FILE_APPEND);
    if(!file){
        Serial.println("Failed to open file for appending");
        return;
    }

    if(file.print(message)){
        Serial.println("Message appended");
    } else {
        Serial.println("Append failed");
    }
    file.close();
}

void renameFile(fs::FS &fs, const char * path1, const char * path2){
    Serial.printf("Renaming file %s to %s\n", path1, path2);
    if (fs.rename(path1, path2)) {
        Serial.println("File renamed");
    } else {
        Serial.println("Rename failed");
    }
}

void deleteFile(fs::FS &fs, const char * path){
    Serial.printf("Deleting file: %s\n", path);
    if(fs.remove(path)){
        Serial.println("File deleted");
    } else {
        Serial.println("Delete failed");
    }
}
