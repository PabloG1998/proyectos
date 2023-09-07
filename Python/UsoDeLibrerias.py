import os
import sys
#Imprime por consola el mensaje "Hola"
os.system('echo Hola')

#Muestra el directorio actual
print (os.getcwd)

argc = len(sys.argv)
print ('Hay', argc, 'Argumentos')
for i in sys.argv:
    print (i)


