package p3;

import java.util.Iterator;
import java.util.Properties;
import java.util.Set;



public class One {
	public static void main(String[] args) {
		Properties pop = new Properties();
		pop.put("india", "delhi");
		pop.put("maharastra", "mumbai");
		pop.put("up", "lucknow");
		pop.put("bihar", "patna");
		
		Set  s =pop.keySet();
		Iterator iterator=s.iterator();
		while (iterator.hasNext()) {
			String object = (String) iterator.next();
			System.out.println(object +":"+pop.getProperty(object,"not found"));
			
			System.out.println(pop.getProperty("rajstan","not found"));
			
		}
	}
    
}
