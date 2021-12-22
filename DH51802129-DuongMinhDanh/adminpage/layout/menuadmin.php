<?php
// session_start();
?> 
<header id="header" class="header">
    <div class="top-left">


        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="images/lg2.png" alt="Logo"></a>
            
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>

    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                </a>
                <div class="user-menu dropdown-menu">
                    <?php
                    if (isset($_SESSION["email"])) {
                        echo '<a class="nav-link" href="#"><i class="fa fa-user"></i>' . $_SESSION["email"] . '</a>';
                        echo '<a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>';
                        echo '<a class="nav-link" href="logoutpage.php"><i class="fa fa-power-off"></i>Đăng xuất</a>';
                    } else {
                        echo '<a class="nav-link" href="dangnhap.php"><i class="fa fa-power-off"></i>Đăng nhập</a>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</header>
