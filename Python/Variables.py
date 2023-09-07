#Python es un lenguaje de tipado debil
#No se necesita cerrar con punto y coma

nombre = 'Joe'

i = 10

var = i

#Imprime el resultado
print('Hola', nombre)

#Introduccion de datos por el usuario
nombre = input('Hola, como te llamas? ')
print('Hola', nombre)

#Variables numericas
num1 = 10
#variable hexadecimal
num2 = 0x10
#conversion de int a hex
num3 = hex(num1)
#conversion de hex a int
num4 = int(num2)

#Se muestran las variables
print ('Num1: ', num1)
print ('Num2: ', num2)
print ('Num3: ', num3)
print ('Num4: ', num4)

#Strings
#str(variable)
cadena1 = 'abcdef'
cadena2 = 'ghijklm'
cadena3 = cadena1 + cadena2
print(cadena3)

#Strings contenidos
cadena1 = 'qwertyuiop'
cadena2 = 'er'
contenida = cadena2 in cadena1
print (contenida) #Devuelve true

#Longitud de los Strings
cadena = '123456789'
longiutd = len(cadena)
print (longiutd)

#Repeticion de chains
cadena = 'bla'
print (cadena * 3)

#Extraer una subcadena
cadena = 'abcde'
subcadena = cadena [1:3]
print (subcadena)