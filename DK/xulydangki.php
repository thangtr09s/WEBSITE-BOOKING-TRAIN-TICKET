<?php

$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['dangky'])){
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$username = trim($_POST['username']);
$pass = trim($_POST['pass']);



if (empty($name)) {
array_push($errors, "Name is required"); 
}
if (empty($email)) {
array_push($errors, "Email is required"); 
}
if (empty($username)) {
array_push($errors, "Username is required"); 
}
if (empty($pass)) {
array_push($errors, "Two password do not match"); 
}

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM taikhoan WHERE username = '$username' OR email = '$email'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO taikhoan (name, email,username ,pass) VALUES ('$name','$email','$username','$pass')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Tên: ".$_POST['name']."<br/>";
echo "Email đăng nhập: ".$_POST['email']."<br/>";
echo "Tài Khoản: " .$_POST['username']."<br/>";
echo "Mật khẩu: " .$_POST['password']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
}
}
}
?>