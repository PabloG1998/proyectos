package oop;

public class Sentencias {

	public static void main(String[] args) {

		int n1 = 20;
		if (n1 < 10) {
			n1 = n1 + 1;
		} else {
			n1--;
		}
		System.out.println(n1);

		int a = 3, b = 0;
		if (a == 3) {
			b = 8;
			System.out.println(b);
		}

		if (a > 2) {
			a -= 1;
			b += 1;
			System.out.println(b);
		}

		if (a > 2) {
			if (b == 8) {
				b++;
			}
		} else {
			b--;
		}

	}

}
