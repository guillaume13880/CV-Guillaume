<?php 

    $database = mysqli_connect('localhost','root','','cv-contact') or die('connection failed');

    if(isset($_POST['send'])){
        $name = mysqli_real_escape_string($database, $_POST['name']);
        $email = mysqli_real_escape_string($database, $_POST['email']);
        $number = mysqli_real_escape_string($database, $_POST['number']);
        $msg = mysqli_real_escape_string($database, $_POST['message']);

        $select_message = mysqli_query($database, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

        if(mysqli_num_rows($select_message) > 0){
            $message[] = 'message déja envoyé !';
        }else{
            mysqli_query($database, "INSERT INTO `contact_form`(`name`, `email`, `number`, `message`) VALUES ('$name', '$email', '$number', '$msg')") or die('query failed');
            $message[] = 'message envoyé avec succès !';
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Portfolio Guillaume L</title>
        <!--lien cdn de la police-->
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
        />
        <!-- aos css lien-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <!--lien style css-->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>

    <?php 
        if(isset($message)){
            foreach($message as $message){
                echo '
                <div class="message" data-aos="zoom-out">
                    <span>'.$message.'</span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                </div>
                ';
            }
        }
    
    ?>

        <header class="header">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="#home" class="logo">Portfolio</a>
            <nav class="navbar">
                <a href="#home" class="active">Acceuil</a>
                <a href="#about">à propos</a>
                <a href="#services">services</a>
                <a href="#portfolio">portfolio</a>
                <a href="#contact">contact</a>
            </nav>

            <div class="follow">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="https://github.com/guillaume13880/CV-Guillaume.git" class="fab fa-github"></a>
            </div>
        </header>
        <section class="home" id="home">
            <div class="image" data-aos="fade-right">
                <img src="./images/imgdev.PNG" alt="">
            </div>

            <div class="content" >
                <h3 data-aos="fade-up">bonjour, je suis Guillaume Laurent</h3>
                <span data-aos="fade-up">Web designer & developper</span>
                <p data-aos="fade-up">Développer web FullStack Junior </p>
                <a data-aos="fade-up" href="#about" class="btn">Sur moi</a>
            </div>
        </section>
        <section class="about" id="about">
            <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>
            <div class="biography" >
                <p data-aos="fade-up">Autonome est enthousiaste, dans le cadre d'une reconversion professionnel, mes premières expériences m'ont permis de renforcer mes acquies et d'appréhender les différents outils et techniques de Développement. En quête de nouveaux challenges, je souhaite rejoindre une organisation à laquelle je pourrais apporter mon dynamisme. 
                </p>
                <div class="bio">
                    <h3 data-aos="zoom-in"><span>nom : </span>LAURENT guillaume</h3>
                    <h3 data-aos="zoom-in"><span>email : </span> guillaume.laurent13880@gmail.com</h3>
                    <h3 data-aos="zoom-in"><span>address : </span> Bouche du rhone, VELAUX</h3>
                    <h3 data-aos="zoom-in"><span>telephone : </span> 06.71.61.59.79</h3>
                    <h3 data-aos="zoom-in"><span>age : </span> 28 ans</h3>
                    <h3 data-aos="zoom-in"><span>experience : </span> +2 ans</h3>
                </div>
                <a href="#" class="btn" data-aos="fade-up">Télécharger CV</a>
            </div>
            <div class="skills" data-aos="fade-up">
                <h1 class="heading"><span>Compétences</span></h1>
                <div class="progress">
                    <div class="bar" data-aos="fade-left"><h3><span>HTML</span><span>95%</span></h3></div>
                    <div class="bar" data-aos="fade-right"><h3><span>CSS</span><span>80%</span></h3></div>
                    <div class="bar" data-aos="fade-left"><h3><span>JavaScript</span><span>65%</span></h3></div>
                    <div class="bar" data-aos="fade-right"><h3><span>PHP</span><span>70%</span></h3></div>
                    <div class="bar" data-aos="fade-left"><h3><span>Symfony</span><span>80%</span></h3></div>
                </div>
            </div>
            <div class="edu-exp">
                <h1 class="heading" data-aos="fade-up"><span>education & experience</span></h1>
                <div class="row">
                    <div class="box-container">
                        <h3 class="title" data-aos="fade-right">education</h3>
                        <div class="box" data-aos="fade-right">
                            <span>(2022 - 2023)</span>
                            <h3>---</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                        <div class="box" data-aos="fade-right">
                            <span>(2021 - 2022)</span>
                            <h3>developper web FullStack</h3>
                            <p>Formation de 1 ans, a distance avec le groupe STUDI</p>
                        </div>
                        <div class="box" data-aos="fade-right">
                            <span>(2014)</span>
                            <h3>BAC PRO MEI</h3>
                            <p>BAC professionnel Maintenance des equipements industriels</p>
                        </div>
                        
                    </div>

                    <div class="box-container">
                        <h3 class="title" data-aos="fade-left">experience</h3>
                        <div class="box" data-aos="fade-left">
                            <span>(2022 - 2023)</span>
                            <h3>---</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                        </div>
                        <div class="box" data-aos="fade-left">
                            <span>(2021 - 2022)</span>
                            <h3>Développement web</h3>
                            <p>Réalisation d'exercices est apprentissage sur la plateforme STUDI</p>
                        </div>
                        <div class="box" data-aos="fade-left">
                            <span>(2014 - 2021)</span>
                            <h3>Technicen de maintenance</h3>
                            <p>Technicien machines tournantes chez PACA POMPES SERVICES</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!---------------------------------------------->
        <section class="services" id="services">
            <h1 class="heading" data-aos="fade-up"><span>services</span></h1>
            <div class="box-container">
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-code"></i>
                    <h3>web developpement</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae</p>
                </div>

                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-paint-brush"></i>
                    <h3>graphique design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae</p>
                </div>

                <div class="box" data-aos="zoom-in">
                    <i class="fab fa-bootstrap"></i>
                    <h3>boostrap</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae</p>
                </div>

                 <div class="box" data-aos="zoom-in">
                    <i class="fas fa-chart-line"></i>
                    <h3>marketing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae</p>
                </div>

                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-bullhorn"></i>
                    <h3>digital marketing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae</p>
                </div>

                <div class="box" data-aos="zoom-in">
                    <i class="fa-brands fa-symfony"></i>
                    <h3>Symfony</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae</p>
                </div>
            </div>
        </section>
        <!-------------------------------------------->
        <section class="portfolio" id="portfolio">
            <h1 class="heading" data-aos="fade-up"><span>portfolio</span></h1>
            <div class="box-container">
                <div class="box" data-aos="zoom-in">
                    <img src="./images/logo.jpg" alt="">
                    <h3>web developpement</h3>
                    <span>(2020 - 2021)</span>
                </div>

                <div class="box" data-aos="zoom-in">
                    <img src="./images/logo2.jpg" alt="">
                    <h3>web developpement</h3>
                    <span>(2020 - 2021)</span>
                </div>

                <div class="box" data-aos="zoom-in">
                    <img src="./images/logo3.jpg" alt="">
                    <h3>web developpement</h3>
                    <span>(2020 - 2021)</span>
                </div>

                <div class="box" data-aos="zoom-in">
                    <img src="./images/logo4.jpg" alt="">
                    <h3>web developpement</h3>
                    <span>(2020 - 2021)</span>
                </div>

                <div class="box" data-aos="zoom-in">
                    <img src="./images/logo7.jpg" alt="">
                    <h3>web developpement</h3>
                    <span>(2020 - 2021)</span>
                </div>

                <div class="box" data-aos="zoom-in">
                    <img src="./images/logo6.jpg" alt="">
                    <h3>web developpement</h3>
                    <span>(2020 - 2021)</span>
                </div>
            </div>
        </section>
        <!-------------------------------------->
        
        <section class="contact" id="contact">
            <h1 class="heading" data-aos="fade-up"><span>contacter moi</span></h1>
            <form action="" method="POST">
                <div class="flex">
                    <input data-aos="fade-right" type="text" name="name" placeholder="Entrer votre nom" class="box" required>
                    <input data-aos="fade-left" type="email" name="email" placeholder="Entrer votre email" class="box" required>
                </div>
                <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Entrer votre telephone" class="box" required>
                <textarea data-aos="fade-up" name="message" class="box" required placeholder="Entrer votre message" cols="30" rows="10"></textarea>
                <input data-aos="zoom-in" type="submit" value="Envoyer le message" name="send" class="btn">
            </form>
            <div class="box-container">
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-phone"></i>
                    <h3>telephone</h3>
                    <p>06.71.61.59.79</p>
                </div>
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-envelope"></i>
                    <h3>email</h3>
                    <p>guillaume.laurent13880@gmail.com</p>
                </div>
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>address</h3>
                    <p>Bouche du rhône, VELAUX - 13880</p>
                </div>
            </div>
        </section>
        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>me</span></div>
        
        





    <script src="./js/script.js"></script>
    <!--- aos js lien---->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration:800,
            delay:300
        });
    </script>
    </body>
    </html>
