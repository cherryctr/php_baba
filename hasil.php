<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>

<body>
    <?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pesan = $_POST['pesan'];
    $photo = $_FILES['foto']['name'];

    move_uploaded_file($_FILES['foto']['tmp_name'], 'images/' . $photo);


    $message = 'Congratulation your file was accepted';
    echo $message;
    echo "<br>";
    echo "<img src='images/".$photo."'>";

    echo $nama;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $pesan;

      
    echo "<br>";
    echo $gender;
    echo "<br>";

    ?>





</body>

</html>