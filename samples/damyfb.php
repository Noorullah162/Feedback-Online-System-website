<!DOCTYPE html>
<html>
<head>
   <link rel='shortcut icon' type="image/x-icon" href="./images/favicon.png" >
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Feedback</title>
   <style type="text/css">
      input[type=text]:focus {
  border: 2px solid rgba(0, 0, 225, .5);
}
   </style>
</head>
<body>
   <header>
      <h1 style="text-align: center; background-color: lightblue ;">FeedbackSystem</h1>
   </header>
   <main>

      
<?php
		$con = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($con,"feedback");
$fn = array();
$subject = array();

		$sql = "select * from factulty";
        $res = mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($res))
        {

echo("   
    
<form action='' method='post'>
      
      <div  style='border-radius: 10px;height: 700px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


         <div style = 'height: 200px;width: 500px;position: relative;display: flex;flex-direction: row; margin: 50px 0px 0px 20px; background-color:white; padding-top: 20px'>

            <div style = 'height: 10rem;width: 10rem;  margin: 10px 0px 10px 20px;  box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px'>
               
               <img src = 'Feedback_System/".$row["img"]."' style= 'height:100%; width:100%; background-color: white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2); border-radius:10px;'>
            </div>


            <div style = 'height: 8rem;width: 20rem; margin: 12px 0px 0px 10px;padding: 30px 0px 0px 10px;font-size: 1.2rem;color: black; font-family:Arial;'>
           
               Name: ".$row['fn']."
               <br>
               subject: ".$row['subject']."
           
            </div>
         </div>

");

array_push($fn,$row['fn']);
array_push($subject, $row['subject']);
echo("
         <div style='font-family:Arial; font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px; margin-top:10px'>
               <div>
               1.<u><b>Regularity in taking classes:</b></u>
               
               <input type='number'  max = '5' min = '1' size='5' style='margin-left:150px; border-radius:10px; border-color: lightgrey; padding-left:10px;' padding-left:10px;'  name = 'fb1[]'>
               
               </div>

               <br>
               
               <div>
               2.<u><b>Deliver of structured lecture:</b></u>
               
               <input type='number' max = '5' min = '1' size='5' style='margin-left:150px; border-radius:10px; border-color: lightgrey; padding-left:10px;'  name = 'fb2[]'>
               </div>

                <br>


                <div>
               3.<u><b>Approach towards developing<br> professional skills of students:</b></u>
               
               <input type='number'  max = '5' min = '1' size='5' style='margin-left:150px; border-radius:10px; border-color: lightgrey; padding-left:10px;'  name = 'fb3[]'>
               </div>
               
                <br>

                <div>
               4.<u><b>Regularity in taking classes:</b></u>
               
               <input type='number'  max = '5' min = '1' size='5' style='margin-left:150px; border-radius:10px; border-color: lightgrey; padding-left:10px;'  name = 'fb4[]'>
               </div>
               

                <br>


                <div>
               5.<u><b>Regularity in taking classes:</b></u>
               
               <input type='number' max = '5' min = '1'  size='5' style='margin-left:150px; border-radius:10px; border-color: lightgrey; padding-left:10px;'  name = 'fb5[]'>
               
                </div>

                
                <br>
         </div>
      </div>

");

}

?>

 <input type="submit" class="btn btn-primary" name= 'Feedbacksubmit' style='width: 50%; margin: 50px 50px 50px 300px; padding: 10px 10px 10px 10px; font-size:20px; border-radius: 10px;'  value="Submit">

 </form>

  </main>

</body>
</html>

<?php

if(isset($_POST['Feedbacksubmit'])){

   //$r1 = $_POST['r1'];
   //$r2 = $_POST['r2'];
   //echo($r1);
   $fb1 = $_POST['fb1'];
   $fb2 = $_POST['fb2'];
   $fb3 = $_POST['fb3'];
   $fb4 = $_POST['fb4'];
   $fb5 = $_POST['fb5'];


   foreach ($fb1 as $key => $value) {
      echo("<br>");
      echo("<center style='font-size:50px;'><b>".$fn[$key]."&nbsp;&nbsp;".$subject[$key]."&nbsp;&nbsp;".$value."&nbsp;&nbsp;".$key."&nbsp;&nbsp;".$fb1[$key]."</b></center>");
      echo("<br><br><br>");

      $con = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($con,"sample");
      $sql = "INSERT INTO fb (fn, subject, f1, f2, f3, f4, f5) VALUES ('$fn[$key]', '$subject[$key]', '$fb1[$key]', '$fb2[$key]', '$fb3[$key]', '$fb4[$key]', '$fb5[$key]')";

      if(mysqli_query($con,$sql)){
           echo "connected";
      }
        else{
           echo "not connected";
           // code...
      }
      
   }
}
else{
   echo("not printed");
}

?>