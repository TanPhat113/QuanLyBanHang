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
                                        <li class="active">Chi tiết đơn hàng</li>
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
                            <strong>Chi tiết đơn hàng</strong>
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
                               
                                <div class="content">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Danh sách sản phẩm</strong>
                                </div>
                                <div class="card-body">
                                    <table  class="table">
                                        <thead>
                                            <tr>
                                                <th class="serial">STT</th>
                                                <th>Mã sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Số lượng</th>
                                                
                                                <th>Giá</th>
                                                <th style="text-align:center">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            function tinhtong($arr=array()){
                                                $tong=0;
                                                for($i=0;$i<count($arr);$i++)
                                                {
                                                    $tong+=$arr[$i];
                                                }
                                                return $tong;
                                            }
                                            $arrMasp = array("1001","1002","1003","1004","1005","1006");
                                            $arrTen = array("Chuột razer","Ghế logitech","Màn hình samsung","Bàn phím cơ","Laptop MSI","Iphone 13 Promax");
                                            $arrSoluong = array("2","1","2","3","1","1");
                                            
                                            $arrTien = array(2750000,2000000,10000000,3000000,33000000,41000000);
                                            for($i=0;$i<count($arrTen);$i++){
                                            echo ' <tr>';
                                            echo ' <td class="serial">' . ($i + 1) . '</td>';
                                            echo ' <td>'.$arrMasp[$i].'</td>';
                                            echo ' <td>'.$arrTen[$i].'</td>';
                                            echo ' <td>'.$arrSoluong[$i].'</td>';
                                            echo ' <td>'.$arrTien[$i].'</td>'; 
                                            echo ' <td class="float-right"><a href="#" class="btn btn-success"><i class="fa fa-edit"> Sửa</i></a>
                                            
                                            <a href="#" class="btn btn-danger"><i class="fa fa-remove"> Xóa</i></a> </td>'; 
                                                                                
                                            echo ' </tr>';
                                           
                                            }
                                            echo '<tr >';
                                            echo ' <td colspan= "4">Tổng tiền</td>';
                                            echo ' <td>'.tinhtong($arrTien).'</td>';
                                            echo '</tr>';
                                           
                                            ?>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- .animated -->
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
