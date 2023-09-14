
<html>
<head>
      <link rel='shortcut icon' type="image/x-icon" href="./images/favicon.png" >
       <title>
           Feedback System PSCMR
       </title>
       <link rel="stylesheet" type="text/css" href="style.css">
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <script src="https://kit.fontawesome.com/d9d229363e.js" crossorigin="anonymous"></script>

</head>
<body>
   
   <form method="post" action="" enctype="multipart/form-data">
      fn name<input type="text" name="fn"><br><br>
      subject<input type="text" name="subject"><br><br>
      <input type="file" name="file"><br><br>
      <input type="submit" name="submit">
   </form>
   <div class = 'php'>
 
</div>
</body>

</html>


<?php

   if (isset($_POST['submit'])){
     
      $fn = $_POST['fn'];
      echo($fn);
      $subject = $_POST['subject'];
      $file = $_FILES['file']['name'];
      $temp = $_FILES['file']['tmp_name'];
      print_r($temp);
      $filext = explode('.', $file);
      $filecheck = strtolower(end($filext));

      $fileextstored = array('png', 'jpg', 'jpeg');

      if (in_array($filecheck, $fileextstored)){
         $destinationfile = 'images/'.$file;
         move_uploaded_file($temp, $destinationfile);
      }

      $con = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($con,"feedback");
      $sql = "INSERT INTO factulty(fn, subject, img)VALUES('$fn', '$subject', '$destinationfile')";

      if(mysqli_query($con,$sql)){
           echo "connected";
        }
        else{
           echo "not connected";
           // code...
        }
       
}
     /*    $sql = "select * from factulty";
        $res = mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($res))
        {
           echo("<table border=2 cellspacing=20> <tr>");
           echo("<td>".$row['fn']."</td>");
           echo("<td></td>");
           echo("<td> <img src =".$row['img']."></td>");
           echo("</table> </tr>");
        }
   }

$date = "CSM".date("dmy");
$con = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"feedback");
    $sql = "select * from $date";
   
   
    //$sql="INSERT INTO reg(fname,lname,uname,pwd,email,mob)VALUES('$fname','$lname','$uname,'$pwd','$email','$mob')";
        if(mysqli_query($con,$sql)){
           echo "fill form";
        }
        else{
           echo "Contact to your admin to lanch the feedback form";
           // code...
        }



      
           $con = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"feedback");

            $sql = "SELECT DISTINCT fn from factulty";
            $res = mysqli_query($con,$sql);
             while($row=mysqli_fetch_array($res))
            {
               
               echo("<td> ".$row['fn']."</td>");
            }



*/

?>


