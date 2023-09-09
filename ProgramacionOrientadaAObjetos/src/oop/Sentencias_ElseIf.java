package oop;

public class Sentencias_ElseIf {

	public static void main(String[] args) {

		int n1 = 9;

		if (n1 == 0) {
			n1 = n1 + 1;
			System.out.println(n1);
		} else if (n1 == 1 | n1 == 2) {
			n1--;
			System.out.println(n1);
		} else if (n1 < 10) {

			System.out.println(n1 + " Es menor a 10");
		} else {
			System.out.println("No se cumple ninguna");
		}

	}

}
