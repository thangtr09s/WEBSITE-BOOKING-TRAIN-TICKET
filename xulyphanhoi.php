<?php
/*header('Content-Type: text/html; charset=utf-8');*/
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['guiden'])){
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$address = trim($_POST['address']);
$details = trim($_POST['details']);


if (empty($name)) {
array_push($errors, "Họ Tên is required"); 
}
if (empty($email)) {
array_push($errors, "Email is required"); 
}
if (empty($phone)) {
array_push($errors, "Phone Number is required"); 
}
if (empty($address)) {
array_push($errors, "Address is required"); 
}
if (empty($details)) {
array_push($errors, "Nội Dung is required"); 
}

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM phanhoi WHERE name = '$name' OR email = '$email'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="TRANGCHU.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO phanhoi (name, email, phone, address, details) VALUES ('$name','$email','$phone','$address','$details')";
echo '<script language="javascript">alert("Phản Hồi thành công!"); window.location="TRANGCHU.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Họ Và Tên: ".$_POST['name']."<br/>";
echo "Email: " .$_POST['email']."<br/>";
echo "Số Điện Thoại: ".$_POST['phone']."<br/>";
echo "Địa Chỉ: ".$_POST['address']."<br/>";
echo "Nội Dung: ".$_POST['details']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="TRANGCHU.php";</script>';
}
}
}
?>