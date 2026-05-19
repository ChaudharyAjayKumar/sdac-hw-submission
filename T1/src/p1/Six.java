
package p1;




class Seat{
	int no;
	@Override
	public String toString() {
		return "Seat [no=" + no + ", col=" + col + "]";
	}
	public Seat(int no, String col) {
		super();
		this.no = no;
		this.col = col;
	}
	String col;
	
}


class Engine{
	int type;
	@Override
	public String toString() {
		return "Engine [type=" + type + ", fuel=" + fuel + "]";
	}
	public Engine(int type, String fuel) {
		super();
		this.type = type;
		this.fuel = fuel;
	}
	String fuel;
	
}

class Car{
	String ccol;
	Seat s;
	Engine engine;
	public Car(String ccol, Seat s, Engine engine) {
		super();
		this.ccol = ccol;
		this.s = s;
		this.engine = engine;
	}
	@Override
	public String toString() {
		return "Car [ccol=" + ccol + ", s=" + s + ", engine=" + engine + "]";
	}
}

public class Six {
public static void main(String[] args) {
	Seat s=new Seat(4, "gold");
	Engine e=new Engine(2, "petrol");
	Car car=new Car("black", s, e);
	System.out.println(car);
}
}
