<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Các Tuyến Xe</title>

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
                <li class="dropdown submenu">
                  <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Vé Xe</a>
                  <ul class="dropdown-menu">
                    <li><a href="VEXE.html">Hướng Dẫn Mua Vé</a></li>
                    <li><a href="DK/login.php">Mua Vé Tháng</a></li>
                    <li><a href="DATVETRUCTIEP.php">Đặt Vé Ngay</a></li>
                  </ul>
                </li>
                <li><a href="TINTUC.html">Tin Tức</a></li>
              </ul>
              <ul class="navbar-nav justify-content-end">
              <li><a href="TUYENXE.html">Tuyến Xe</a></li>
              <li class="dropdown submenu active"><a href="LIENHE.php">Liên Hệ</a></li>
              
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
        
<section class="contact_form_area p_100">
            <div class="container">
                <div class="main_title">
                    <h2>Góp Ý</h2>
                    <h5>Hệ thống sẽ giải đáp mọi thắc mắc mà bạn gửi về đồng thời sẽ ghi nhận những góp ý về shop.</h5>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <form class="row contact_us_form" method="post" action="LIENHE.php" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ Và Tên">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Số Điện Thoại">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Địa Chỉ">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="details" id="details" rows="1" placeholder="Nội Dung Phản Hồi"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" name="guiden" class="btn order_s_btn form-control">Xác Nhận</button>
                                 <?php require 'xulygopy.php';?> 
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 offset-md-1">
                        <div class="contact_details">
                            <div class="contact_d_item">
                                <h3>Địa Chỉ :</h3>
                                <p>420 Trần Đại Nghĩa, Phường Hòa Quý <br /> Quận Ngũ Hành Sơn, TP. Đà Nẵng</p>
                            </div>
                            <div class="contact_d_item">
                                <h5>Số Điện Thoại : <a href="tel:0326304102">0326.304.102</a></h5>
                                <h5>Email : <a href="mailto:tdthang.20it10@gmail.com">tdthang.20it10@vku.udn.vn</a></h5>
                            </div>
                            <div class="contact_d_item">
                                <h3>Thời Gian Hoạt Động :</h3>
                                <p>8:00 AM – 8:00 PM</p>
                                <p>Monday – Sunday</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Form Area =================-->
        
        <!--================End Banner Area =================-->
        <section class="map_area">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.738711613724!2d108.25104871433561!3d15.975015746200409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1622188548540!5m2!1svi!2s" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <!--================End Blog Main Area =================-->

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
        <script src="vendors/datetime-picker/js/moment.min.js"></script>
        <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

</html>