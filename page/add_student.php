<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add New Students</title>
</head>

<body>
<div class="d-flex align-items-center flex-column justify-content-center vh-100">
    <form method="POST" enctype="multipart/form-data" action="#" class="w-75">
        <div class="text-center">
            <h3>ADD Student</h3>
        </div>
        <div class="form-group mb-2 p-1">
            <label>Name</label>
            <input type="text" name="Name" value="" class="form-control">
        </div>

        <div class="form-group mb-2 p-1">
            <label>Email</label>
            <input type="gmail" name="Email" value="" class="form-control">
        </div>

        <div class="form-group mb-2 p-1">
            <label>Phone</label>
            <input type="number" name="Phone" value="" class="form-control">
        </div>

        <div class="form-group mb-2 p-1">
            <label>Enroll Number</label>
            <input type="number" name="Enroll_Number" class="form-control">
        </div>

        <div class="form-group mb-2 p-1">
            <label>Date of admission</label>
            <input type="date" name="Date_of_admission"  class="form-control ">
        </div>

        <div class="form-group mb-2 p-1">
            <label>Image</label>
            <input name="image" type="file" class="form-control-file">
        </div>

        <input type="submit" value="save" name="save" class ="btn-success btn">
    </form>

</div>
<?php
    if (isset($_POST['save'])) {
        $users = json_decode(file_get_contents('user-student.json'),true);
        $users_input = array(
            // 'image' => $_POST['image'],
            'Name' => $_POST['Name'],
            'Email' => $_POST['Email'],
            'Phone' => $_POST['Phone'],
            'Enroll_Number' => $_POST['Enroll_Number'],
            'Date_of_admission' => $_POST['Date_of_admission']

        );
        $users[] = $users_input;
        $users = json_encode($users, JSON_PRETTY_PRINT);
        file_put_contents('user-student.json', $users);
        header('location: ../student.php');
    }
    ?> 
</body>

</html>