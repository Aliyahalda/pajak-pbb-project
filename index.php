<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Pajak PBB</title>
</head>

<body>
    <div class="navflex">
        <nav>
            <div class="logo">
                <img src="image/logo.png" alt="Logo">
            </div>
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <!-- <li><a href="index.php?page=calculator">Calculator</a></li> -->
                <li><a href="index.php?page=definition">Definition</a></li>
                <li><a href="index.php?page=aboutus">About Us</a></li>
            </ul>
        </nav>
        <?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
		
				switch ($page) {
					case 'home':
						include "halaman/home.php";
						break;
					case 'definition':
						include "halaman/definition.php";
						break;
					case 'aboutus':
						include "halaman/aboutus.php";
						break;	
                        // case 'calculator':
                        //     include "halaman/calculator.php";
                        //     break;
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
			}else{
				include "halaman/home.php";
			}
			?>
    </div>
	<footer>
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Tentang</h4>
                        <ul>
                            <li><a href="index.php?page=home">Home</a></li>
                            <li><a href="index.php?page=definition">Definition</a></li>
                            <li><a href="index.php?page=aboutus">About Us</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4>Alamat</h4>
                        <ul>
                            <li><a href="#">Jl. Raya Wangun
                                    Kelurahan Sindangsari
                                    Bogor Timur 16720</a></li>
                        </ul>
                        <h4 class="telepon">Telepon</h4>
                        <ul>
                            <li><a href="#">0251-8242411 / 082221718035 (Whatsapp)</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4>Social Media</h4>
                        <div class="social-links">
                            <ul>
                                <a href="https://www.facebook.com/smkwikrama/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/smkwikrama" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/smkwikrama/" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCyhEUzlXbXet57qFnDfdWuw" target="_blank"><i
                                        class="fab fa-youtube"></i></a>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright">
            <p>COPYRIGHT © 2022 | SMK WIKRAMA BOGOR</p>
        </div>
</body>

</html>