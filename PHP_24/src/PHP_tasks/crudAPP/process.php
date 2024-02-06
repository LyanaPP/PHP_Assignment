<?php
$title = "Exercise 7: CURD-Create";
$md="Please use appropriate meta Description";
include '../header.php'; ?>


<?php 
/* 
The isset() function is used to check if a variable is set and not NULL. In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
if (isset($_POST['submit'])) {
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $city= $_POST['city'];
    $groupid= $_POST['groupid'];
    
    //connect to the database server 
    include 'db.php';

    // write a sqlstatement to insert data 
    $sql="insert into studentsinfo (fname, lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";
    /*
    for the table named studentinfo
    $sql="insert into studentinfo (fname, lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";
    */

    if($conn -> query($sql) === TRUE) {
        echo "New record added";
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn -> error;
  }
    $conn->close();
}

?>

<?php include '../footer.php'; ?>