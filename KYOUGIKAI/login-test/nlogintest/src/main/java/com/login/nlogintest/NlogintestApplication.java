package com.login.nlogintest;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.Statement; //または　java.sql.PreparedStatement;
import java.sql.SQLException;
Class.forName("com.mysql.jdbc.Driver");


@SpringBootApplication
public class NlogintestApplication {
	Connection connection = DriverManager.getConnection("C:\\Users\\all\\Downloads\\mysql-8.4.0-winx64\\mysql-8.4.0-winx64",
	"all","kyogikai@com;z.");
	//静的　→　Statement
Statement statement = connection.createStatement();

//動的 → PreparedStatement
String sql = "INSERT INTO my_table (column1, column2) VALUES (?, ?)";
PreparedStatement pstmt = connection.prepareStatement(sql);
	public static void main(String[] args) {
		SpringApplication.run(NlogintestApplication.class, args);
	}


}
