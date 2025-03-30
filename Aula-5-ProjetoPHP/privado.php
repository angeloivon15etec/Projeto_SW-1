<?php
$nome = isset($_GET['nome']) ? $_GET['nome'] : 'Usuário';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Bem-Vindo</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#FastFood">FastFood</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#sobre">Sobre</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contato">Contato</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">voltar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/logo.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Bem vindo <?php echo $nome ?></h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Os melhores Fast food do Mundo</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="FastFood">
    <div class="container">
        <!-- Título da seção -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Fast Foods</h2>
        
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Grid de itens -->
        <div class="row">
            <!-- Item 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-box text-center">
                    <a href="https://www.dominos.com.br" target="_blank">
                        <img class="img-fluid" src="assets/img/images (1).png" alt="Domino's Pizza" />
                        <p class="portfolio-text">Domino's Pizza</p>
                    </a>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-box text-center">
                    <a href="https://www.burgerking.com.br" target="_blank">
                        <img class="img-fluid" src="assets/img/Burger_King_logo_(1999).svg.png" alt="Burger King" />
                        <p class="portfolio-text">Burger King</p>
                    </a>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-box text-center">
                    <a href="https://pizzahut.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=suno_inst-pizzahut_google_search_conversao_low_web&utm_term=pzh-00005&utm_content=pzh-00005_google_search_brand-awareness_ampla_keywords_txt_web&gad_source=1&gclid=Cj0KCQjw16O_BhDNARIsAC3i2GB0J7yMLtiZBnQEp65htAQtKdgOIlNYt2pz_LQlJBd-kE0HRj3eNL8aAsMAEALw_wcB">
                        <img class="img-fluid" src="assets/img/Pizza_Hut_logo.svg.png" alt="Pizza Hut" />
                        <p class="portfolio-text">Pizza Hut</p>
                    </a>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-box text-center">
                    <a href="https://www.mcdonalds.com.br/">
                        <img class="img-fluid" src="assets/img/McDonalds-logo-1.png" alt="McDonald's" />
                        <p class="portfolio-text">McDonald's</p>
                    </a>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-box text-center">
                    <a href="https://cupons.kfcbrasil.com.br/home">
                        <img class="img-fluid" src="assets/img/KFC-Logo-PNG-Image.png" alt="KFC" />
                        <p class="portfolio-text">KFC</p>
                    </a>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-box text-center">
                    <a href="https://www.subway.com.br/">
                        <img class="img-fluid" src="assets/img/Subway_2016_logo.svg.png" alt="Subway" />
                        <p class="portfolio-text">Subway</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="sobre">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Sobre</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Os sites que classificam os melhores restaurantes do mundo, como The World's 50 Best Restaurants, são guias confiáveis para quem busca experiências gastronômicas de alto nível. Eles destacam restaurantes premiados, novas tendências e chefs inovadores, ajudando a valorizar a diversidade da culinária global.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Além de facilitar a escolha de estabelecimentos para viajantes e apreciadores da gastronomia, esses sites oferecem avaliações detalhadas e insights sobre os melhores pratos, tornando a experiência mais enriquecedora.</p></div>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contato">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contato comigo</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="" />
                                <label for="name">Nome</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Pela internet</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small> &copy; Angelo Ivon Domingues Tenorio De Almeida 2025 </small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
