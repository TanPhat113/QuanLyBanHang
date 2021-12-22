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
        <?php include 'layout/menuleft.php'; ?>
     <!-- /#left-panel -->

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
                                    <h1><a href="donhang.php" class="btn btn-success"><i class="fa fa-undo"> Quay lại</i></a></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Đơn hàng</a></li>
                                        <li class="active">Thêm đơn hàng</li>
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
                            <strong>Thêm đơn hàng</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên người đặt hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_ten" name="txt_ten"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_ID" name="txt_ID"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_tensp" name="txt_tensp"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã sản phẩm</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_IDsp" name="txt_IDsp"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ngày đặt</label></div>
                                    <div class="col-12 col-md-9"><input type="date" id="txt_date" name="txt_date"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="dach-input" class=" form-control-label">Địa chỉ</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_diachi" name="txt_diachi" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Số lượng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_soluong" name="txt_soluong" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Giá</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_gia" name="txt_gia" class="form-control"></div>
                                </div>
                               
                                <button type="submit" name="btn_create" class="btn btn-primary">
                                    <i class="fa fa-dot-circle-o"></i> Thêm
                                </button>
                                 <button type="submit" name="btn_reset" class="btn btn-primary">
                                    <i class="fa fa-dot-circle-o"></i> Reset
                                </button>

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
