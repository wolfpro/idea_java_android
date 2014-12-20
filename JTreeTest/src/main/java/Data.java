/**
 * Created by wolfpro on 10/27/14.
 */

import java.sql.*;

public class Data  {
    private Connection bd;
    private Statement st;
    private ResultSet rs;

    Data() {
        try{
            Class.forName("org.sqlite.JDBC");
        }catch (ClassNotFoundException e){
            System.out.println("Bad connection " + e);
        }
        
        try {
            bd = DriverManager.getConnection("jdbc:sqlite:Home.sqlite");
            st = bd.createStatement();
            rs = st.executeQuery("select * from group");

        }catch (SQLException e){
            System.out.println("Bad connection " + e);
        }







    }
}