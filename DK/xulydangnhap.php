<?php
$con = mysqli_connect("localhost","root","","data");
if (mysqli_connect_errno())
  {
  echo "Không thể kết nối đến MySQL: " . mysqli_connect_error();
  }
  session_start();
    if (isset($_POST['username'])){
    
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);
    $pass = stripslashes($_REQUEST['pass']);
    $pass = mysqli_real_escape_string($con,$pass);
        $query = "SELECT * FROM `taikhoan` WHERE username='$username' and pass='$pass'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: ../DANGKI.php");
            }else{
        echo '<script language="javascript">alert("Đăng Nhập Không thành công!"); window.location="login.php";</script>';

        }
    }else{
?>

<?php } ?>