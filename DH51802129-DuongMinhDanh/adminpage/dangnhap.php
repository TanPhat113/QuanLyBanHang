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

        <!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">
                <div class="top-left">
                    <div>
                        <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                        <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>

                    </div>
                </div>
            </header>


        </div>
        <div class="sufee-login d-flex align-content-center flex-wrap">
            <div class="container">
                <div class="login-content">
                    <div class="text-center" style="margin-bottom: 10px">
                        <h3  class="font-weight-bold">Đăng nhập</h3>
                    </div>
                    <div class="login-form bg-info" style="border-radius: 20px">
                        <form action="UserController.php" method="post">
                            <div class="form-group">
                                <label class="color-white">Email</label>
                                <input type="email" name="login_email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="color-white">Password</label>
                                <input type="password" name="login_password" class="form-control" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label class="color-white">
                                    <input type="checkbox"> Remember Me
                                </label>
                                <label class="pull-right">
                                    <a href="#" class="color-white">Quên mật khẩu?</a>
                                </label>

                            </div>
                            <button type="submit" name="user_group_action" value="user_login" class="btn btn-secondary">Đăng nhập</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->

        <?php include 'layout/scriptadmin.php'; ?>

    </body>
</html>
