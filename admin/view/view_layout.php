 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/ico/favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="../public/ckeditor/ckeditor.js" type="text/javascript"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Quản Lý Nhân Khẩu</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sổ hộ khẩu<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?controller=sohokhau&action=add">Thêm sổ hộ khẩu</a></li>
                    <li><a href="index.php?controller=sohokhau">Danh sách sổ hộ khẩu </a></li>
                  </ul>
              </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Khai báo tạm trú <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?controller=kb_tamtru&action=add">Thêm tạm trú </a></li>
                    <li><a href="index.php?controller=kb_tamtru">Danh sách tạm trú</a></li>
                  </ul>
              </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Khai báo tạm vắng<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?controller=kb_tamvang&action=add">Thêm tạm vắng</a></li>
                    <li><a href="index.php?controller=kb_tamvang">Danh sách tạm vắng </a></li>
                  </ul>
              </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quản lý tài khoản<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?controller=user&action=add">Thêm tài khoản</a></li>
                    <li><a href="index.php?controller=user">Danh sách tài khoản</a></li>
                  </ul>
              </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Thông tin</a></li>
                    <li><a href="index.php?controller=logout">Đăng xuất</a></li>
                  </ul>
              </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container" style="padding-top:70px">
      <?php 
    if(file_exists($controller) == true)
      include $controller;
   ?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../public/jquery.js"></script>
    <script src="../public/bootstrap/js/bootstrap.js"></script>
  </body>
</html>