<?php
/*
Template Name: Register
*/
?>

<style>
    *{
        padding:0;
        margin:10;
    }
    body {
        background: url("<?php echo get_template_directory_uri()?>./assets/uploads/homePage_panel_boys.png") no-repeat;
                font-family: Arial, sans-serif;
                background-size: cover;
                align-items: center;
                justify-content: center;
                display:flex;
                
                
        }

        .register-area {
                background: skyblue;
                position: relative;
                margin-top:100px;
                width: 500px;
                height: 700px;
                
                border-radius:10px;
                padding: 6em;
                overflow: hidden;
        }


        label { 
                margin-top: 8px;
                font-weight: 5px;
                font-size: 24px;
                color:#FFF;
                display: block;
                font-family: "Acronym",sans-serif;
        }

        input[type=email],
        input[type=number],
        input[type=password],
        input[type=search],
        input[type=tel],
        input[type=text],
        input[type=url],
        select,
        textarea {
                width: 400px;
                height: 40px;
                
                border-radius: 5px;
                border: 1px solid #DDD;
                -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.07);
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.07);
                background-color: #FFF;
                color: #333;
                -webkit-transition: .05s border-color ease-in-out;
                transition: .05s border-color ease-in-out;
                padding: 5px 10px;
        }

        input[type=submit] {
                background: #51a818;
                background-image: -webkit-linear-gradient(top, #51a818, #3d8010);
                background-image: -moz-linear-gradient(top, #51a818, #3d8010);
                background-image: -ms-linear-gradient(top, #51a818, #3d8010);
                background-image: -o-linear-gradient(top, #51a818, #3d8010);
                background-image: linear-gradient(to bottom, #51a818, #3d8010);
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                font-family: Arial;
                color: #ffffff;
               
        }
        .btn{
                padding: 10px 20px 10px 20px;
                border: solid #32a840 2px;
                text-decoration: none;
                margin-left: 100px ;
                height: 50px;
                width: 200px;
                border-radius: 10px;
        }
        
        

        .register-title {
                font-family: 'Lobster', cursive;;
                font-weight: 2px;
                font-size: 46px;
                text-align: center;
                
        }
        .form{  
                
                margin: 200px 30px 20px 30px;
                padding: 20px 40px;

        }
</style>
<body>
<?php
if (is_user_logged_in()) {
    $user_id = get_current_user_id();
    $current_user = wp_get_current_user();
    $profile_url = get_author_posts_url($user_id);
    $edit_profile_url = get_edit_profile_url($user_id); ?>
    <center>
        <div class="regted" style="margin-top: 10px;">
            Bạn đã đăng nhập với tài khoản <a href="<?php echo $profile_url ?>"><b style="color: green"><?php echo $current_user->display_name; ?></b></a>
            Bạn có muốn <a href="<?php echo esc_url(wp_logout_url($current_url)); ?>"><b style="color: red">Thoát</b></a> không ?
        </div>
    </center>
<?php } else { ?>

    <div class="register-area">
        <?php $err = '';
        $success = '';
        global $wpdb, $PasswordHash, $current_user, $user_ID;
        if (isset($_POST['task']) && $_POST['task'] == 'register') {
            $pwd1 = $wpdb->escape(trim($_POST['pwd1']));
            $pwd2 = $wpdb->escape(trim($_POST['pwd2']));
            $email = $wpdb->escape(trim($_POST['email']));
            $username = $wpdb->escape(trim($_POST['username']));

            if ($email == "" || $pwd1 == "" || $pwd2 == "" || $username == "") {
                $err = 'Vui lòng không bỏ trống những thông tin bắt buộc!';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $err = 'Địa chỉ Email không hợp lệ!';
            } else if (email_exists($email)) {
                $err = 'Địa chỉ Email đã tồn tại!';
            } else if ($pwd1 <> $pwd2) {
                $err = 'Vui lòng nhập lại 2 password giống nhau!';
            } else {
                $user_id = wp_insert_user(array('user_pass' => apply_filters('pre_user_user_pass', $pwd1), 'user_login' => apply_filters('pre_user_user_login', $username), 'user_email' => apply_filters('pre_user_user_email', $email), 'role' => 'subscriber'));
                if (is_wp_error($user_id)) {
                    $err = 'Đã xảy ra lỗi khi đăng ký tài khoản mới!';
                } else {
                    do_action('user_register', $user_id);
                    $success = 'Bạn đã đăng ký thành công!';
                }
            }
        }
        ?>
        <!--display error/success message-->
        <div id="message">
            <?php
            if (!empty($err)) :
                echo "<script type='text/javascript'>alert('$err');</script>";
            endif;
            ?>
            <?php
            if (!empty($success)) :
                $login_page  = home_url('/login');
                echo '' . $success . '<a href=' . $login_page . '> Đăng nhập</a>' . '';
            endif;
            ?>
        </div>
        
        <div class="note" style="margin-top: opx">
                <h3 class="register-title">Register</h3>
                <p>Have an account yet, click <a href="login"><b style="color: red">here</b></a> to log into website.</p>
        </div>
        <hr>
        <form class="form-horizontal" method="post" role="form">
            <div class="form-group">
                <label class="control-label  col-sm-3" for="username">Username: <b style="color: red">*</b></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter the username">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="email">Email: <b style="color: red">*</b></label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="pwd1">Password: <b style="color: red">*</b></label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="pwd1" id="pwd1" placeholder="Enter password">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="pwd2">Re-password: <b style="color: red">*</b></label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="pwd2" id="pwd2" placeholder="Enter re-password">
                </div>
            </div>
            <?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Register</button>
                    <input type="hidden" name="task" value="register" />
                </div>
            </div>
        </form>
    </div>
    <div class="thongbaologin">
        <?php
        $login  = (isset($_GET['login'])) ? $_GET['login'] : 0;
        if ($login === "failed") {
            echo '<strong>ERROR:</strong> Sai username hoặc mật khẩu.!';
        } elseif ($login === "empty") {
            echo '<strong>ERROR:</strong> Username và mật khẩu không thể bỏ trống.';
        } elseif ($login === "false") {
            echo '<strong>ERROR:</strong> Bạn đã thoát ra.';
        }
        ?>
    </div>

<?php } ?>
</body>

</html>