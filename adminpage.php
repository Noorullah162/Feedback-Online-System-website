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
  Allocate Faculty
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

    <form method="post" action="adminoperations.php" enctype="multipart/form-data">


        <label for="rollno" class="fw-semibold">Student RollNo</label>
        <input type="text" name="rollno" id="rollno" class="form-control" required>
        
        <label for="name" class="fw-semibold">Student Name</label>
        <input type="text" name="name" id="name" class="form-control" >

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
  <input class="form-control form-control-sm" type="file" id="simg" name="simg" >
      
   </div>    
      <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-success m-0" name="addstudent" type="submit" value="Add Student">
      </div>

    </form>

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
  
  <form method="post" action="adminoperations.php" enctype="multipart/form-data">

     <label for="rollno" class="fw-semibold">Student RollNo</label>
        <input type="text" name="rollno" id="rollno" class="form-control" required>
        
        <label for="upname" class="fw-semibold">Student Name</label>
        <input type="text" name="upname" id="upname" class="form-control"  required>

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
  <input class="form-control form-control-sm" type="file" id="simg" name="simg" >
      
   </div>    
      <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-warning m-0" name="updatestudent" type="submit" value="Update Student">
      </div>

  </form>


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
        <form method="post" action="adminoperations.php" enctype="multipart/form-data">

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
  <input class="form-control form-control-sm" type="file" id="fimg" name="fimg" required>
      
      

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
        <h4 class="modal-title w-100 font-weight-bold">Allocate Faculty</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" action="adminoperations.php" enctype="multipart/form-data">

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

            $sql = "SELECT DISTINCT subject from facultydetails";
            $res = mysqli_query($con,$sql);
             while($row=mysqli_fetch_array($res))
            {
               echo("<option value = ".str_replace(" ", "_", $row['subject']).">".ucwords($row['subject'])."</option>");
            }
            ?>
        </select>

        <label for="updatefaculty" class="form-label fw-semibold">Allocate Faculty</label>
        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" id="updatefaculty" name = 'updatefaculty' required>
            <option value=''>Allocate Faculty</option>
            <?php
           $con = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"feedback");

            $sql = "SELECT DISTINCT fn from facultydetails";
            $res = mysqli_query($con,$sql);
             while($row=mysqli_fetch_array($res))
            {
              
               echo("<option value = ".str_replace(' ', '_',$row['fn']).">".ucwords($row['fn'])."</option>");
            }
            ?>
        </select>

        <label for="fimg" class="form-label fw-semibold">Chose Profile</label>
  <input class="form-control form-control-sm" type="file" id="img" name="fimg">

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-warning m-0" name="fac" type="submit" value="Save">
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
  $db = mysqli_select_db($con,"feedback");
  $sql = "SELECT  DISTINCT date, year, branch, semseter from fb";
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
  ".$row['semseter']."
  </td>
  
  <td>
  ".$row['branch']."
  </td>

  <td>");
  $branch = $row['branch'];
  $year = $row['year'];
  $date = $row['date'];
  $sem = $row['semseter'];
  $distinct = "SELECT COUNT(DISTINCT rollno) AS b from fb WHERE branch = '$branch' AND year ='$year' AND  date = '$date' AND semseter = '$sem' " ;
$count = mysqli_query($con,$distinct);
while($row = mysqli_fetch_assoc($count)){
  echo($row['b']);
}
echo("
  </td>

  <td>");
$distinct = "SELECT COUNT(DISTINCT rollno) AS count from studentdetails WHERE branch = '$branch' AND year ='$year' AND semester = '$sem'";
$count = mysqli_query($con,$distinct);
while($row = mysqli_fetch_assoc($count)){
  echo($row['count']);
  $tstd = $row['count'];
}

echo("
  </td>
  <td>
  FeedBack
  </td>

  <td>

  <form method='post' action='viewfeedback.php' >
  <input type = 'hidden' value = '".$date."' name = 'date'>
  <input type = 'hidden' value = '".$year."' name = 'year'>
  <input type = 'hidden' value = '".$branch."' name = 'branch'>
  <input type = 'hidden' value = '".$sem."' name = 'sem'>
  <input type = 'hidden' value = '".$tstd."' name = 'tstd'>

  <button class='btn btn-outline-info m-0'  name = 'view'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square me-3' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg>View</button>

</form>
  </td>

  <td>
  <form method='post' action='adminoperations.php' >
  <input type = 'hidden' value = '".$date."' name = 'date'>
  <input type = 'hidden' value = '".$year."' name = 'year'>
  <input type = 'hidden' value = '".$branch."' name = 'branch'>
  <input type = 'hidden' value = '".$sem."' name = 'sem'>
  <button class='btn btn-outline-danger m-0'  name = 'deletebutton'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill me-2' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</svg>Delete</button>

</form>

  </td>

  </tr>
  
  ");




}

echo("
  </tbody></table>
  ");


//$distinct = "SELECT COUNT(DISTINCT rollno) AS b from fb";
//$count = mysqli_query($con,$distinct);
//while($row = mysqli_fetch_assoc($count)){
//  echo($row['b']);
//}
//$num_rows = mysql_num_rows($count); //num rows
//echo count($num_rows);
// For every row in result make an object
//while($row = mysql_fetch_object($distinct)) {
//    var_dump($row);
//}

  ?>
</main>

</body>
</html>
