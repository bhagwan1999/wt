<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<body>
<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>


<%@ page import ="javax.sql.*" %>
<%
//String user=request.getParameter("userid"); 
//session.setAttribute("userid",user); 

String name=request.getParameter("usr");
String pwd=request.getParameter("pwd"); 
String fname=request.getParameter("fname"); 
String lname=request.getParameter("lname"); 
String email=request.getParameter("email"); 
Class.forName("com.mysql.jdbc.Driver"); 
java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/test",
"admin","admin"); 
Statement st= con.createStatement(); 
ResultSet rs; 
st.executeUpdate("insert into users7(uname,pass,fname,lname,email) values ('"+name+"','"+pwd+"','"+fname+"','"+lname+"','"+email+"')"); 
session.setAttribute("name", name);
out.println("Hi "+name+" you are registered"); 


%>
<a href ="logout.jsp">Logout</a><br/><br/>

</body>
</html>