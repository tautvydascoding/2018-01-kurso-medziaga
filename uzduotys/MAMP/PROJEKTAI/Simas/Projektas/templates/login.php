<?php 

session_start();

if (isset($_POST['submit'])) {
    # code
    include "./db_connect.php";

    $user = mysqli_real_escape_string(getPrisijungimas(), $_POST['user']);
    $password = mysqli_real_escape_string(getPrisijungimas(), $_POST['password']);

    //Errot handlers
    //to check 
    if (empty($user) || empty($password)) {
        header("Location: ../sign_in.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE user='$user'";
        $result = mysqli_query(getPrisijungimas(), $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../sign_in.php?login=error2");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //de-hashin the password
                $hashedPwdCheck = ($password == $row['password']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../sign_in.php?login=error3");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //log in the user here
                    $_SESSION['user'] = $row['user'];
                    header("Location: ../sign_in.php?login=$user");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../sign_in.php?login=error1");
    exit();
}
