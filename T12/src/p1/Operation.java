package p1;

import java.util.List;

public interface Operation {
void add(List<EmpPojo> l);
void update(int id,String name);
void delete(int id);
void search(int id);
void show();
}
