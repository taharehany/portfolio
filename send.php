<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Taha Alrehany">
    <title> Taha Alrehany </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div class="main-container">
        <!-- satrt main menu -->
        <section class="main-menu">
            <nav class="main-navbar navbar-expand-lg navbar-light">
                <div class="button-menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="logo">
                    <a class="navbar-brand" href="#"><img src="imgs/small-logo2.png" /></a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-home"></i> home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about"><i class="fas fa-user"></i> about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#work"><i class="fas fa-briefcase"></i> work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience"><i class="fas fa-lightbulb"></i> experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills"><i class="far fa-chart-bar"></i> skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"><i class="fas fa-phone"></i> contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>

        <style>
            body {
                text-align: center
            }

            .header-nav {
                top: 0;
                margin-top: 0;
                padding: 12px 10px;
                -webkit-box-shadow: 0px 1px 27px -3px rgba(0, 0, 0, 0.2);
                -moz-box-shadow: 0px 1px 27px -3px rgba(0, 0, 0, 0.2);
                -ms-box-shadow: 0px 1px 27px -3px rgba(0, 0, 0, 0.2);
                -o-box-shadow: 0px 1px 27px -3px rgba(0, 0, 0, 0.2);
                box-shadow: 0px 1px 27px -3px rgba(0, 0, 0, 0.2);
            }

            footer {
                position: absolute;
                bottom: 0;
                width: 100%
            }

        </style>

        <!-- /menubar -->
        <main id="main" style="margin-top: 150px;">
            <section id="about">
                <div class="container">
                    <header class="section-header">
                        <h3>
                            <?php
                                $email= "ryhanytaha@gmail.com";

                                if (!empty($_POST)){

                                    if(empty($_POST['name']) or empty($_POST['tel']) or empty($_POST['email']) or empty($_POST['message'])){
                                        echo("لم تقم بتعبئة جميع الخانات <br>");

                                    }
                                    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                                    if(!preg_match($regex, $_POST['email'])){
                                        echo("بريد خاطئ");

                                    }
                                    else{
                                        $message  = "الاسم :\n{$_POST["name"]}\n";
                                        $message .= "التليفون :\n{$_POST["tel"]}\n";
                                        $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                                        $message .= "الرسالة :\n{$_POST["message"]}\n";
                                        $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                                        $message = stripslashes($message);
                                        $message = wordwrap($message, 70);
                                        mail($email,"my portfolio",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                        echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                                    }
                                }
                        ?>
                        </h3>
                    </header>
                </div>
            </section><!-- #contact -->
        </main>


    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="js/jquery.sticky-kit.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
