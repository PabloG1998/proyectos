package oop;

public class Operadores {

	public static void main(String[] args) {

		// Asignacion
		int x, y;
		x = 10;
		y = 20;
		x = y;
		System.out.println(x + " " + y);

		// Aritmeticos
		x++;
		y--;
		System.out.println(x + " " + y);

		y = y / y;
		x = x / y;
		x = y * x;
		y = x % x;
		System.out.println(x + " " + y);

		// Comparacion
		if (x == y) {
			System.out.println("True");
			if (y != x) {
				System.out.println("False");
			} else if (y != 0 && x != 1) {
				System.out.println("True");
			}
		} else {
			System.out.println("Null");
		}

	}

}
