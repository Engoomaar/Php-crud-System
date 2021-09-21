
<?php
//inport connect file
include 'conn.php';

if(isset($_POST['insert'])){
    //create names and carry name
    $studentID = $_POST['student-id'];
    $studentname = $_POST['student-name'];
     $studentclass = $_POST['student-class'];

    //preparation query
    $query = "INSERT INTO student(id,name,class)VALUES('$studentID','$studentname','$studentclass')";

    //Execute query
    $result = $conn->query($query);

    if($result){
        echo "registeration is successfully";
    }
    else{
        echo $conn->error;
    }


}
//update query start here.......

else if(isset($_POST['update'])){
    $studentID = $_POST['student-id'];
    $studentname = $_POST['student-name'];
    $studentclass = $_POST['student-class'];

    //preparation query
    $query = "UPDATE student set name='$studentname', class='$studentclass' WHERE id='$studentID'";

    //Execute query
    $result = $conn->query($query);

    if($result){
        echo "registeration is successfully";
        header("location: list.php");
    }
     else{
        echo $conn->error;
    }
}
//delete query start here .......

if(isset($_GET['id'])){
    $studentID = $_GET['id'];
  

    //preparation query
    $query = "DELETE FROM student WHERE id='$studentID'";

    //Execute query
    $result = $conn->query($query);

    if($result){
        echo "registeration is successfully";
        header("location: list.php");
    }
    else{
        echo $conn->error;
    }
  
}
?>