<?php
session_start();
include('./include/connect.php');
$_SESSION['user_name'];
$_SESSION['user_code'];
if (!isset($_SESSION['user_name'])) {
    header('location:error404.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav>
        <a href="admin_index.php" class="dashboard-title"> Parents Dashboard</a>
        <div class="admin_name">
            <!-- <p class="dark-btn"><i class="bi bi-brightness-high-fill" id="icon" data-toggle="tooltip" title="Dark Mode"></i></p> -->
            <h5 class="name"> <i class="bi bi-person-circle"></i> <?php echo $_SESSION['user_name']; ?> </h5>
            <p> <a href="logout.php" class="btn btn-dark logout_btn">Logout</a></p>
        </div>

    </nav>
</body>

</html>