<?php

session_start();

function checkMail($email, $arr = array()) {

    $isExit = false;
    foreach ($arr as $user) {
        if ($user["email"] == $email) {
            $isExit = true;
            return $isExit;
        }
    }
    return $isExit;
}

function isUser($email, $pass, $arr = array()) {

    $isExit = false;
    foreach ($arr as $user) {
        if ($user["email"] == $email && $user["password"] == $pass) {
            $isExit = true;
            return $isExit;
        }
    }
    return $isExit;
}

function printuser($arr = array()) {
    echo '<table border="1" class = "table">';
    echo '<thead>';
    echo '<tr>';
    echo '
            <th class = "avatar">Avatar</th>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Giới tính</th>
            <th>Quantity</th>';
    echo '<th colspan = "3" style = "text-align: center">Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';



    foreach ($arr as $user) {
        echo' <tr>';
        echo ' <td class="avatar">';
        echo ' <div class="round-img">';
        echo ' <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>';
        echo ' </div>';
        echo '</td>';
        echo ' <td> 1113</td>';
        echo '  <td>  <span class="name">' . $user["username"] . '</span> </td>';
        echo ' <td> <span class="product">' . $user["email"] . '</span> </td>';
        echo '  <td><span class="count">231</span></td>';

        echo ' <td width="50px">';
        echo '<a href="useredit.php" class="btn btn-success" ><i class="fa fa-edit"></i>Sửa</a>';

        echo ' </td>';
        echo ' <td width="50px">';
        echo '<a href="userxemct.php" class="btn btn-success" ><i class="fa fa-eye"></i>Xem chi tiết</a>';
        echo ' </td>';
        echo ' <td width="50px">';

        echo '<button type="button" class="btn btn-danger"><i class="fa fa-times"></i>Xóa</button>';
        echo ' </td>';

        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}

$user_01 = array("username" => "nguyenphat", "ngaysinh" => "11/03/2000", "email" => "nguyenphat113@gmail.com", "sex" => "nam", "sdt" => "123456789", "diachi" => "111aaaa22", "password" => "1234");
$userList = array($user_01);
array_push($userList, $user_01);
$user_group_action = $_POST["user_group_action"];
echo $user_group_action;
switch ($user_group_action) {
    case 'user_create':
        $txt_username = $_POST["txt_username"];
        $dt_ngaysinh = $_POST["dt_ngaysinh"];
        $txt_email = $_POST["txt_email"];
        $cb_sex = $_POST["cb_sex"];
        $txt_sdt = $_POST["txt_sdt"];
        $txt_diachi = $_POST["txt_diachi"];
        $file_avatar = $_FILES["file_avatar"]["name"];
        $txt_password = $_POST["txt_password"];


        $isExit = checkMail($txt_email, $userList);
        if ($isExit) {
            header("Location: useredit.php");
        } else {
            $user = array("username" => $txt_username, "ngaysinh" => "11/03/2000", "email" => $txt_email, "sex" => "nam", "sdt" => "123456789", "diachi" => "111aaaa22", "password" => "1234");
            array_push($userList, $user);
            printuser($userList);
        }
        break;
    case 'user_login':
        $login_email = $_POST["login_email"];
        $login_password = $_POST["login_password"];

        if (isUser($login_email, $login_password, $userList)) {
            $_SESSION["email"] = $login_email;
            header("location: users.php");
        }

        break;
}

function checkMailHL($email) {
    $pattern_email = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)@([a-z0-9\-]+\.)+[a-z]{2,6}$/";
    return (!preg_match($pattern_email, $email)) ? FALSE : TRUE;
}
?>

