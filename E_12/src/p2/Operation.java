package p2;

import java.util.List;
import java.util.Map;

public interface Operation {
void add(EmpPojo e);
void update(String name,int id);
void delete(int id);
void search(int id);
void show();
}
