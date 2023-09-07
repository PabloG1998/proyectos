package libro1.intro;

public class Casting {

	public static void main(String[] args) {

		int i = 10;
		long m = 1000l;
		double d = Math.PI;

		// Casting
		i = (int) m;
		m = i;
		m = (long) d;
		d = m;

	}

}
