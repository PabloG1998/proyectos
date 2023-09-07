package libro1.intro;

public class ImpresionDatosConFormato {

	public static void main(String[] args) {

		// Emula la funciona printf de C
		// System.out.printf(String, obj, args)
		double a = 10.2;
		System.out.printf("" + a);
		
		float precio = 100;
		//Op1
		System.out.printf("%-10s ", " Total ", precio);
		//Op2
		System.out.printf("%-10s%10.2f", " Total: ", precio);
	}

}
