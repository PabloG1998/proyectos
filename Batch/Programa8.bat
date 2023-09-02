@echo off
:volv
set /p codigo=Cual es el codigo? 
if %codigo% == 1234 (goto seguir) else goto no
:no
echo.
echo El codigo es incorrecto, por favor intentelo de nuevo
pause
cls
goto volv
:seguir
echo.
echo El codigo es correcto
pause
exit