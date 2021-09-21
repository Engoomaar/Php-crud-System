<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
     crossorigin="anonymous">
</head>
<body>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    $class = $_GET['class'];
}else{
    $id = "";
    $name = "";
    $class = "";
}

?>
<div class="container">
    <h1 class="text-center fs-3 mt-2">Insert your Information Here!</h1>
    <div class="card mt-5">
        <div class="row justfy-content-center">
            <div class="col-md">
            <form action="operation.php" method="POST">
                <div class="form-group">
                    <label for="text">Student ID</label>
                    <input type="text" name="student-id" id="" class="form-control" value="<?php echo  $id?>">
                </div>
                <div class="form-group">
                    <label for="text">student Name</label>
                    <input type="text" name="student-name" id="" class="form-control" value="<?php echo $name?>">
                </div>
                <div class="form-group">
                    <label for="text">Student class</label>
                    <input type="text" name="student-class" id="" class="form-control" value="<?php echo $class?>">
                </div>
                <button type="sumbite"  name="insert" class="btn btn-success mt-2 ml-2">Save Info</button>
                <button type="update"  name="update"class="btn btn-danger mt-2 ml-2">Update Info</button>
            </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" 
crossorigin="anonymous"></script>
</body>
</html>