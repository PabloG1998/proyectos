package libro1.intro;

/**
 * Clase para representar círculos sobre el plano Un círculo se define por su
 * radio y las coordenadas de su centro
 * 
 * @version 1.2, 6/09/2023
 * @author Pablo Nicolas Garcia
 */
public class Circulo {
	protected double x, y; // coordenadas del centro
	protected double r; // radio del círculo

	/**
	 * Crea un circulo a partir de su origen y radio
	 * 
	 * @param x Coordenada x del centro del círculo
	 * @param y Coordenada y coordenada y del centro del circulo
	 * @param r Radio del circulo. (>=0)
	 */
	public Circulo(double x, double y, double r) {
		this.x = x;
		this.y = y;
		this.r = r;
	}

	/*
	 * Calculo del área de este circulo
	 * 
	 * @return El area (mayor o igual que 0) del circulo
	 */
	public double area() {
		return Math.PI * r * r;
	}

	/**
	 * Indica si un punto está dentro del círculo
	 * 
	 * @param px componente x del punto
	 * @param py componente y del punto
	 * @return true si el punto está dentro del circulo o false en otro caso
	 */
	public boolean contiene(double px, double py) {
		/*
		 * Calculamos la distancia de (px, py) al centro del círculo (x,y), que se
		 * obtiene como raíz cuadrada de (px-x)^2+(py-y)^2
		 */
		double d = Math.sqrt((px - x) * (px - x) + (py - y) * (py - y));
		// El circulo contiene el punto si d es menor o igual al radio
		return d <= r;
	}
}
