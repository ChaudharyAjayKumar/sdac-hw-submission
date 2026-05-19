package p1;

import java.util.Objects;

public class Three implements Cloneable {
	
	public static String nam="ajay";
	
	///auto 
	int a=10;
	Integer a1=a;
	
	//unbox
	int a2= a1;
	
	
public String name;
int id;
public Three(String name, int id) {
	super();
	this.name = name;
	this.id = id;
}
@Override
public String toString() {
	return "Three [name=" + name + ", id=" + id + "]";
}

@Override
	protected void finalize() throws Throwable {
		System.out.println("deleted....");
	}
@Override
public int hashCode() {
	return Objects.hash(id, name);
}
@Override
public boolean equals(Object obj) {
	if (this == obj)
		return true;
	if (obj == null)
		return false;
	if (getClass() != obj.getClass())
		return false;
	Three other = (Three) obj;
	return id == other.id && Objects.equals(name, other.name);
}

@Override
	protected Object clone() throws CloneNotSupportedException {
		// TODO Auto-generated method stub
		return super.clone();
	}

}

class Main{
	public static void main(String[] args) throws CloneNotSupportedException {
		Three three=new Three("ajay", 10);
		System.out.println(three);
		
		System.out.println(three.getClass());
		
		three=null;
		System.gc();
		
		Three three1=new Three("ajay", 10);
		Three three2=new Three("ajay", 10);
		System.out.println(three1.equals(three2));


		Three clonet1=(Three) three1.clone();
		System.out.println(clonet1);
		
		
	}
}