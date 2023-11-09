<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form action="generate_ll.php" method="post">
            <h1 class="text-center">Please fill the form</h1>
            <div class="form-group row">
                <div class="col-lg-6">
                    <input type="text" class="form-control mt-3" placeholder="Full name:" name="name">
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control mt-3" placeholder="Register number:" name="regnum">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <input type="text" class="form-control mt-3" placeholder="Semester:" name="sem">
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control mt-3" placeholder="Branch:" name="bnch">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <input type="text" class="form-control mt-3" placeholder="Date:" name="date">
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control mt-3" placeholder="To:" name="to">
                </div>
            </div>
            <div class="form-group">
                <textarea name="enquiry" id="" cols="20" rows="6" placeholder="Subject:" class="form-control mt-3"></textarea>
            </div>
            <div class="form-group pt-3">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>

        </form>
    </div>
</body>

</html>