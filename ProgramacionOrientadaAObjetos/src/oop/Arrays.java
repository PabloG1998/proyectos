package oop;

public class Arrays {

	public static void main(String[] args) {

		/*
		 * tipo[] id; tipo[] = new tipo[]; tipo[] = {10, 8, 3}
		 *
		 */

		int[] notas;
		int[] notas2 = new int[2];
		int[] notas3 = { 10, 8, 3 };

		for (int i = 0; i < notas3.length; i++) {
			System.out.println(notas3[i]);
		}

		// Indica la posición de memoria
		System.out.println(notas2.toString());

		// Matrices
		int[][] mat ={{1,2,3,4,5}, {6,7,8,9,10}, {11,12,13,14,15}};
		//int[][] matr;
		//matr = new int[3] [2]
		
		//Carga de valores
		
		for(int i = 0; i < mat.length; i++) {
			for(int j = 0; j < mat[0].length; j++) {
				System.out.println(mat[i][j]);
			}
		}
		
		
 	} 

}
