package libro1.intro;

import java.util.Scanner;

public class ClaculadoraDolar {

	public static void main(String[] args) {

		System.out.println("Calculadora Dolar v 0.1");
//		//double dolarBnaCompra = 347.50;
//		double dolarBlueCompra = 715.00;
//		double dolarTuristaCompra = 657.90;
//		double dolarMayoristaBancoCompra = 346.81;
//		double dolarCCLCompra = 685.62;
//		double dolarMEPCompra = 672.46;

		Scanner scan = new Scanner(System.in);
		double equiv, cantDolares;

		System.out.println("Ingrese el valor del dolar: ");
		equiv = scan.nextDouble();
		System.out.println("Ingrese cuantos dolares: ");
		cantDolares = scan.nextDouble();
		double pes = cantDolares * equiv;
		System.out.printf("%f Dolares: = %f pesos \n", cantDolares, pes);
		scan.close();
	}

}
