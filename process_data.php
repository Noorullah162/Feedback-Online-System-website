<?php

//process_data.php

if(isset($_POST["name"]))
{
	
	$success = '';

	$name = $_POST["name"];
	

		$connect = new PDO("mysqli:host=localhost; dbname=sample", "root", "");

		$data = array(
			':name'			=>	$name
			);

		$query = "
		INSERT INTO sample 
		(name, email, website, comment, gender) 
		VALUES (:name, :email, :website, :comment, :gender)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		$success = '<div class="alert alert-success">Data Saved</div>';
}
else{
    echo "not connected";
          // code...	
}

?>


Fatal error: Uncaught Error: Call to a member function prepare() on null in C:\xampp\htdocs\Feedback_System\process_data.php:25 Stack trace: #0 {main} thrown in C:\xampp\htdocs\Feedback_System\process_data.php on line 25



Fatal error: Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens in C:\xampp\htdocs\Feedback_System\process_data.php:27 Stack trace: #0 C:\xampp\htdocs\Feedback_System\process_data.php(27): PDOStatement->execute(Array) #1 {main} thrown in C:\xampp\htdocs\Feedback_System\process_data.php on line 27
