<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>
    <?php if( isset($_POST["submit"]) ) : ?>
    <h1>Selamat Datang, <?= $_POST["nama"]?></h1>
    <?php endif;?>



<form action="" method="post">
     masukkan nama :
     <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">kirim!</button>
</form>


</body>
</html>