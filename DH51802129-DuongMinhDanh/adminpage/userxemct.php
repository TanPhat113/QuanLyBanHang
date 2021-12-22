<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
         <?php include 'layout/headeradmin.php'; ?>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>
    <body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Quản lý người dùng</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="users.php">Danh sách</a></li>
                                <li><i class="fa fa-table"></i><a href="usercreate.php">Thêm người dùng</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="test.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Quản lý sản phẩm</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="test.php">Danh sách</a></li>
                                <li><i class="fa fa-table"></i><a href="themsp.php">Thêm sản phẩm</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <?php include 'layout/menuadmin.php'; ?>
            <!-- /header -->
            <!-- Header-->
            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1><a href="users.php" class="btn btn-success"><i class="fa fa-undo"> Quay lại</i></a></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Người dùng</a></li>
                                        <li class="active">Chi tiết người dùng</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">

                <div>
                    <div class="card">
                        <div class="card-header">
                            <strong>Chi tiết người dùng</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Avatar :</label></div>
                                    <div class="col col-md-9">
                                        <div class="round-img">
                                            <img class="rounded-circle" src="images/avatar/1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ tên :</label></div>
                                    <div class="col-12 col-md-9">
                                        Tấn Phát
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Ngày sinh :</label></div>
                                    <div class="col col-md-9">
                                        11/03/2000
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email :</label></div>
                                    <div class="col-12 col-md-9">
                                        IMax
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Giới tính :</label></div>
                                    <div class="col col-md-9">
                                        Nam
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="txt_sdt" class=" form-control-label">Số điện thoại :</label></div>
                                    <div class="col-12 col-md-9">
                                        165632843
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Địa chỉ :</label></div>
                                    <div class="col col-md-9">
                                        123asd46
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Quantity :</label></div>
                                    <div class="col col-md-9">
                                        231
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <?php include 'layout/footeradmin.php'; ?>

        </div><!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->

        <?php include 'layout/scriptadmin.php'; ?>

    </body>
</html>
