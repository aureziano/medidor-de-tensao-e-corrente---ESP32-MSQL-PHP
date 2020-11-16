# Medidor de Tensão e Corrente ou Espectro das Harmônicas com Medição Remota com ESP32 + PHP 
*O Microcontrolador usado foi o ESP32 NODEMCU
*Sensores de corrente SCT-013-000 (até 100 A)
*Sensores de tensão ZMPT101B (até 250V)
*Filtros de Butterworth de 4ª Ordem como filtro passa-baixas sem ganho
*Os harmônicos são captados num txt gerado e armazenado no ESP32 por meio de cartão Micro SD
*Foi usado a 000webhostapp para servir de servidor de dados e banco de dados phpmyadm, com linguagem usada sendo o php

Obs: O SCT-013-000 possui saída de sinal na forma de corrente, assim é necessario circuito auxiliar para transformar seu sinal para tensão, variando de acordo com a entrada do ESP32, que é 3,3V, deste modo é necessário referência de +/- 1,65 V.
