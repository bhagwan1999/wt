<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<%@ page import="java.sql.*"%>
	<%@ page import="javax.sql.*"%>
	<%
String name=request.getParameter("usr"); 
//session.setAttribute("name",name); 
String pwd=request.getParameter("pwd"); 
Class.forName("com.mysql.jdbc.Driver"); 
java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/test","admin","admin"); 
Statement st= con.createStatement(); 
//ResultSet rs=st.executeQuery("select * from users7 where uname ='"+name+"'"); 

ResultSet rs = st.executeQuery("select * from users7 where uname='" + name + "' and pass='" + pwd + "'");
if (rs.next()) {
	
	        session.setAttribute("name", name);
	        response.sendRedirect("sccuess.jsp");
	    } else {
	        out.println("Invalid password <a href='index.jsp'>try again</a>");
	    }

%>

</body>
</html>