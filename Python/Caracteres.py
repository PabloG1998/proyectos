cadena = 'abcdefg'
caracter = cadena[0]
print (caracter)
caracter = cadena[1]
print (caracter)
caracter = cadena[-1]
print (caracter)

cadena = input('Introduzca un caracter: ')
caracter = cadena[0]
numero = ord(caracter)
print ('El caracter: ', caracter, 'es el numero: ', numero)

cadena = input('Introduzca un numero: ')
numero = int(cadena)
caracter = chr(numero)
print ('El numero', numero, 'corresponde al caracter: ', caracter)