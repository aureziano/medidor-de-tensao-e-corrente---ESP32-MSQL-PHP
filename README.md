# Medidor de Tensão e Corrente ou Espectro das Harmônicas com Medição Remota com ESP32 + PHP

![ESP32](https://img.shields.io/badge/ESP32-%23000000?style=flat&logo=espressif&logoColor=white)
![WiFi](https://img.shields.io/badge/WiFi-%23000000?style=flat&logo=wifi&logoColor=white)
![SD Card](https://img.shields.io/badge/SD_Card-%23000000?style=flat&logo=sd-card&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-%23000000?style=flat&logo=php&logoColor=white)
![EnergyMonitor](https://img.shields.io/badge/EnergyMonitor-%23000000?style=flat&logo=arduino&logoColor=white)

## Descrição

Este projeto consiste em um medidor de **tensão** e **corrente** utilizando o microcontrolador **ESP32**. O dispositivo mede valores de corrente e tensão em três fases, utilizando sensores específicos (como **SCT013** e **ZMP101B**). A medição é feita por meio de sensores de corrente (CT) e sensores de tensão (sensor ZMP101B), sendo os dados exibidos em um display LCD 16x2 e também enviados para um servidor PHP remotamente. O código ainda armazena os dados coletados em um **cartão SD** para posterior análise.

Este sistema é capaz de realizar medições em tempo real e enviar os resultados para um servidor PHP via **HTTP GET**, o que permite visualizar e registrar os dados de energia de forma remota. Além disso, também exibe as leituras no display e escreve os dados em um arquivo de log no cartão SD.

## Funcionalidades

- Medição de **tensão** e **corrente** em até 3 fases utilizando os sensores **SCT013** e **ZMP101B**.
- Exibição dos valores em um display LCD 16x2.
- Envio dos dados via **WiFi** para um servidor PHP (com armazenamento remoto).
- Armazenamento dos dados em **cartão SD** para posterior análise.
- Calibração dos sensores para garantir medições precisas.

## Componentes Necessários

- **ESP32** (ou ESP8266)
- **Sensor SCT013** (para medição de corrente)
- **Sensor ZMP101B** (para medição de tensão)
- **Display LCD 16x2**
- **Cartão SD** (para armazenamento de dados)
- **Botão touch** (para navegação no display)
- Fios de conexão (jumpers)

## Conexões

- **VCC** do **SCT013** e **ZMP101B** -> **5V** ou **3.3V** do ESP32/ESP8266
- **GND** do **SCT013** e **ZMP101B** -> **GND** do ESP32/ESP8266
- **SCL** do **ZMP101B** -> **GPIO 22** (ESP32)
- **SDA** do **ZMP101B** -> **GPIO 21** (ESP32)
- **SD_CS** -> **GPIO 22** (ESP32)
- **SD_MOSI** -> **GPIO 23** (ESP32)
- **SD_MISO** -> **GPIO 19** (ESP32)
- **SD_SCK** -> **GPIO 18** (ESP32)
- **BT_1** -> **GPIO 13** (para navegação entre os modos de exibição no LCD)

## Software e Bibliotecas

- **EmonLib**: Biblioteca para medição de energia.
- **LiquidCrystal**: Biblioteca para controle do display LCD.
- **SD**: Biblioteca para interação com o cartão SD.
- **WiFi** e **HTTPClient**: Bibliotecas para comunicação via WiFi e envio de dados para o servidor PHP.
- **FS**: Biblioteca para manipulação de arquivos no sistema de arquivos do ESP32.

## Estrutura do Código

1. **Leitura de Tensão e Corrente**: Através dos sensores **SCT013** e **ZMP101B**, o ESP32 lê as correntes e tensões em tempo real.
2. **Exibição no LCD**: O valor da corrente e da tensão é exibido no display LCD 16x2. O usuário pode alternar entre exibir corrente, tensão ou potência.
3. **Armazenamento de Dados**: Os dados de medição são salvos em um arquivo CSV no cartão SD para referência futura.
4. **Envio de Dados para o Servidor PHP**: A cada leitura, os dados são enviados para um servidor PHP que pode ser usado para armazenar ou processar as informações remotamente.
5. **Sincronização de Hora**: O ESP32 sincroniza a hora com servidores de tempo via NTP para registrar a hora exata da medição.

## Conectando ao Servidor PHP

Os dados de medição são enviados ao servidor PHP via **HTTP GET**. O URL de envio é configurado para incluir os parâmetros de tensão, corrente e ID do medidor, permitindo que os dados sejam salvos em um banco de dados MySQL na web.

A URL de envio para o servidor PHP é configurada da seguinte forma (habilitado somente no periodo do projeto):

https://aureziano.000webhostapp.com/salvar_tcc.php?tensao_1={tensao_1}&tensao_2={tensao_2}&tensao_3={tensao_3}&corrente_1={corrente_1}&corrente_2={corrente_2}&corrente_3={corrente_3}&id_medidor=1


## Como Usar

1. Faça o upload do código para o **ESP32**.
2. Conecte o ESP32 a uma rede Wi-Fi configurada no código.
3. Conecte os sensores de corrente e tensão conforme o esquemático.
4. Abra o monitor serial para verificar os valores em tempo real.
5. O ESP32 exibirá as leituras no **LCD** e enviará os dados para o servidor PHP.

## Licença

Este projeto é de código aberto e distribuído sob a licença **MIT**.

## Referências

- [EmonLib](https://github.com/openenergymonitor/EmonLib)
- [Display LCD 16x2 com Arduino](https://www.arduino.cc/en/Reference/LiquidCrystal)
- [Documentação do ESP32](https://docs.espressif.com/projects/esp-idf/en/latest/)


