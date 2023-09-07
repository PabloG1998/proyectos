package libro1.continuacion;

public class OperadoresIncrementOrDecrement {

	public static void main(String[] args) {
		
		int i = 10;
		int j = 3;
		int k = 0;
		
		k = ++j + 1;
		
		//Incrementa las variables i, j y k
		for(int a = 0; a <= 13; a++) {
			i++;
			j++;
			k++;
		}
		System.out.println("Resultado: " + i + j + k);

	}

}
