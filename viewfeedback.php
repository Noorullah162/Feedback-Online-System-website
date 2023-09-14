<!DOCTYPE html>
<html>
<head>
    
    <link rel='shortcut icon' type="image/x-icon" href="./images/favicon.png" >
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>


   <title>View Feedback</title>
   <style type="text/css">
      input[type=text]:focus {
  border: 2px solid rgba(0, 0, 225, .5);
}
   </style>
</head>
<body>
   <header>
      <h1 style="text-align: center; background-color: lightblue ;">View Feedback</h1>
   </header>
   <main>



<?php

if(isset($_POST['view'])){
	$branch = $_POST['branch'];
  	$year = $_POST['year'];
    $date = $_POST['date'];
	$sem = $_POST['sem'];
	$tstd = $_POST['tstd'];

//  echo("<br>".$branch."<br>".$date."<br>".$year."<br>".$sem);

    $con = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"feedback");

    $sql = "SELECT * from facultydetails WHERE branch = '$branch' AND year = '$year' AND semester = '$sem' " ;
    $res = mysqli_query($con,$sql);
    
    while($row=mysqli_fetch_array($res))
        {

echo("   
    
<form action='' method='post'>
      
      <div  style='border-radius: 10px;height: 600px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


         <div style = 'height: 200px;width: 500px;position: relative;display: flex;flex-direction: row; margin: 50px 0px 0px 20px; background-color:white; padding-top: 20px'>

            <div style = 'height: 10rem;width: 10rem;  margin: 10px 0px 10px 20px;  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
               
               <img src = './images/".$row["img"]."' style= 'height:100%; width:100%; background-color: white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px;'>
            </div>


            <div style = 'height: 8rem;width: 20rem; margin: 12px 0px 0px 10px;padding: 30px 0px 0px 10px;font-size: 1.2rem;color: black; font-family:Arial;'>
           
               <u><b>Name:</b></u>&nbsp; ".$row['fn']."
               <br>
               <u><b>subject:</b></u>&nbsp; ".$row['subject']."
           
            </div>

         </div>

");


//array_push($fn,$row['fn']); font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px;
//array_push($subject, $row['subject']);
//array_push($img, $row['img']);
echo("
         <div style='font-family:Arial; margin-top:10px'>
         ");

$fn = $row['fn'];
$subject = $row['subject'];
//echo($subject."<br>");
//$f = str_replace("_", " ", $fn);

$avg = "SELECT AVG(f1) AS avg from fb WHERE fn = '$fn' AND subject = '$subject' AND branch = '$branch' AND year ='$year' AND  date = '$date' AND semseter = '$sem' " ;

$value = mysqli_query($con,$avg);
while($row = mysqli_fetch_assoc($value)){
  $f1 = ($row['avg']/5)*100;
  //echo(($row['avg']/5)*100);

}

echo("
   <div class = 'container'>
      <div class = 'row'>
        <div class = 'col' style='margin-left:10px;'>
        Performance in Regularity taking classes:
         </div>

         <div class = 'col'>     
         <div class='progress w-75'>
     		<div class='progress-bar' role='progressbar' style='width: ".$f1."%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>".$f1."%</div>
   			</div>      
            </div>
         </div>
      

   <br>

");

// 2.

//echo($subject."<br>");
//$f = str_replace("_", " ", $fn);

$avg = "SELECT AVG(f2) AS avg from fb WHERE fn = '$fn' AND subject = '$subject' AND branch = '$branch' AND year ='$year' AND  date = '$date' AND semseter = '$sem' " ;

$value = mysqli_query($con,$avg);
while($row = mysqli_fetch_assoc($value)){
  $f2 = ($row['avg']/5)*100;
  //echo(($row['avg']/5)*100);

}

echo("
      <div class = 'row'>
     <div class = 'col' style='margin-left:10px;'>
     Performance in Deliver of structured:
      </div>

      <div class = 'col'>     
      <div class='progress w-75'>
      <div class='progress-bar' role='progressbar' style='width: ".$f2."%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>".$f2."%</div>
         </div>      
         </div>
      </div>

   
   

   <br>

");

// 3.

$avg = "SELECT AVG(f3) AS avg from fb WHERE fn = '$fn' AND subject = '$subject' AND branch = '$branch' AND year ='$year' AND  date = '$date' AND semseter = '$sem' " ;

$value = mysqli_query($con,$avg);
while($row = mysqli_fetch_assoc($value)){
  $f3 = ($row['avg']/5)*100;
  //echo(($row['avg']/5)*100);

}

echo("
   
   <div class = 'row'>
     <div class = 'col' style='margin-left:10px;'>
     Performance in Approach to developing skills for students:
      </div>

      <div class = 'col'>     
      <div class='progress w-75'>
      <div class='progress-bar' role='progressbar' style='width: ".$f3."%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>".$f3."%
      </div>
         </div>      
         </div>
      </div>

   <br>

");



// 4.

$avg = "SELECT AVG(f4) AS avg from fb WHERE fn = '$fn' AND subject = '$subject' AND branch = '$branch' AND year ='$year' AND  date = '$date' AND semseter = '$sem' " ;

$value = mysqli_query($con,$avg);
while($row = mysqli_fetch_assoc($value)){
  $f4 = ($row['avg']/5)*100;
  //echo(($row['avg']/5)*100);

}

echo("
   
   <div class = 'row'>
     <div class = 'col' style='margin-left:10px;'>
     Performance in Control conducting the class:
      </div>

      <div class = 'col'>     
      <div class='progress w-75'>
      <div class='progress-bar' role='progressbar' style='width: ".$f4."%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>".$f4."%</div>
         </div>      
         </div>
      </div>

   
   <br>

");


// 5.

$avg = "SELECT AVG(f5) AS avg from fb WHERE fn = '$fn' AND subject = '$subject' AND branch = '$branch' AND year ='$year' AND  date = '$date' AND semseter = '$sem' " ;

$value = mysqli_query($con,$avg);
while($row = mysqli_fetch_assoc($value)){
  $f5 = ($row['avg']/5)*100;
  //echo(($row['avg']/5)*100);

}

echo("
   
   <div class = 'row'>
     <div class = 'col' style='margin-left:10px;'>
     Performance in Completes syllabus in time:
      </div>

      <div class = 'col'>     
      <div class='progress w-75'>
      <div class='progress-bar' role='progressbar' style='width: ".$f5."%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>".$f5."%</div>
         </div>      
         </div>
      </div>

   
   <br>

");

// rating

$avg = "SELECT AVG(rating) AS avg from fb WHERE fn = '$fn' AND subject = '$subject' AND branch = '$branch' AND year ='$year' AND  date = '$date' AND semseter = '$sem' " ;

$value = mysqli_query($con,$avg);
while($row = mysqli_fetch_assoc($value)){
  $rating = ($row['avg']/5)*100;
  //echo(($row['avg']/5)*100);

}

echo("
   
   <div class = 'row'>
     <div class = 'col' style='margin-left:10px;font-size:20px;'>
     <b>Total Performance:</b>
      </div>

      <div class = 'col'>     
      <div class='progress w-75'>
      <div class='progress-bar bg-warning' role='progressbar' style='width: ".$rating."%;color:black;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>".round($rating,3)."%</div>
         </div>      
         </div>
      </div>

   
   <br>

");


echo("</div></div></div>");
}

}
?>

 
 </form>

 </main>

</body>
</html>

