<html>
<head>
	<title>Halaman User</title>
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
                height: 1.5px;
                margin: -1.1rem auto 0 auto;
                width: 175px;
            }
            a {
                text-decoration: none;
            }
            label {
                font-family: "Raleway", sans-serif;
                font-size: 11pt;
            }
            #halo {
                color: #36096d;
                font-family: "Raleway", sans-serif;
                font-size: 15pt;
                padding: 10px;
                margin-top: 50px;
                text-align: center;
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
                background: -webkit-linear-gradient(right, #37d5d6, #36096d);
                height: 1px;
                width: 100%;
            }
            .form-content {
                background: #fbfbfb;
                border: none;
                outline: none;
                padding-top: 14px;
            }           
            #teks {
                text-align: center;
            }
            #submit-btn {
                background: -webkit-linear-gradient(right, #37d5d6, #36096d);
                border: none;
                border-radius: 21px;
                box-shadow: 0px 1px 8px #36096d;
                cursor: pointer;
                color: white;
                font-family: "Raleway Semibold" sans-serif;
                font-weight: bold;
                text-align: center;
                height: 42.3px;
                margin: 0 auto;
                margin-top: 50px;
                transition: 0.25;
                width: 153px;
            }
            #submit-btn:hover {
                box-shadow: 0px 1px 18px #36096d;
            }
            img {
                padding: 50px;
                margin-left: 90px;
            }
        </style>
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
              <h2>Halaman User</h2>
              <div class="underline-title"></div>
            </div>
        </div>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
    <a href="#"><legend id="halo"><p>Halo <b><?php echo $_SESSION['email']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p></legend></a>
	
    <a href="logout.php">
        <img src="logout.png" alt="LOGOUT" width="50px" height="50px">
    </a>

	<br/>
	<br/>
 
</body>
</html>