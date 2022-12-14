<?php
include 'classes/user.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new user();
    $result = $user->insert($_POST);
    if ($result == true) {
        // header("Location: ./confirm.php?id=".$userId['id']."");
        header("Location:login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Đăng Ký</title>    
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="featuredProducts">
        <h1>Đăng ký</h1>
    </div>
    <div id="wrapper" style="margin-top:50px">
            <form action="register.php" method="post" id="form-login">
                <h1 class="form-heading">ĐĂNG KÝ TÀI KHOẢN</h1>
                <div class="form-group">
                    <input type="text" class="form-input" id="fullName" name="fullName" placeholder="Họ tên..." required>
                </div>
                <div class="form-group">
                    <p class="error"><?= !empty($result) ? $result : '' ?></p>
                    <input type="email" class="form-input" id="email" name="email" placeholder="Email..." required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" id="password" name="password" placeholder="Mật khẩu..." required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" id="repassword" name="repassword" required placeholder="Nhập lại mật khẩu..." oninput="check(this)">
                </div>
                <div class="form-group">
                    <textarea name="address" placeholder="Địa chỉ..." id="address" cols="44" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <input type="date" class="form-input" name="dob" id="dob" required>
                </div>
                <input type="submit" value="Đăng ký" name="submit" class="form-submit">
                <div class="link-to-register">
                    <a href="login.php">Đăng nhập</a>
                </div>
            </form>
    </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
    <script language='javascript' type='text/javascript'>
        function check(input) {
            if (input.value != document.getElementById('password').value) {
                input.setCustomValidity('Mật khẩu nhập lại sai!!!');
            }else{
                input.setCustomValidity('');
            }
        }
    </script>
</html>