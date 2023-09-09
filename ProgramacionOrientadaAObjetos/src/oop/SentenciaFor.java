package oop;

public class SentenciaFor {

	public static void main(String[] args) {

		for (int i = 0; i < 20; i++) {
			System.out.println("i = " + i);
		}

		int i, j;
		for (i = 1, j = 1; (i <= 5) && (j <= 5); i++, j += 2) {
			System.out.println("i = " + i + "   " + "j = " + j);
		}

		// bucle infinito
		/*
		 * for(;;) {
		 * 
		 * }
		 */

		// Break - Continue

		int a = 1;
		for (int k = 1; k <= 100; k++) {
			if (a % 5 == 0)
				continue;
			if (a > 1000)
				break;
			a += a * 2 + 1;
			System.out.println("a = " + a);
		}
		
		//Foreach
		
		int[] data = {0, 1, 2, 3, 4, 5, 6, 7, 8, 9};
		for (int item : data) {
			System.out.println("ITEM: " + item);
			
		}
 	}

}
