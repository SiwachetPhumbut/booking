<?php 

    session_start();

    if (!$_SESSION['nameid']) {
        header("Location: name_bk.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm Booking</title>

    <link rel="stylesheet" href="style.css">
    <div class="container ">
 

</head>
<body>

        <h1>ระบบจองรถ</h1>
        <h3>ท่านทำรายการสำเร็จแล้วขอบคุณ, <?php echo $_SESSION['name_bk']; ?></h3>
        <br>
        <h3><a class="nav-link " aria-current="page" href="logout.php">ออกจากระบบ</a></h3>
        <br>
       
    
</body>
</html>


<?php } ?>