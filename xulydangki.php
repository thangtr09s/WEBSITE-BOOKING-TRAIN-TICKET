<?php
/*header('Content-Type: text/html; charset=utf-8');*/
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['datve'])){
$hoten = trim($_POST['hoten']);
$doituong = trim($_POST['doituong']);
$ngaysinh = trim($_POST['ngaysinh']);
$sdt = trim($_POST['sdt']);
$email = trim($_POST['email']);
$diachi = trim($_POST['diachi']);
$diachict = trim($_POST['diachict']);
$loaithe = trim($_POST['loaithe']);
$tuyen = trim($_POST['tuyen']);
$yeucau = trim($_POST['yeucau']);


if (empty($hoten)) {
array_push($errors, "Họ Tên is required"); 
}
if (empty($doituong)) {
array_push($errors, "Đối Tượng is required"); 
}
if (empty($ngaysinh)) {
array_push($errors, "Ngày Sinh is required"); 
}
if (empty($sdt)) {
array_push($errors, "Số Điện Thoại is required"); 
}
if (empty($email)) {
array_push($errors, "Email is required"); 
}
if (empty($diachi)) {
array_push($errors, "Địa Chỉ is required"); 
}
if (empty($diachict)) {
array_push($errors, "Địa Chỉ Chi Tiết is required"); 
}
if (empty($loaithe)) {
array_push($errors, "Loại Thẻ is required"); 
}
if (empty($tuyen)) {
array_push($errors, "Tuyến is required"); 
}
if (empty($tuyen)) {
array_push($errors, "Yêu Cầu is required"); 
}

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM dangkidb WHERE hoten = '$hoten' OR sdt = '$sdt'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="DANGKI.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO dangkidb (hoten, doituong, ngaysinh, sdt, email, diachi, diachict, loaithe, tuyen, yeucau) VALUES ('$hoten','$doituong','$ngaysinh','$sdt','$email','$diachi','$diachict','$loaithe','$tuyen','$yeucau')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="DANGKI.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Họ Và Tên: " .$_POST['hoten']."<br/>";
echo "Đối Tượng: ".$_POST['doituong']."<br/>";
echo "Ngày Sinh: ".$_POST['ngaysinh']."<br/>";
echo "Số Điện Thoại: ".$_POST['sdt']."<br/>";
echo "Email: ".$_POST['email']."<br/>";
echo "Địa Chỉ: ".$_POST['diachi']."<br/>";
echo "Địa Chỉ Chi Tiết: ".$_POST['diachict']."<br/>";
echo "Loại Thẻ: ".$_POST['loaithe']."<br/>";
echo "Tuyến: ".$_POST['tuyen']."<br/>";
echo "Yêu Cầu: ".$_POST['yeucau']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="DANGKI.php";</script>';
}
}
}
?>