<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Tra Cứu Vé Tháng</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linearicons/style.css" rel="stylesheet">
        <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.min.css" rel="stylesheet">
        <link href="vendors/nice-select/css/nice-select.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Main Header Area =================-->
     <header class="main_header_area">
      <div class="main_menu_area">
        <div class="container">

          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="TRANGCHU.php">
            <img src="img/logo.png" alt="">
            <img src="img/logo-2.png" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li><a href="TRANGCHU.php">Trang Chủ</a></li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Giới Thiệu</a>
                  <ul class="dropdown-menu">
                    <li><a href="GIOITHIEU.html">Giới Thiệu Về Chúng Tôi</a></li>
                    <li><a href="TROGIA.html">Xe Bus Trợ Giá</a></li>
                  </ul>
                </li>
                <li class="dropdown submenu active">
                  <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Vé Xe</a>
                  <ul class="dropdown-menu">
                    <li><a href="VEXE.html">Hướng Dẫn Mua Vé</a></li>
                    <li><a href="DANGKI.php">Mua Vé Tháng</a></li>
                    <li><a href="DATVETRUCTIEP.php">Đặt Vé Ngay</a></li>
                  </ul>
                </li>
                <li><a href="TINTUC.html">Tin Tức</a></li>
              </ul>
              <ul class="navbar-nav justify-content-end">
              <li><a href="TUYENXE.html">Tuyến Xe</a></li>
              <li><a href="LIENHE.php">Liên Hệ</a></li>
              
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Khách Hàng</a>
                  <ul class="dropdown-menu">
                    <li><a href="DK/login.php">Đăng Nhập</a></li>
                    <li><a href="DK/register.php">Đăng Kí</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
        <!--================End Main Header Area =================-->
        
        
        <!--================Billing Details Area =================-->    
        <section class="billing_details_area p_100">
            <div class="container">
                        <div class="return_option">
                  <h4>Bạn Chưa Đăng Kí? <a href="DANGKI.php">Click Vào Đây Để Đăng Kí</a></h4>
                </div>
                <div class="row">
                  <div class="col-lg-7">
                      <div class="main_title">
                        <h2>Tra Cứu Thông Tin Khách Hàng</h2>
                      </div>
                    <div class="billing_form_area">
                      <form class="billing_form row" method="post" action="" id="contactForm" novalidate="novalidate">
               
               

          
              
               
                <div class="form-group col-md-12">
                  <label for="phone">Nhập Họ Tên Người Cần Tra Cứu</label>
                  <input type="text" class="form-control" id="first" name="search" placeholder="Nhập Họ Tên"><br>
                  <button  type="submit" value="submit" name="submit" class="btn pest_btn">Tra Cứu</button>
                  <button  type="submit" value="submit" name="submit" class="btn pest_btn">Hiện Thị</button><br><br>
                  <?php


if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "data"); mysqli_set_charset($con, 'UTF8');
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM dangkidb WHERE hoten OR sdt LIKE '%$searchValue%'";

        $result = $con->query($sql);
                    echo '<table border="1">';
        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo "<th>Họ Tên</th>";
                            echo "<th>Ngày Sinh</th>";
                            echo "<th>Số Điện Thoại</th>";
                            echo "<th>email</th>";    
                            echo "<th>Tuyến</th>";
                            echo '</tr>';
                            echo '<tr>';
                            echo "<td>{$row['hoten']}</td>";
                            echo "<td>{$row['ngaysinh']}</td>";
                            echo "<td>{$row['sdt']}</td>";
                            echo "<td>{$row['email']}</td>";    
                            echo "<td>{$row['tuyen']}</td>";
                        echo '</tr>';
                    }
                    echo '</table>';
                } 
        }



?>
                </div>


              </form>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="order_box_price">
                      <div class="main_title">
                        <h2>Hướng Dẫn Tra Cứu</h2>
                      </div>
              <div class="payment_list">
                <div id="accordion" class="accordion_area">
                  <div class="card">
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                     <b>Bước 1:</b>Nhập họ tên người cần tìm kiếm.<br>
                    <b> Bước 2:</b>Án chọn tra cứu để hệ thống lọc trong cơ sở dữ liệu<br>
                    <b>Bước 3:</b> Ấn chon hiện thị để dữ liệu được đổ ra<br>
                    Chúc Các Bạn Thành Công

                      </div>
                    </div>
                  </div>
              
                
                </div>
                
              </div>
            </div>
                  </div>
                </div>
            </div>
        </section>
        <!--================End Billing Details Area =================-->   
        
       
        
        <!--================Footer Area =================-->
                <footer class="footer_area">
          <div class="footer_widgets">
            <div class="container">
              <div class="row footer_wd_inner">
                <div class="col-lg-3 col-6">
                  <aside class="f_widget f_about_widget">
                    <img src="img/footer-logo.png" alt="">
                    <p>Xe Bus Mạnh Thắng luôn bên bạn sẵn sàng phục vụ mọi lúc mọi nơi.</p>
                    <ul class="nav">
                      <li><a href="https://www.facebook.com/profile.php?id=100013750429493"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </aside>
                </div>
                <div class="col-lg-3 col-6">
                  <aside class="f_widget f_link_widget">
                    <div class="f_title">
                      <h3>Các Phần Chính</h3>
                    </div>
                    <ul class="list_style">
                      <li><a href="TRANGCHU.php">Trang Chủ</a></li>
                      <li><a href="GIOITHIEU.html">Giới Thiệu</a></li>
                      <li><a href="VEXE.html">Vé Xe</a></li>
                      <li><a href="LIENHE.php">Liên Hệ</a></li>
                    </ul>
                  </aside>
                </div>
                <div class="col-lg-3 col-6">
                  <aside class="f_widget f_link_widget">
                    <div class="f_title">
                      <h3>Thời Gian Hoạt Động</h3>
                    </div>
                    <ul class="list_style">
                      <li><a href="#">Mon. :  Fri.: 8 am - 8 pm</a></li>
                      <li><a href="#">Sat. : 9am - 4pm</a></li>
                      <li><a href="#">Sun. : Closed</a></li>
                    </ul>
                  </aside>
                </div>
                <div class="col-lg-3 col-6">
                  <aside class="f_widget f_contact_widget">
                    <div class="f_title">
                      <h3>Liên Hệ</h3>
                    </div>
                    <h4>0326304102</h4>
                    <p>Mạnh Thắng BUS <br />420 Trần Địa Nghĩa, Quận Ngũ Hành Sơn</p>
                    <h5>tdthang.20it10@vku.udn</h5>
                  </aside>
                </div>
              </div>
            </div>
          </div>
        </footer>
        
        <!--================End Footer Area =================-->
        
      
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/datetime-picker/js/moment.min.js"></script>
        <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        
        
        <script src="js/theme.js"></script>
    </body>

</html>