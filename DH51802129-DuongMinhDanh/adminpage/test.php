<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <?php include './layout/headeradmin.php'; ?>
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
                                    <h1><a href="themsp.php" class="btn btn-success"><i class="fa fa-edit">Thêm mới</i></a></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li class="active">Danh sách sản phẩm</li>
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

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Danh sách sản phẩm</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="serial">STT</th>
                                                <th>Mã sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Địa chỉ</th>
                                                <th>Giá</th>
                                                <th >Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            $arrMasp = array("1001","1002","1003","1004","1005","1006");
                                            $arrTen = array("Chuột razer","Ghế logitech","Màn hình samsung","Bàn phím cơ","Laptop MSI","Iphone 13 Promax");
                                            $arrSoluong = array("2","1","2","3","1","1");
                                            $arrDc = array("Quận 1","Quận 2","Quận 3","Quận 4","Quận 5","Quận 6");
                                            $arrTien = array(2750000,2000000,10000000,3000000,33000000,41000000);
                                            for($i=0;$i<count($arrTen);$i++){
                                                
                                            echo ' <tr>';
                                            echo ' <td class="serial">' . ($i + 1) . '</td>';
                                            echo ' <td>'.$arrMasp[$i].'</td>';
                                            echo ' <td>'.$arrTen[$i].'</td>';
                                            echo ' <td>'.$arrSoluong[$i].'</td>';
                                            echo ' <td>'.$arrDc[$i].'</td>';
                                            echo ' <td>'.$arrTien[$i].'</td>';
                                            echo ' <td>';
                                            echo ' <a href="suasp.php?id='.($i+1).'" class="btn btn-success" ><i class="fa fa-edit"></i>Sửa</a> ';
                                            echo ' <a href="xemsp.php" class="btn btn-success" ><i class="fa fa-eye"></i>Xem</a> ';
                                            echo ' <a href="#" class="btn btn-danger" ><i class="fa fa-times"></i>Xóa</a>';
                                            echo ' </td>';                                           
                                            echo ' </tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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
