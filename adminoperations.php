<?php

if(isset($_POST['addstudent'])){

  $rollno = strtolower($_POST['rollno']);
  $name = strtolower($_POST['name']);
  $year = $_POST['selectyear'];
  $branch = $_POST['selectbranch'];
  $semester = $_POST['selectsem'];
  $image = $_FILES['simg']['name'];


  $imagepath = 'images/'.basename($image);

  move_uploaded_file($_FILES['simg']['tmp_name'], $imagepath);


  $con = mysqli_connect("localhost", "root", "");

  $db = mysqli_select_db($con, "feedback");

  $sql = "INSERT INTO studentdetails (rollno, pwd, name, year, branch, semester, img) VALUES ('$rollno', '$rollno', '$name', '$year', '$branch', '$semester', '$image')";

  mysqli_query($con, $sql);
}



if(isset($_POST['addfaculty'])){

  $fn = $_POST['fn'];
  $year = $_POST['selectyear'];
  $branch = $_POST['selectbranch'];
  $sem = $_POST['selectsem'];
  $subject = $_POST['subject'];
  $image = $_FILES['fimg']['name'];


  $imagepath = 'images/'.basename($image);

  move_uploaded_file($_FILES['fimg']['tmp_name'], $imagepath);
  
  //echo($imagepath."<br>");
  //echo($image);

  $con = mysqli_connect("localhost", "root", "");

  $db = mysqli_select_db($con, "feedback");

  

  //  echo("fn = ".$fn." year = ".$year."  branch = ".$branch."  sem = ".$sem."  subject = ".$subject." ");

  $sql = "INSERT INTO facultydetails(fn, year, branch, subject, semester, img) VALUES ('$fn', '$year', '$branch', '$subject', '$sem', '$image') ";

  mysqli_query($con, $sql);
}




if(isset($_POST['updatefaculty'])){

  $year = $_POST['selectyear'];
  $branch = $_POST['selectbranch'];
  $sem = $_POST['selectsem'];
  $subject =str_replace('_', ' ', $_POST['selectsubject']);
  $upfn = str_replace('_', ' ', $_POST['updatefaculty']);
  $image = $_FILES['fimg']['name'];


  $imagepath = 'images/'.basename($image);

  move_uploaded_file($_FILES['fimg']['tmp_name'], $imagepath);

  //echo("upfn = ".$upfn." year = ".$year."  branch = ".$branch."  sem = ".$sem."  subject = ".$subject." ");

  
  $con = mysqli_connect("localhost", "root", "");

  $db = mysqli_select_db($con, "feedback");

  $sql = "UPDATE facultydetails SET fn='$upfn', img = '$image' WHERE year='$year' AND branch='$branch' AND subject='$subject' AND semester='$sem' ";

   mysqli_query($con, $sql);

}


if(isset($_POST['updatestudent'])){
  $rollno = strtolower($_POST['rollno']);
  
  $upname = strtolower($_POST['upname']);

  $year = $_POST['selectyear'];

  $branch = $_POST['selectbranch'];

  $sem = $_POST['selectsem'];
  $image = $_FILES['simg']['name'];


  $imagepath = 'images/'.basename($image);

  move_uploaded_file($_FILES['simg']['tmp_name'], $imagepath);

  $con = mysqli_connect("localhost", "root", "");

  $db = mysqli_select_db($con, "feedback");

  $sql = "UPDATE studentdetails SET name = '$upname', year = '$year', branch = '$branch', semester = '$sem', img = '$image' WHERE rollno = '$rollno' ";

  mysqli_query($con, $sql);

}

if(isset($_POST['deletebutton'])){
  $branch = $_POST['branch'];
  $year = $_POST['year'];
  $date = $_POST['date'];
  $sem = $_POST['sem'];

//  echo("<br>".$branch."<br>".$date."<br>".$year."<br>".$sem);

  $con = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($con, "feedback");
  $sql = "DELETE FROM fb WHERE branch = '$branch' AND year ='$year' AND  date = '$date' AND semseter = '$sem' ";

  mysqli_query($con, $sql);

}

header('location:adminpage.php');

?>