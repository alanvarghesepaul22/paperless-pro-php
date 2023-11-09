<?php
session_start();
include('./include/connect.php');
$_SESSION['user_name'];
$_SESSION['user_code'];
if (!isset($_SESSION['user_name'])) {
    header('location:error404.php');
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
        <div class="left">
            <div class="subnav">
                <div class="headingDiv">
                    <h1 class="heading">Classrooms</h1>
                </div>
                <div class="dropdown col-lg-4">
                    <form action="#" method="post">
                        <select name="sem_select" id="semester" onchange="this.form.submit()">
                            <option value="" selected>Sem</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            <option value="S4">S4</option>
                            <option value="S5">S5</option>
                            <option value="S6">S6</option>
                            <option value="S7">S7</option>
                            <option value="S8">S8</option>
                        </select>
                    </form>
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

                    <a href='student_classroom.php?id=<?php echo $fetchData['courses_id']; ?>' class="subSelect">
                        <div class="subjects">
                            <div class="subIconDiv">
                                <img src="assets/class.png" class="subjectIcon">
                            </div>
                            <div class="subNameDiv">
                                <h3><?php echo $fetchData['courses_name']; ?></h3>
                                <h4><?php echo $fetchData['courses_dept'] . " " . $fetchData['course_sem']; ?></h4>
                            </div>
                        </div>
                    </a>

            <?php
                endwhile;
            }
            ?>
        </div>

        <div class="right">
            <div class="docSecTitleDiv">
                <h2 class="docSecTitle">Request Letters</h2>
                <i class="bi bi-bell-fill bellIcon"></i>
            </div>
            <div class="reqDoc">
                <h3>Duty leave request letter</h3>
                <button class="applyBtn"> <a href="./form_action/duty_leave_form.php">APPLY</a></button>
            </div>
            <div class="reqDoc">
                <h3>Request for leave</h3>
                <button class="applyBtn"> <a href="./form_action/leave_letter_form.php">APPLY</a> </button>
            </div>
            <div class="reqDoc">
                <h3>Bonafide certificate</h3>
                <button class="applyBtn"> <a href="./form_action/bonafide_form.php">APPLY</a></button>
            </div>
            <div class="reqDoc">
                <h3>General format letter</h3>
                <button class="applyBtn"> <a href="./form_action/general_form.php">APPLY</a></button>
            </div>
        </div>
    </div>

</body>

</html>