<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel='shortcut icon' type="image/x-icon" href="./images/favicon.png" >
   <title>Admin</title>
   
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
 
 <link rel="stylesheet" type="text/css" href="stylead.css">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</head>
<body>

<div class = "headerad">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addstudent">
  Add Students
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Updatestudent">
  Update Students
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addfaculty">
  Add Faculty
</button>

<button type="button" class="btn btn-default btn-rounded mb-4 btn-primary" data-toggle="modal" data-target="#updatefac">
  Update Faculty
</button>

</div>
<!-- Vertically centered modal 
<div class="modal-dialog modal-dialog-centered" id="exampleModal">
  ...
</div>
-->

<!-- Modal -->
<div class="modal fade" id="addstudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="rollno" class="fw-semibold">Student RollNo</label>
        <input type="text" name="rollno" id="rollno" class="form-control" required>
        
        <label for="name" class="fw-semibold">Student Name</label>
        <input type="text" name="name" id="name" class="form-control" required>

        <label for="selectyear" class="fw-semibold">Select Year</label>
          <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectyear" name="selectyear" required>
            <option value=''>Select Year</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>

    <div class = "container">
      <div class="row">
      <div class = "col">
        <label for="selectbranch" class="fw-semibold">Select Branch</label>
          <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectbranch" name="selectbranch" required>
            <option value=''>Select Branch</option>
            <option value="CSM">CSM</option>
            <option value="CIC">CIC</option>
            <option value="CSE-A">CSE-A</option>
            <option value="CSE-B">CSE-B</option>
          </select>
      </div>

      <div class = "col">
        <label for="selectsem" class="fw-semibold">Select Semester</label>
          <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectsem" name="selectsem" required>
            <option value=''>Select Semester</option>
            <option value="1-1">1-1</option>
            <option value="1-2">1-2</option>
            <option value="2-1">2-1</option>
            <option value="2-2">2-2</option>
            <option value="3-1">3-1</option>
            <option value="3-2">3-2</option>
            <option value="4-1">4-1</option>
            <option value="4-2">4-2</option>
          </select>

      </div>
      </div>
    </div>

    <label for="simg" class="form-label fw-semibold" >Chose Profile</label>
  <input class="form-control form-control-sm" type="file" id="simg" name="simg">
      
   </div>    
      <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-success m-0" name="addstudent" type="submit" value="Add Student">
      </div>

    </div>
  </div>
</div>


<div class="modal fade" id="Updatestudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <label for="rollno" class="fw-semibold">Student RollNo</label>
        <input type="text" name="rollno" id="rollno" class="form-control" required>
        
        <label for="name" class="fw-semibold">Student Name</label>
        <input type="text" name="name" id="name" class="form-control" required>

        <label for="selectyear" class="fw-semibold">Select Year</label>
          <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectyear" name="selectyear" required>
            <option value=''>Select Year</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>

    <div class = "container">
      <div class="row">
      <div class = "col">
        <label for="selectbranch" class="fw-semibold" >Select Branch</label>
          <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectbranch" name="selectbranch" required>
            <option value=''>Select Branch</option>
            <option value="CSM">CSM</option>
            <option value="CIC">CIC</option>
            <option value="CSE-A">CSE-A</option>
            <option value="CSE-B">CSE-B</option>
          </select>
      </div>

      <div class = "col">
        <label for="selectsem" class="fw-semibold">Select Semester</label>
          <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectsem" name="selectsem" required>
            <option value=''>Select Semester</option>
            <option value="1-1">1-1</option>
            <option value="1-2">1-2</option>
            <option value="2-1">2-1</option>
            <option value="2-2">2-2</option>
            <option value="3-1">3-1</option>
            <option value="3-2">3-2</option>
            <option value="4-1">4-1</option>
            <option value="4-2">4-2</option>
          </select>

      </div>
      </div>
    </div>

    <label for="simg" class="form-label fw-semibold">Chose Profile</label>
  <input class="form-control form-control-sm" type="file" id="simg" name="simg">
      
   </div>    
      <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-warning m-0" name="updatestudent" type="submit" value="Update Student">
      </div>

    </div>
  </div>
</div>




<div class="modal fade" id="addfaculty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Faculty</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">

          <label for="fn" class="fw-semibold">Faculty Name</label>
            <input type="text" name="fn" id='fn' class="form-control" placeholder="Faculty Name" required>
        
          <label for="selectyear" class="fw-semibold">Select Year</label>
            <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectyear" name="selectyear" required>
              <option value=''>Select Year</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>

        <div class = "container">
      <div class="row">
      <div class = "col">
        <label for="selectbranch" class="fw-semibold">Select Branch</label>
          <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectbranch" name="selectbranch" required>
            <option value=''>Select Branch</option>
            <option value="CSM">CSM</option>
            <option value="CIC">CIC</option>
            <option value="CSE-A">CSE-A</option>
            <option value="CSE-B">CSE-B</option>
          </select>
      </div>

      <div class = "col">
        <label for="selectsem" class="fw-semibold">Select Semester</label>
          <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectsem" name="selectsem" required>
            <option value=''>Select Semester</option>
            <option value="1-1">1-1</option>
            <option value="1-2">1-2</option>
            <option value="2-1">2-1</option>
            <option value="2-2">2-2</option>
            <option value="3-1">3-1</option>
            <option value="3-2">3-2</option>
            <option value="4-1">4-1</option>
            <option value="4-2">4-2</option>
          </select>

      </div>
      </div>
      </div>
          <label for="subject" class="fw-semibold">Subject</label>
          <input type="text" name="subject" id='subject' class="form-control" required>

           <label for="fimg" class="form-label fw-semibold">Chose Profile</label>
  <input class="form-control form-control-sm" type="file" id="img" name="fimg">
      
      

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-success m-0" name="addfaculty" type="submit" value="Add Faculty">
      </div>

      </form>
    </div>
  </div>
</div>




<div class="modal fade" id="updatefac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Update Faculty</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body mx-3">
        
        <label for="selectyear" class="fw-semibold">Select Year</label>
          <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectyear" name="selectyear" required>
            <option value=''>Select Year</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>

    <div class = "container">
      <div class="row">
      <div class = "col">
        <label for="selectbranch" class="fw-semibold">Select Branch</label>
          <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectbranch" name="selectbranch" required>
            <option value=''>Select Branch</option>
            <option value="CSM">CSM</option>
            <option value="CIC">CIC</option>
            <option value="CSE-A">CSE-A</option>
            <option value="CSE-B">CSE-B</option>
          </select>
      </div>

      <div class = "col">
        <label for="selectsem" class="fw-semibold">Select Semester</label>
          <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="selectsem" name="selectsem" required>
            <option value=''>Select Semester</option>
            <option value="1-1">1-1</option>
            <option value="1-2">1-2</option>
            <option value="2-1">2-1</option>
            <option value="2-2">2-2</option>
            <option value="3-1">3-1</option>
            <option value="3-2">3-2</option>
            <option value="4-1">4-1</option>
            <option value="4-2">4-2</option>
          </select>

      </div>
      </div>
      </div>

          <label for="selectsubject" class="form-label fw-semibold">Select Subject</label>
        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" id="selectsubject" name = 'selectsubject' required>
            <option value=''>Select Subject</option>
            <?php
           $con = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"feedback");

            $sql = "SELECT DISTINCT subject from factulty";
            $res = mysqli_query($con,$sql);
             while($row=mysqli_fetch_array($res))
            {
               
               echo("<option value = ".$row['subject'].">".$row['subject']."</option>");
            }
            ?>
        </select>

        <label for="updatefaculty" class="form-label fw-semibold">Update Faculty</label>
        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" id="updatefaculty" name = 'updatefaculty' required>
            <option value=''>Update Faculty</option>
            <?php
           $con = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"feedback");

            $sql = "SELECT DISTINCT fn from factulty";
            $res = mysqli_query($con,$sql);
             while($row=mysqli_fetch_array($res))
            {
               
               echo("<option value = ".$row['fn'].">".$row['fn']."</option>");
            }
            ?>
        </select>

        <label for="fimg" class="form-label fw-semibold">Chose Profile</label>
  <input class="form-control form-control-sm" type="file" id="img" name="fimg">

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-warning m-0" name="fac" type="submit" value="Update Faculty">
      </div>
    </form>
    </div>
  </div>
</div>

<main>
  <?php
  
  echo("
  <table class='table' style='margin-top:80px;' >
  <thead class='table-dark' style='font-size:20px;'>
    
    <th>
    Date
    </th>
    
    <th>
    Year
    </th>
    
    <th>
    Semester
    </th>

    <th>
    Branch
    </th>
    
    <th>
    Submited Students
    </th>

    <th>
    Total Students
    </th>

    <th>
    FeedBack
    </th>
    
    <th>
    View
    </th>

    <th>
    Delete
    </th>

    
  </thead>
  <tbody>
  ");

  $con = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($con,"sample");
  $sql = "SELECT DISTINCT date, year, branch from fb";
  $res = mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($res))
  {
           
  echo("
  
  <tr>
  <td>
  ".$row['date']."
  </td>

  <td>
  ".$row['year']."
  </td>

  <td>

  <td>
  ".$row['branch']."
  </td>

  <td>

  </td>

  <td>

  </td>
  <td>
  FeedBack
  </td>

  <td>
  <a href = '#'>view</a>
  </td>

  <td>
  <button class='btn btn-outline-danger m-0'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill me-2' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</svg>Delete</button>
  </td>

  </tr>
  ");


}

echo("</tbody>
  </table>");
  ?>
</main>

</body>
</html>

<?php

if(isset($_POST['addfaculty'])){

  $fn = $_POST['fn'];
  $year = $_POST['selectyear'];
  $branch = $_POST['selectbranch'];
  $sem = $_POST['selectsem'];
  $subject = $_POST['subject'];


  echo("fn = ".$fn." year = ".$year."  branch = ".$branch."  sem = ".$sem."  subject = ".$subject." ");

  
/*
  $con = mysqli_connect("localhost", "root", "");

  $db = mysqli_select_db($con, "feedback");

  
  $sql = "INSERT INTO facultydetails(fn, year, branch, subject, semester) VALUES ('$fn', '$year', '$branch', '$subject', '$sem') ";

  
  if(mysqli_query($con, $sql)){
    echo "connected";
  }
  else{
    echo("not connected");
  }

*/


}


if(isset($_POST['']))

?>