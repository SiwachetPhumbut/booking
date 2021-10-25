<?php 

    session_start();

    if (isset($_POST['id_user'])) {

        include('connection.php');

        $id_user = $_POST['id_user'];
        $pass_user = $_POST['pass_user'];
        $pass_userenc = md5($pass_user);

        $query = "SELECT * FROM name_bk WHERE id_user = '$id_user' AND pass_user = '$pass_userenc'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['unameid'] = $row['id'];
            $_SESSION['name_bk'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['level_bkc'] = $row['level_bkc'];

            if ($_SESSION['level_bkc'] == 'u') {
                header("Location: correct.php");
            }
        } else {
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
        }

    } else {
        header("Location: name_bkc.php");
    }

