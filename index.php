<?php
session_start();
include('./include/connect.php');

if (isset($_POST['login'])) {

    $user_code = $con->real_escape_string($_POST['user_code']);
    $user_password = $con->real_escape_string($_POST['user_password']);

    $stud = 'ST_';
    $fac = 'FA_';
    $off = 'OFF_';
    $par = 'PA_';

    if (str_starts_with($user_code, $stud) == $user_code) {
        $select_query = "Select * from user_students where student_code='$user_code'";
        $result = mysqli_query($con, $select_query);
        $rows_count = mysqli_num_rows($result);

        if ($rows_count != 0) {
            $fetch = mysqli_fetch_assoc($result);
            $fetch_pass = $fetch['student_password'];
            $user_name = $fetch['student_name'];
            if (password_verify($user_password, $fetch_pass)) {
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_code'] = $user_code;
                header('location: student_index.php');
            } else {
                $_SESSION['status'] = "Incorrect student email or password!";
                header('location: index.php');
                exit(0);
            }
        } else {
            $_SESSION['status'] = "User does not exist";
            header('location: index.php');
            exit(0);
        }
    }

    if (str_starts_with($user_code, $fac) == $user_code) {
        $select_query = "Select * from user_faculty where faculty_code='$user_code'";
        $result = mysqli_query($con, $select_query);
        $rows_count = mysqli_num_rows($result);

        if ($rows_count != 0) {
            $fetch = mysqli_fetch_assoc($result);
            $fetch_pass = $fetch['faculty_password'];
            $user_name = $fetch['faculty_name'];
            if (password_verify($user_password, $fetch_pass)) {
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_code'] = $user_code;
                header('location: faculty_index.php');
            } else {
                $_SESSION['status'] = "Incorrect faculty email or password!";
                header('location: index.php');
                exit(0);
            }
        } else {
            $_SESSION['status'] = "User does not exist";
            header('location: index.php');
            exit(0);
        }
    }

    if (str_starts_with($user_code, $off) == $user_code) {
        $select_query = "Select * from user_office where office_code='$user_code'";
        $result = mysqli_query($con, $select_query);
        $rows_count = mysqli_num_rows($result);

        if ($rows_count != 0) {
            $fetch = mysqli_fetch_assoc($result);
            $fetch_pass = $fetch['office_password'];
            $user_name = $fetch['office_name'];
            if (password_verify($user_password, $fetch_pass)) {
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_code'] = $user_code;
                header('location: office_index.php');
            } else {
                $_SESSION['status'] = "Incorrect office email or password!";
                header('location: index.php');
                exit(0);
            }
        } else {
            $_SESSION['status'] = "User does not exist";
            header('location: index.php');
            exit(0);
        }
    }

    if (str_starts_with($user_code, $par) == $user_code) {
        $select_query = "Select * from user_parents where parent_code='$user_code'";
        $result = mysqli_query($con, $select_query);
        $rows_count = mysqli_num_rows($result);

        if ($rows_count != 0) {
            $fetch = mysqli_fetch_assoc($result);
            $fetch_pass = $fetch['parent_password'];
            $user_name = $fetch['parent_name'];
            if (password_verify($user_password, $fetch_pass)) {
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_code'] = $user_code;
                header('location: parents_index.php');
            } else {
                $_SESSION['status'] = "Incorrect parent email or password!";
                header('location: index.php');
                exit(0);
            }
        } else {
            $_SESSION['status'] = "User does not exist";
            header('location: index.php');
            exit(0);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/index.css">
    <style>
        .alert {
            --bs-alert-bg: transparent;
            --bs-alert-padding-x: 1rem;
            --bs-alert-padding-y: 1rem;
            --bs-alert-margin-bottom: 1rem;
            --bs-alert-color: inherit;
            --bs-alert-border-color: transparent;
            --bs-alert-border: 1px solid var(--bs-alert-border-color);
            --bs-alert-border-radius: 0.375rem;
            position: relative;
            padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
            margin-bottom: var(--bs-alert-margin-bottom);
            color: var(--bs-alert-color);
            background-color: var(--bs-alert-bg);
            border: var(--bs-alert-border);
            border-radius: var(--bs-alert-border-radius, 0);
        }

        .alert-danger {
            --bs-alert-color: #842029;
            --bs-alert-bg: #f8d7da;
            --bs-alert-border-color: #f5c2c7;
        }

        .alert {
            position: relative;
            height: 35px;
            display: block;
            padding: .2rem 1rem;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="#" method="post">
            <h1 class="logTitle">Login Here</h1>

            <?php
            if (isset($_SESSION['status'])) { ?>
                <div class="alert alert-danger text-center ">
                    <strong><?php echo $_SESSION['status']; ?> </strong>
                </div>
            <?php
            }
            unset($_SESSION['status']);
            ?>

            <input type="text" name="user_code" id="userName" placeholder="Register Number">
            <input type="password" name="user_password" id="userPassword" placeholder="Password">

            <button type="submit" id="logBtn" name="login">LOGIN</button>
        </form>
    </div>
</body>

</html>