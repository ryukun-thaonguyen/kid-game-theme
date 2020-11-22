<?php
/*
 Template Name: Login Page
 */
?>


<?php 

if (is_user_logged_in()) {
        $user_id = get_current_user_id();
        $current_user = wp_get_current_user();
        $profile_url = get_author_posts_url($user_id);
        $edit_profile_url = get_edit_profile_url($user_id); ?>
        <center>
                <div class="regted" style="margin-top: 150px;">
                You are logged in with your account <a href="<?php echo $profile_url ?>"><b style="color: green"><?php echo $current_user->display_name; ?></b></a>
                Do you want to <a href="<?php echo esc_url(wp_logout_url($current_url)); ?>"><b style="color: red">Logout</b></a> ?
                </div>
        </center>
<?php } else { ?>
        <style>
        *{
                padding:6px;
                margin:0;
        }
        body {
                background: url("<?php echo get_template_directory_uri()?>./assets/uploads/homePage_panel_boys.png") no-repeat;
                font-family: Arial, sans-serif;
                background-size: cover;
                align-items: center;
                justify-content: center;
                display:flex;
                
                
        }

        .login-area {
                background: skyblue;
                position: relative;
                margin-top:100px;
                width: 600px;
                height: 800px;
                
                border-radius:10px;
                padding: 2em;
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
                margin-top: 30px;
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
                padding: 10px 20px 10px 20px;
                border: solid #32a840 2px;
                text-decoration: none;
                margin-left: 150px ;
        }
        
        .btn1 {
                text-align: center;
                width: 331px;
        }

        .login-title {
                font-family: 'Lobster', cursive;;
                font-weight: 2px;
                font-size: 46px;
                text-align: center;
                
        }
        .form{  
                
                margin: 80px 30px 20px 30px;
                
                padding: 20px 40px;

        }
        .button-primary:hover {
                
                background-color: yellowgreen;

        }
        
</style>
       
        <div class="login-area">
                <div class="note">
                        <h3 class="login-title">Login</h3>
                        
                </div>
                <hr>
                <div class="form">
                        <?php
                        $args = array(
                                'redirect'       => site_url($_SERVER['REQUEST_URI']),
                                'form_id'        => 'dangnhap',
                                'label_username' => __('Username:'),
                                'label_password' => __('Password:'),
                                'label_remember' => __('Save:'),
                                'label_log_in'   => __('Login'),
                        );
                        wp_login_form($args);
                        ?>
                        <p style="padding-top: 20px;">Please use your account to log into the website. If you don't have an account,<a href="<?php echo get_home_url() ?>/register"><b style="color: screen">register here.</b></a>.</p>
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
 ?>