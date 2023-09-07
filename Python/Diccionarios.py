#Crea un diccionario vacio
ejem = {}

#Añade entrada para 1
ejem[1] = 'Blah'
#Añade entrada nombre
ejem['nombre'] = 'Joe'
#Añade otra entrada
ejem['numero'] = 42

#Se muestra en consola
print(ejem[1])
print(ejem['nombre'])
print(ejem['numero'])

#Se crea un diccionario con dos entradas
ejem2 = {1: "Blah**2", 'numero': 32}
#Se muestra en consola
print(ejem2[1]) #Muestra blah**2

#Que pasa si no existe
print(ejem3['no existe']) #produce un error de nombres