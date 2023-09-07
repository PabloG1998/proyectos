package libro1.continuacion;

public class Answer {

	public static void main(String[] args) {
		
		int f = 7, s = 4, answer, rem;
		answer = f / s; //answer=1
		System.out.println(answer);
		//resto division entera
		rem = f % s; //rem = 3
		System.out.println(rem);
		
		//String
		String n = "Name";
		int len = n.length();
		System.out.println(n + " " + len);
		
		//Concat
		String na = "Robbie", ap = "Williams";
		String naming = na + " " + ap;
		System.out.println(naming);
		
		//Concat num
		String ag = "Agent";
		int num = 86;
		System.out.println(ag + " " + num);
		

	}

}
