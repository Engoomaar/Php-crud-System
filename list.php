<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list of php database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
     crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
             <thead class="bg-dark text-white">
                 <tr>
                     <th>StudentID</th>
                     <th>StudentName</th>
                     <th>StudentClass</th>
                     <th>action</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                 $query = "SELECT * FROM student";
                 $result = $conn->query($query);
                 $htmltable = "";

                 if($result){
                     $htmltable .="<tr>";
                     while($row= $result->fetch_assoc()){

                         $htmltable .= "<td>" . $row['id'] . "</td>";
                         $htmltable .= "<td>" . $row['name'] . "</td>";
                         $htmltable .= "<td>" . $row['class'] . "</td>";
                         
                         $link_update="form.php?". "id=". $row['id']. "&name=". $row['name']. "&class=". $row['class'];
                         $link_delete="operation.php?". "id=". $row['id'];
                         $htmltable .= "<td>".'<a href="'.$link_update.'" class="btn btn-success">Update</a>
                         <a href="'.$link_delete.'" class="btn btn-danger p-2 m-2">Delete</a>'."</td>";
                         $htmltable .="</tr>";
                         
                     }
                     echo $htmltable;
                 }
                 else{
                     echo $conn->error;
                 }
                 ?>
             </tbody>
            </table>
        </div>  
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" 
crossorigin="anonymous"></script>
</body>
</html>