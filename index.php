<?php

session_start()

?>

<html>
	<head>
		<link rel='shortcut icon' type="image/x-icon" href="./images/favicon.png" >
	    <title>
	        Feedback System PSCMR
	    </title>
	    <link rel="stylesheet" type="text/css" href="style.css">
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	    

	</head>
	
	<body>
		<header class ="body-header">
        	<div id = "logo">
            	<img src="./images/favicon.png">
            </div>
        	<span class="header-title">Potti Sriramulu Chalavadi Mallikarjunaroa College of Engineering & Technology</span>
    	</header>
	      
	      <main class="main">
			<div class='login'>
				<center><legend><b>Feedback Form</b></legend></center>
				<br>
				<br>	
			    <form method="post" action=""  class="login-form">
			    	
                    <input type="text" name = "uname" id = "uname"  placeholder='username' required />
                    <br>
                    <br>
                    <input type="password" name = "pwd" id = "pwd" placeholder='password' required/>
                     <br>
                    <br>    
                    <select class="year" name ="year" required>
                	    <option value="default" >Select Academic Year</option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4rd Year</option>
                    </select>

                    <select class="branch" name="branch" required>
                	    <option value="default">Select Branch</option>
                        <option value="CSM">CSM</option>
                        <option value="CIC">CIC</option>
                        <option value="CSEA">CSE-A</option>
                        <option value="CSEB">CSE-B</option>
                    </select>

                    <select class="Semester" id="selectsem" name="selectsem" required>
            		    <option value='default'>Select Semester</option>
            			<option value="1-1">1-1</option>
            			<option value="1-2">1-2</option>
            			<option value="2-1">2-1</option>
            			<option value="2-2">2-2</option>
            			<option value="3-1">3-1</option>
            			<option value="3-2">3-2</option>
            			<option value="4-1">4-1</option>
            			<option value="4-2">4-2</option>
          			</select>
                    <br>
                    <br>
                    <input type="submit" name="submit" value="LOGIN" class="submit">
                </form> 
			</div>			
			<i class="bi bi-person-circle"></i>
		</main>
	</body>

</html>

<?php
	
	if(isset($_POST['submit']))
	{
		$_SESSION["uname"] = $_POST['uname'];
		$_SESSION["pwd"] = $_POST['pwd'];
		$_SESSION["year"] = $_POST['year'];
		$_SESSION["branch"] = $_POST['branch'];
		$_SESSION['sem'] = $_POST['selectsem'];

		if($_SESSION["uname"] == "pscmr" && $_SESSION["pwd"] == "pscmr" && $_SESSION['year'] == 'default' && $_SESSION['branch'] == 'default' && $_SESSION['sem'] == 'default'){
			header('location:adminpage.php');
		}
		else{
			$rollno = $_SESSION["uname"];
			$pwd = $_SESSION["pwd"];
			$year = $_SESSION["year"];
			$branch = $_SESSION["branch"];
			$sem = $_SESSION["sem"];
			$con = mysqli_connect("localhost", "root", "");
			$db = mysqli_select_db($con, "feedback");
			$sql = "SELECT * from studentdetails WHERE rollno = '$rollno' AND pwd = '$pwd' AND year = '$year' AND branch = '$branch' AND semester = '$sem' ";
			$res = mysqli_query($con, $sql);

			if(mysqli_num_rows($res) > 0){
			header('location:feedbackpage.php');	
			}
			else{
				echo "";
			}

			
		}
	}
?>

