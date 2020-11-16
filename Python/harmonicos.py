import csv
from numpy import arange, fft, angle
import numpy as np
import matplotlib.pyplot as plt

AMOSTRAS = 128
dado=[]
with open('/content/ESP32_dados.csv') as arquivo_csv:
    leitor = csv.DictReader(arquivo_csv, delimiter=',')
    #leitor.__next__()
    for row in leitor:
        dado.append(row['corrente_2'])

print(dado)                  
#Definição de parametros 
n_ondas = 2 #numero de ondas capturadas
n = n_ondas*64 #64 dados capturados para cada onda
T = n_ondas*1.0/60 #periodo em função do número de ondas
dt = T/n # intervalo entra as medidas
t = dt * arange(0,n) 
#Calculo da transformada de Fourier
Fk = fft.fft(dado)/(n) # Coeficientes de Fourier normalizados
nu = fft.fftfreq(n,dt) #frequencias naturais
delta = angle(Fk)  #angulo de fase de cada componente

#salvando dados em Csv
ARQUIVO = open('dado_fft.txt', "w")
writer = csv.writer(ARQUIVO, delimiter='\t',quotechar='"', quoting=csv.QUOTE_ALL)
for i in range (0,AMOSTRAS):
  writer.writerow([dado[i], nu[i], abs(Fk[i]), delta[i]])
ARQUIVO.close()

#Traçando gráficos
# Forma de onda

plt.subplot(1,1,1) 
plt.xlim(0.001, T) #define os limites de x 
plt.plot(t, dado,'g-')
plt.xlabel('Tempo(s)')
plt.ylabel('Amplitude')
plt.gca().invert_yaxis()
plt.grid(True)
plt.show()

#Componentes das harmônicas
a_max=max(abs(Fk))
plt.subplot(2,1,1) 
plt.xlim(0 , 1200) # Harmônicas de 0 a 1200Hz 
plt.ylim(0,1) # define limites eixo y (amplitudes)
plt.bar(nu, abs(Fk)/a_max, width=15, align='center', alpha=0.8, color='b', label='Frequencia')
plt.xlabel('freq (Hz)')
plt.ylabel('|A(freq)|')
plt.show()
