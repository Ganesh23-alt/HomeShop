<?php
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$cell=$_POST['cell'];
$phone=$_POST['phone'];

    //Database connection

$db_connection = pg_connect("host=localhost dbname=onlineshopping user=postgres password=root");
   //$result = pg_query($db_connection, "SELECT lastname FROM employees");
if (!$db_connection) {
	echo "An error occurred.\n";
	exit;
}
else{
	$result = pg_query($db_connection, "INSERT INTO registration(id,Fname,Lname,email,pwd,address1,address2,cell,phone)
		VALUES(?,?,?,?,?,?,?,?,?)");
	if (!$result) {
		echo "An error occurred.\n";
		exit;
	}
	else{
		echo "Welcome to HomeShop";
		exit;
	}
}

    // free memory
pg_free_result($result);
	// close connection
pg_close($db_connection);


?>