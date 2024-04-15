<?php
session_start();
// Thực hiện kết nối đến cơ sở dữ liệu
$servername = "localhost"; // Tên máy chủ
$username = "root"; // Tên người dùng của cơ sở dữ liệu
$password = ""; // Mật khẩu của cơ sở dữ liệu
$database = "webgiay"; // Tên của cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Kiểm tra xem nút đăng nhập đã được nhấn chưa
if(isset($_POST["btDangnhap"])) {
    // Lấy dữ liệu từ form
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Chuẩn bị truy vấn SQL để kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM taikhoan WHERE username='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Đăng nhập thành công
        $_SESSION['loggedin'] = true;
        $_SESSION["dangnhap"] = $email;

        $url = 'http://localhost/PHP_1503/quanly.php?quanli';
        header('Location: ' . $url);
        exit();
    } else {
        // Đăng nhập thất bại
        echo "<script>alert('Đăng nhập thất bại! Vui lòng kiểm tra lại thông tin.');</script>";
    }
}

// Đóng kết nối với cơ sở dữ liệu
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Đăng Nhập</title>
<style>
    .login-form {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    .login-form-header {
        text-align: center;
        margin-bottom: 20px;
    }
    .login-form-input {
        margin-bottom: 10px;
    }
    .login-form-input input[type="text"],
    .login-form-input input[type="password"] {
        width: 100%;
        padding: 10px;
        border-radius: 3px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    .login-form-checkbox {
        margin-bottom: 10px;
    }
    .login-form-submit {
        text-align: center;
    }
    .login-form-submit input[type="submit"],
    .login-form-submit input[type="button"] {
        width: 100%;
        padding: 10px;
        border-radius: 3px;
        border: none;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }
    .login-form-submit input[type="submit"]:hover,
    .login-form-submit input[type="button"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<form action="" method="POST" class="login-form">
    <div class="login-form-header">Nhập thông tin đăng nhập</div>
    <div class="login-form-input">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </div>
    <div class="login-form-input">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div class="login-form-input">
        <input type="checkbox" id="remember">
        <label for="remember">Nhớ thông tin đăng nhập</label>
    </div>
    <div class="login-form-submit">
        <input type="submit" value="Đăng nhập" id="btn-dangNhap" name="btDangnhap">
        <input type="reset" value="Làm lại">
    </div>
</form>

</body>
</html>
