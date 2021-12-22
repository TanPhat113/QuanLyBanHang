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
                                    <h1><a href="usercreate.php" class="btn btn-success"><i class="fa fa-edit">Thêm mới</i></a></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Người dùng</a></li>
                                        <li class="active">Danh sách người dùng</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Danh sách người dùng</strong>
                                </div>
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">STT</th>
                                                <th class="avatar">Avatar</th>
                                                <th>ID</th>
                                                <th>Họ tên</th>
                                                <th>Giới tính</th>
                                                <th>Quantity</th>
                                     
                                                <th colspan="3" style="text-align: center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $arr = array("Nguyễn Tấn Phát", "Dương Minh Danh", "Trần Quốc Trọng", "Võ Phương Nam", "Phạm Tiến Long");
                                            $arr1 = array(1113, 1114, 1115, 1116, 1117);
                                            $arr2 = array("Nam", "Nam", "Nữ", "Nam", "Nữ");
                                            for ($i = 0; $i < count($arr); $i++) {
                                                echo' <tr>';
                                                echo ' <td class="serial">' . ($i + 1) . '</td>';
                                                echo ' <td class="avatar">';
                                                echo ' <div class="round-img">';
                                                echo ' <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>';
                                                echo ' </div>';
                                                echo '</td>';
                                                echo ' <td> ' . $arr1[$i] . '</td>';
                                                echo '  <td>  <span class="name">' . $arr[$i] . '</span> </td>';
                                                echo ' <td> <span class="product">'.$arr2[$i].'</span> </td>';
                                                echo '  <td><span class="count">231</span></td>';
 
                                                echo ' <td width="50px">';
                                                echo '<a href="useredit.php?id=' . ($i + 1) . '" class="btn btn-success" ><i class="fa fa-edit"></i>Sửa</a>';

                                                echo ' </td>';
                                                echo ' <td width="50px">';
                                                echo '<a href="userxemct.php?id=' . ($i + 1) . '" class="btn btn-success" ><i class="fa fa-eye"></i>Xem chi tiết</a>';
                                                echo ' </td>';
                                                echo ' <td width="50px">';

                                                echo '<button type="button" class="btn btn-danger"><i class="fa fa-times"></i>Xóa</button>';
                                                echo ' </td>';

                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div>















                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->

            <div class="clearfix"></div>

            <?php include 'layout/footeradmin.php'; ?>

        </div><!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->

        <?php include 'layout/scriptadmin.php'; ?>

    </body>
</html>
