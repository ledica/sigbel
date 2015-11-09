
package Control;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

public interface GenericDao<T, N> {
    
    public boolean insert(T obj);
    public boolean remove(T obj);
    public boolean remove(int N);
    public boolean consulta(int N);
    public boolean update(T obj);
    public List<T> getLista();
   
}
