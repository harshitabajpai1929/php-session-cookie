<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=submit] {
            width: 10%;
            height: 50px;
            background-color: darkblue;
            color: white;
            font-size: 19px;
            border-radius: 7px;
        }
    </style>
</head>
<body>
    <?php
     $target_dir = "upload/";
     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $input = $_POST['fileToUpload'];
    $destination="upload/".$_FILES['fileToUpload']['name'];
    if (isset($_POST['submit'])) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "upload/".$_FILES["fileToUpload"]["name"]);
    }
    ?>
   <form action="" method="POST" enctype="multipart/form-data">
        <h1>Image Gallery</h1>
        <p>this page displays the list of uploaded images.</p>
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <br>
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <?php
    if(!isset($_SESSION["fileToUpload"]))
    {
        $_SESSION["fileToUpload"] = array();
    }
     array_push($_SESSION["fileToUpload"],$_FILES["fileToUpload"]["name"]);
        foreach ($_SESSION['fileToUpload'] as $key => $value) {
            echo '<img src="upload/'.$value.'" width="200px" height="200px" />';
        }
     ?>
</body>
</html>