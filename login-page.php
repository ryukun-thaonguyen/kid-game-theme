<?php
/*
 Template Name: Login Page
 */
?>


<?php get_header();

if (is_user_logged_in()) {
        $user_id = get_current_user_id();
        $current_user = wp_get_current_user();
        $profile_url = get_author_posts_url($user_id);
        $edit_profile_url = get_edit_profile_url($user_id); ?>
        <center>
                <div class="regted" style="margin-top: 150px;">
                Bạn đã đăng nhập với tài khoản <a href="<?php echo $profile_url ?>"><b style="color: green"><?php echo $current_user->display_name; ?></b></a>
                Bạn có muốn <a href="<?php echo esc_url(wp_logout_url($current_url)); ?>"><b style="color: red">Thoát</b></a> không ?
                </div>
        </center>
<?php } else { ?>
        <style>
        body {
                background: #2E8D41;
                font-family: Arial, sans-serif;
                
                line-height: 1.5em;
                background-color: pink;
        }

        .login-area {
                margin: 100px auto;
                width: 960px;
                padding: 1em;
                overflow: hidden;
        }


        label {
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
                padding: 10px 20px 10px 20px;
                border: solid #32a840 2px;
                text-decoration: none;
        }

        .btn1 {
                width: 331px;
        }

        .login-title {
                font-family: Arial;
        }
</style>

        <div class="login-area">
                <div class="note">
                        <h3 class="login-title">Đăng nhập</h3>
                        <p>Hãy sử dụng tài khoản của bạn để đăng nhập vào website. Nếu chưa có tài khoản, <a href="register"><b style="color: red">đăng ký tại đây</b></a>.</p>
                </div>
                <hr>
                <div class="form">
                        <?php
                        $args = array(
                                'redirect'       => site_url($_SERVER['REQUEST_URI']),
                                'form_id'        => 'dangnhap',
                                'label_username' => __('Tên tài khoản'),
                                'label_password' => __('Mật khẩu'),
                                'label_remember' => __('Ghi nhớ'),
                                'label_log_in'   => __('Đăng nhập'),
                        );
                        wp_login_form($args);
                        ?>
                </div>
                <?php
                $login  = (isset($_GET['login'])) ? $_GET['login'] : 0;
                if ($login === "failed") {
                        echo '<p><strong>ERROR:</strong> Sai username hoặc mật khẩu.</p>';
                } elseif ($login === "empty") {
                        echo '<p><strong>ERROR:</strong> Username và mật khẩu không thể bỏ trống.</p>';
                } elseif ($login === "false") {
                        echo '<p><strong>ERROR:</strong> Bạn đã thoát ra.</p>';
                }
                ?>
        </div>

<?php }
get_footer(); ?>