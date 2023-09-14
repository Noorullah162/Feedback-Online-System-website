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
$img = array();

session_start();
$branch = $_SESSION["branch"];
$year = $_SESSION["year"];
$sem = $_SESSION['sem'];
$rollno = $_SESSION['uname'];

      $sql = "SELECT * from facultydetails WHERE branch = '$branch' AND year = '$year' AND semester = '$sem' " ;
        $res = mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($res))
        {

echo("   
    
<form action='' method='post'>
      
      <div  style='border-radius: 10px;height: 700px;width: 700px;margin-top: 100px;margin-left: 300px; background-color:white; box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);'>


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

array_push($fn,$row['fn']);
array_push($subject, $row['subject']);
array_push($img, $row['img']);
echo("
         <div style='font-family:Arial; font-size: 20px; margin-left:10px; padding-left: 10px; padding-top:10px; margin-top:10px'>
               <div class = 'container'>
                     <div class='row'>
                        <div class = 'col'>
                           1.<b>Regularity in taking classes:</b>
                        </div>

                        <div class = 'col'>
                           <select class='form-select form-select-sm w-50' aria-label='.form-select-lg example' name = 'fb1[]'>
                                <option value=''>Select</option>
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                           </select>

                        </div>

                     </div>
               

               <br>
               
               
                     <div class='row'>
                              <div class = 'col'>
                                 1.<b>Deliver of structured lecture:</b>
                              </div>

                              <div class = 'col'>
                                 <select class='form-select form-select-sm w-50' aria-label='.form-select-lg example' name = 'fb2[]'>
                                      <option value=''>Select</option>
                                      <option value='1'>1</option>
                                      <option value='2'>2</option>
                                      <option value='3'>3</option>
                                      <option value='4'>4</option>
                                      <option value='5'>5</option>
                                 </select>

                              </div>

                     </div>

                <br>
                
                     <div class='row'>
                              <div class = 'col'>
                                 3.<b>Approach towards developing<br> professional skills of students:</b>
                              </div>

                              <div class = 'col'>
                                 <select class='form-select form-select-sm w-50' aria-label='.form-select-lg example' name = 'fb3[]'>
                                      <option value=''>Select</option>
                                      <option value='1'>1</option>
                                      <option value='2'>2</option>
                                      <option value='3'>3</option>
                                      <option value='4'>4</option>
                                      <option value='5'>5</option>
                                 </select>

                              </div>

                     </div>


                <br>

                


                     <div class='row'>
                              <div class = 'col'>
                                 4.<b>Control conducting the class:</b>
                              </div>

                              <div class = 'col'>
                                 <select class='form-select form-select-sm w-50' aria-label='.form-select-lg example' name = 'fb4[]'>
                                      <option value=''>Select</option>
                                      <option value='1'>1</option>
                                      <option value='2'>2</option>
                                      <option value='3'>3</option>
                                      <option value='4'>4</option>
                                      <option value='5'>5</option>
                                 </select>

                              </div>

                     </div>

               
               <br>
                


                     <div class='row'>
                              <div class = 'col'>
                                 5.<b>Completes syllabus in time:</b>
                              </div>

                              <div class = 'col'>
                                 <select class='form-select form-select-sm w-50' aria-label='.form-select-lg example' name = 'fb2[]'>
                                      <option value=''>Select</option>
                                      <option value='1'>1</option>
                                      <option value='2'>2</option>
                                      <option value='3'>3</option>
                                      <option value='4'>4</option>
                                      <option value='5'>5</option>
                                 </select>

                              </div>

                     </div>

                
                <br>

            </div>
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

      //echo("<br>");
      //echo("<center style='font-size:20px;'>".$img[$key]."&nbsp".$rollno);
      //echo("  ".$fn[$key]."&nbsp;&nbsp;".$subject[$key]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$fb1[$key]."</b></center>");
      //echo("<br><br><br>");

      $rating = ($fb1[$key]+$fb2[$key]+$fb3[$key]+$fb4[$key]+$fb5[$key])/5;
      $con = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($con,"feedback");
      $sql = "INSERT INTO fb (date, rollno, year, branch, semseter, fn, subject,img, f1, f2, f3, f4, f5, rating) VALUES ('2022/01/01', '$rollno', '$year', '$branch', '$sem', '$fn[$key]', '$subject[$key]','./images/$img[$key]', '$fb1[$key]', '$fb2[$key]', '$fb3[$key]', '$fb4[$key]', '$fb5[$key]', '$rating')";

      mysqli_query($con,$sql);
      
      /*
           echo "connected";
      }
        else{
           echo "not connected";
           // code...
      }*/
      
   }
}


?>