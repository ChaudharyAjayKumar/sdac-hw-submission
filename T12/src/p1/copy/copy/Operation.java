package p1.copy.copy;

import java.util.List;

public interface Operation {
void add(EmpPojo emp);
void update(int id,String name);
void delete(int id);
void search(int id);
void show();
}
