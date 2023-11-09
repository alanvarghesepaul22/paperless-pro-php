<?php
session_start();
include('./include/connect.php');
$_SESSION['user_name'];
$_SESSION['user_code'];
if (!isset($_SESSION['user_name'])) {
    header('location:error404.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select_query = "Select * from classroom_courses where courses_id='$id'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);
    $fetch = mysqli_fetch_assoc($result);
}

if (isset($_POST['sem_select'])) {
    $sem = $_POST['sem_select'];
}

if (!isset($_POST['sem_select'])) {
    $select_query_student = "SELECT * from user_students";
    $result_student = mysqli_query($con, $select_query_student);
    $fetchStudents = mysqli_fetch_assoc($result_student);
    $currentSem = $fetchStudents['student_sem'];

    $select_query = "SELECT * from classroom_courses where course_sem='$currentSem'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav>
        <a href="student_index.php" class="dashboard-title"> Student Dashboard</a>
        <div class="admin_name">
            <!-- <p class="dark-btn"><i class="bi bi-brightness-high-fill" id="icon" data-toggle="tooltip" title="Dark Mode"></i></p> -->
            <h5 class="name"> <i class="bi bi-person-circle"></i> <?php echo $_SESSION['user_name']; ?> </h5>
            <p> <a href="logout.php" class="btn btn-dark logout_btn">Logout</a></p>
        </div>
    </nav>
    <div class="containerDiv ">
        <div class="containerClassroom">
            <div class="subIconDiv">
                <img src="assets/class.png" class="subjectIcon">
            </div>
            <div class="files">
                <div class="file">
                    <h1><?php echo $fetch['courses_name']; ?></h1>
                </div>
                <div class="head">
                    <div class="head1">
                        <h2>Posted: <?php echo $fetch['courses_faculty']; ?></h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['sem_select'])) {
            $sem = $_POST['sem_select'];
            // echo $sem;
            $select_query = "SELECT * from classroom_courses where course_sem='$sem'";
            $result = mysqli_query($con, $select_query);
            $rows_count = mysqli_num_rows($result);
        }
        if ($rows_count < 1) { ?>
            <div class="notAvail">
                <h1>
                    Currently not available for you.
                </h1>
            </div>
            <?php
        } else {
            while ($fetchData = mysqli_fetch_assoc($result)) : ?>

                

        <?php
            endwhile;
        }
        ?>
    </div>

</body>

</html>