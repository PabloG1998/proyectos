@echo off
echo Adivina en que numero estoy pensando...
Set /p nro = Es mayor que 0 y menor que diez... 
Echo.
If %nro%==6 (echo Genio) else echo Nope
Echo.
Pause