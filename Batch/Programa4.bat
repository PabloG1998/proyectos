@echo off
Set letras=6
Echo %letras%
Pause > nul

Set/p v=Como te llamas?: 
Echo.
Echo Tu nombre... %v%, la verdad me desagrada.

Set /a suma=5+3
Echo %suma%
Echo.
Pause
Cls

Set/p primero=Ingrese el primer numero: 
Cls
Set/p segundo=Ingrese el segundo numero: 
Cls
Set /a suma= %primero%+%segundo%
Set /a resta= %primero%-%segundo%
Set /a multi= %primero%*%segundo%
Set /a divi= %primero%/%segundo%
Echo los numeros ingresados son: %primero% y %segundo%
echo.

Echo La suma de ambos da: %suma%
Echo.
Echo la resta del primero por el segundo da: %resta%
Echo.
Echo la multiplicacion da: %multi%
Echo la division da: %divi%
Echo.
Pause