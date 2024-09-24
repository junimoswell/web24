<?php
session_start();
if (isset($_SESSION['id']))
{
    header("location:index1.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3">Webboard KakKak</h1>
        <?php include "nav.php" ?>
        <form action="verify1.php" method="post">
            <div class="row">
                <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
                    <div class="card mt-3">
                        <h5 class="card-header">เข้าสู่ระบบ</h5>
                        <div class="card-body ">
                            <from action="verify1.php" method="post1.php">
                                <div class="form-group">
                                    <label for="login" class="form-label">Login</label>
                                    <input id="login" type="text" class="form-control" name="login">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="pwd" class="form-label">Password</label>
                                    <input id="pwd" type="password" class="form-control" name="pwd">
                                </div>
                                <div class="mt-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-sm me-2">Login</button>
                                    <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                                </div>
                            </from>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div style="text-align: center;" class="mt-3">ถ้ายังไม่ได้เป็นสมาชิก <a
                href="register1.php">กรุณาสมัครสมาชิก</a></div>

</body>
</html>