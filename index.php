<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <style>
            body {
                background: -webkit-linear-gradient(left top, #08c8f6, #4d5dfb);
                background-repeat: no-repeat;
            }
            #card {
                background: #FBFBFB;
                border-radius: 8px;
                box-shadow: 1px, 2px, 8px rgba(0, 0, 0, 0.65);
                height: 420px;
                margin: 12.2rem auto 8.1rem auto;
                width: 329px;
            }
            #card-content {
                padding: 12px 44px;
            }
            #card-title {
                font-family: "Raleway Thin", sans-serif;
                letter-spacing: 4px;
                padding-bottom: 23px;
                padding-top: 13px;
                text-align: center;
            }
            .underline-title {
                background: -webkit-linear-gradient(right, #08c8f6, #4d5dfb);
                height: 2px;
                margin: -1.1rem auto 0 auto;
                width: 89px;
            }
            a {
                text-decoration: none;
            }
            label {
                font-family: "Raleway", sans-serif;
                font-size: 11pt;
            }
            #forgot-pass {
                color: #36096d;
                font-family: "Raleway", sans-serif;
                font-size: 10pt;
                margin-top: 3px;
                text-align: right;
            }
            .form {
                align-items: left;
                display: flex;
                flex-direction: column;
                padding-left: 40px;
                padding-right: 40px;
                padding: auto;
            }
            .form-border {
                background: -webkit-linear-gradient(right, #08c8f6, #4d5dfb);
                height: 1px;
                width: 100%;
            }
            .form-content {
                background: #fbfbfb;
                border: none;
                outline: none;
                padding-top: 14px;
            }
            #signup {
                color: #36096d;
                font-family: "Raleway",sans-serif;
                font-size: 10pt;
                margin-top: 16px;
                text-align: center;
            }
            .alert {
                margin-top: 10px;
                font-size: 9pt;
                font-family: "Raleway";
                color: #FF0000;
            }
            #submit-btn {
                background: -webkit-linear-gradient(right, #08c8f6, #4d5dfb);
                border: none;
                border-radius: 21px;
                box-shadow: 0px 1px 8px #4d5dfb;
                cursor: pointer;
                color: white;
                font-family: "Raleway Semibold" sans-serif;
                font-weight: bold;
                height: 42.3px;
                margin: 0 auto;
                margin-top: 50px;
                transition: 0.25;
                width: 153px;
            }
            #submit-btn:hover {
                box-shadow: 0px 1px 18px #4d5dfb;
            }
        </style>
    </head>
    <body>
        
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                  <h2>LOGIN</h2>
                  <div class="underline-title"></div>
                </div>
            </div>
            
            <form method="post" class="form" action="cek.php">

                <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
                <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />

                <div class="form-border"></div>

                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required />

                <div class="form-border"></div>

                <a href="#"><legend id="forgot-pass">Lupa Password ?</legend></a>
                
                <div class="alert">
                <?php 
                if(isset($_GET['pesan'])){
                    if($_GET['pesan']=="gagal"){
                        echo "Username dan Password tidak sesuai !";
                    }
                }
                ?>
                </div>
            
            <input id="submit-btn" type="submit" name="submit" value="LOGIN"/>
            <a href="#" id="signup">Belum punya akun ?</a>

            </form> 

        </div>
    </body>
</html>