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
                                        <li class="active">Thêm người dùng</li>
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
                            <strong>Thông tin người dùng</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="UserController.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ tên</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_username" name="txt_username"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Ngày sinh</label></div>
                                    <div class="col-12 col-md-9"><input type="date" id="dt_ngaysinh" name="dt_ngaysinh" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                    <div class="col-12 col-md-9"><input type="email" id="txt_email" name="txt_email"  class="form-control"></div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Giới tính</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="cb_sex" id="cb_sex" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1" selected>Nam</option>
                                            <option value="2">Nữ</option>
                                            <option value="3">Khác..</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Số điện thoại</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_sdt" name="txt_sdt" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Địa chỉ</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_diachi" name="txt_diachi" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Avatar</label></div>
                                    <div class="col-12 col-md-9"><input type="file" id="file_avatar" name="file_avatar" class="form-control-file"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Password</label></div>
                                    <div class="col-12 col-md-9"><input type="password" id="txt_password" name="txt_password"  class="form-control"></div>
                                </div>
                                <button type="submit" name="user_group_action" value="user_create" class="btn btn-primary">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" name="btn_reset" class="btn btn-danger">
                                    <i class="fa fa-ban"></i> Reset
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
