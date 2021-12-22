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

        <?php include 'layout/menuleft.php'; ?><!-- /#left-panel -->

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
                                    <h1><a href="test.php" class="btn btn-success"><i class="fa fa-undo"> Quay lại</i></a></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li class="active">Chi tiết sản phẩm</li>
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
                            <strong>Chi tiết sản phẩm</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã sản phẩm :</label></div>
                                    <div class="col-12 col-md-9">
                                        1001
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm :</label></div>
                                    <div class="col-12 col-md-9">
                                        Chuột razer
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Số lượng :</label></div>
                                    <div class="col col-md-9">
                                        2
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Địa chỉ :</label></div>
                                    <div class="col-12 col-md-9">
                                        Quận 1
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Giá :</label></div>
                                    <div class="col col-md-9">
                                        2750000
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Mô tả :</label></div>
                                    <div class="col col-md-9">
                                        Chuột cực nhẹ, chơi lâu không đau tay. Cam kết hãng razer.
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
