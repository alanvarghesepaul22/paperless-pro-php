<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>404 Page not found!</title>

    <style>
        body {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            background-color: whitesmoke;
        }

        .error-box {
            position: absolute;
            background-color: whitesmoke;
            width: 500px;
            text-align: center;
            padding: 40px 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .error-title {
            font-size: 50px;
        }

        .error-icon {
            font-size: 130px;
            color: #ff4444;
        }

        .error-content {
            line-height: 1.5;
        }

        .error-p-content {
            color: gray;
            font-size: 22px;
        }

        @media (max-width: 520px) {
            .error-title {
                font-size: 35px;
            }

            .error-icon {
                font-size: 90px;
            }

            .error-p-content {
                font-size: 20px;
            }

        }
    </style>
</head>

<body>
    <div class="error-box">
        <div class="error-icon">
            <i class="bi bi-x-octagon"></i>
        </div>
        <div class="error-content">
            <h1 class="error-title">Error 404</h1>
            <p class="error-p-content">Sorry! <br> This page is not found or you can't access it. <br> Kindly check your internet connenction.</p>
        </div>

    </div>

</body>

</html>