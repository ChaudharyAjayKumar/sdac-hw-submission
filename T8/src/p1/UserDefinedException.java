package p1;


class AgeValidator extends Exception{
	public AgeValidator(String s) {
		super(s);
	}
	
	void age(int age) throws AgeValidator {
		if(age <18) {
			throw new AgeValidator("user cannot vote");
		}
		else {
			System.out.println("user can vote ");
		}
	}
}




public class UserDefinedException {
public static void main(String[] args) {
	AgeValidator ageValidator=new AgeValidator(null);
	try {
		ageValidator.age(20);
	} catch (AgeValidator e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}
}
}
