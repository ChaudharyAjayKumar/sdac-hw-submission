package p12;

import java.util.List;


public interface Operation {
void add(List<EmpPojo> l);
void update(String name,int id);
void delete(int id);
void search(int id);
void show();
}

