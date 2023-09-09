package oop;

public class Sentencias_Switch {

	public static void main(String[] args) {
		int numeroMes = 4;
		String estacion = "", mes = "";

		switch (numeroMes) {
		case 12:
			mes = "Diciembre";
		case 1:
			mes = "Enero";
		case 2:
			mes = "Febrero";
			estacion = "Invierno";
			break;
		case 3:
			mes = "Marzo";
		case 4:
			mes = "Abril";
		case 5:
			mes = "Mayo";
			estacion = "Primavera";
			break;
		case 6:
			mes = "Junio";
		case 7:
			mes = "Julio";
		case 8:
			mes = "Agosto";
			estacion = "Verano";
			break;
		case 9:
			mes = "Septiembre";
		case 10:
			mes = "Octubre";
		case 11:
			mes = "Noviembre";
			estacion = "Otoño";
			break;
		}

		System.out.println("El mes de " + mes + " se encuentra en la estacion " + estacion);
	}

}
