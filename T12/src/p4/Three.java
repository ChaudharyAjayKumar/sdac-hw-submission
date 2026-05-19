package p4;

import java.util.Iterator;
import java.util.Properties;
import java.util.Set;

public class Three {
public static void main(String[] args) {
	Properties properties=new Properties();
	properties.put("ajay", "1123");
	properties.put("sanjay", "1123");
	properties.put("jay", "1123");
	
	Set set=properties.keySet();
	Iterator iterator=set.iterator();
	while (iterator.hasNext()) {
		String object = (String) iterator.next();
		System.out.println(properties.getProperty("sss", "not found"));
		
	}
}
}
