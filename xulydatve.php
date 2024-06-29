<?php
/*header('Content-Type: text/html; charset=utf-8');*/
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['datvebus'])){
$hoten = trim($_POST['hoten']);
$ngaysinh = trim($_POST['ngaysinh']);
$sdt = trim($_POST['sdt']);
$email = trim($_POST['email']);
$diachi = trim($_POST['diachi']);
$diachict = trim($_POST['diachict']);
$thoigian = trim($_POST['thoigian']);
$tuyen = trim($_POST['tuyen']);
$ghichu = trim($_POST['ghichu']);




if (empty($hoten)) {
array_push($errors, "Họ Tên is required"); 
}
if (empty($ngaysinh)) {
array_push($errors, "Ngày Sinh is required"); 
}
if (empty($sdt)) {
array_push($errors, "Số Điện Thoại is required"); 
}
if (empty($email)) {
array_push($errors, "email is required"); 
}
if (empty($diachi)) {
array_push($errors, "Địa Chỉ Đón Khách is required"); 
}
if (empty($diachict)) {
array_push($errors, "Địa Chỉ Chi Tiết Đón Khách is required"); 
}
if (empty($thoigian)) {
array_push($errors, "Thời Gian is required"); 
}
if (empty($tuyen)) {
array_push($errors, "Tuyến is required"); 
}
if (empty($ghichu)) {
array_push($errors, "Ghi Chú is required"); 
}

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM datve WHERE hoten = '$hoten' OR sdt = '$sdt'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="DATVETRUCTIEP.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO datve (hoten, ngaysinh, sdt, email, diachi, diachict, thoigian, tuyen, ghichu) VALUES ('$hoten','$ngaysinh','$sdt','$email','$diachi','$diachict','$thoigian','$tuyen','$ghichu')";
echo '<script language="javascript">alert("Đặt Vé thành công!"); window.location="DATVETRUCTIEP.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Họ Và Tên: " .$_POST['hoten']."<br/>";
echo "Ngày Sinh: ".$_POST['ngaysinh']."<br/>";
echo "Số Điện Thoại: ".$_POST['sdt']."<br/>";
echo "Email: ".$_POST['email']."<br/>";
echo "Địa Chỉ: ".$_POST['diachi']."<br/>";
echo "Địa Chỉ CT: ".$_POST['diachict']."<br/>";
echo "Thời Gian Đi: ".$_POST['thoigian']."<br/>";
echo "Tuyến: ".$_POST['tuyen']."<br/>";
echo "Ghi Chú: ".$_POST['ghichu']."<br/>";

}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="DATVETRUCTIEP.php";</script>';
}
}
}
?>