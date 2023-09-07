numero = input('Cuanto es un 1+1? ')

#Posibilidad 1: El usuario dio enter directament
if(len(numero) == 0):
    print('No se introdujo nada.')
    #el usuario ingresa un valor erroneo
elif(numero !='2'):
    print('No, te equivocaste')
    #Posibilidad 3, el usuario acerto
else:
    print('Si, has acertado')