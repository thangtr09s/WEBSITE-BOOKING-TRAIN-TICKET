<?php
/*header('Content-Type: text/html; charset=utf-8');*/
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['datvetem'])){
$hoten = trim($_POST['hoten']);
$ngaysinh = trim($_POST['ngaysinh']);
$sdt = trim($_POST['sdt']);
$diachi = trim($_POST['diachi']);
$diachict = trim($_POST['diachict']);
$loaitem = trim($_POST['loaitem']);
$mathe = trim($_POST['mathe']);
$ngayhethan = trim($_POST['ngayhethan']);
$tuyendk = trim($_POST['tuyendk']);
$ngaynhan = trim($_POST['ngaynhan']);
$yeucau = trim($_POST['yeucau']);

if (empty($hoten)) {
array_push($errors, "Họ Tên is required"); 
}
if (empty($ngaysinh)) {
array_push($errors, "Ngày Sinh is required"); 
}
if (empty($sdt)) {
array_push($errors, "Số Điện Thoại is required"); 
}
if (empty($diachi)) {
array_push($errors, "Địa Chỉ is required"); 
}
if (empty($diachict)) {
array_push($errors, "Địa Chỉ Chi Tiết is required"); 
}
if (empty($loaitem)) {
array_push($errors, "Loại Tem is required"); 
}
if (empty($mathe)) {
array_push($errors, "Mã Thẻ is required"); 
}
if (empty($ngayhethan)) {
array_push($errors, "Ngày Hết Hạn is required"); 
}
if (empty($tuyendk)) {
array_push($errors, "Tuyến Đăng Kí is required"); 
}
if (empty($ngaynhan)) {
array_push($errors, "Ngày Nhận is required"); 
}

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM dangkitem WHERE hoten = '$hoten' OR mathe = '$mathe'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng Mã Thẻ hoặc chưa nhập Thẻ!"); window.location="DANGKITEM.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO dangkitem (hoten, ngaysinh, sdt, diachi, diachict, loaitem, mathe, ngayhethan, tuyendk, ngaynhan, yeucau) VALUES ('$hoten','$ngaysinh','$sdt','$diachi','$diachict','$loaitem','$mathe','$ngayhethan','$tuyendk','$ngaynhan','$yeucau')";
echo '<script language="javascript">alert("Đăng ký Tem Tháng thành công!"); window.location="DANGKITEM.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Họ Và Tên: " .$_POST['hoten']."<br/>";
echo "Ngày Sinh: ".$_POST['ngaysinh']."<br/>";
echo "Số Điện Thoại: ".$_POST['sdt']."<br/>";
echo "Địa Chỉ: ".$_POST['diachi']."<br/>";
echo "Địa Chỉ Chi Tiết: ".$_POST['diachict']."<br/>";
echo "Loại Tem: ".$_POST['loaitem']."<br/>";
echo "Mã Thẻ: ".$_POST['mathe']."<br/>";
echo "Ngày Hết Hạn: ".$_POST['ngayhethan']."<br/>";
echo "Tuyến Đăng Kí: ".$_POST['tuyendk']."<br/>";
echo "Ngày Nhận: ".$_POST['ngaynhan']."<br/>";
echo "Yêu Cầu: ".$_POST['yeucau']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình đăng kí vui lòng kiểm tra lại"); window.location="DANGKITEM.php";</script>';
}
}
}
?>