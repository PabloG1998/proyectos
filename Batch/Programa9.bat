@echo off
Set /a conta=0
:volv
Set /p Cual es el codigo? 
if %codigo% == 1234 (goto seguir) else goto no 
:no
set /a conta = %conta% +1
if %conta% == 3 (exit) else goto oportu
:oportu
Echo.
Echo el codigo es incorrecto, por favor intentelo de nuevo 
pause
cls
goto volv
:seguir
Echo.
echo el codigo es correcto
pause