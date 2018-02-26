<?php
    if (isset($_POST['submit'])) {
        include_once 'dbconnection.php';

        $first = mysqli_real_escape_string($conn, $_POST['first']);
        $last = mysqli_real_escape_string($conn, $_POST['last']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
            header("Location: ../../register.php?register=empty");
            exit();
        }else{
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
                header("Location: ../../register.php?register=invalidchars");
                exit();
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../../register.php?register=emailerror");
                    exit();
                }else{
                    $sql = "SELECT * FROM users WHERE user_uid='$uid'";
                    $result = mysqli_query($conn, $sql);
                    $resultcheck = mysqli_num_rows($result);

                    if ($resultcheck > 0) {
                        header("Location: ../../register.php?register=uidTaken");
                        exit();
                    }else{

                        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

                        $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
                         VALUES ('$first', '$last', '$email', '$uid', '$hashedpwd');";
                        mysqli_query($conn, $sql);
                        header("Location: ../../index.php?register=success");
                        exit();
                    }
                }
            }
        }

    }else{
        header("Location: ../signup.php");
        exit();
    }
?>
