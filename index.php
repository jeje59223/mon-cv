<!DOCTYPE html>
<html>

    <head>
        <title>CV Jérôme</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <script src="js/script.js"></script>
    </head>

    

    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <a class="navbar-brand" style="color: #fff" href="#about">Accueil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#skills">Compétences <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#experience">Expérience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#education">Formation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#recommandations">Centre d'intérêt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                </ul>
            </div>
        </nav>
       
        <section id="about" class="container-fluid">
        <?php
            if(isset($_POST['mail'])){
                $to = "jcnockaert@hotmail.fr";
                $from = $_POST['mail'];
                $object = $_POST['objet'];
                $message = $_POST['message'];
                mail($to, $object, $message, $from);
                ?>

                <div class="alert alert-success" role="alert">
                    Message envoyé !
                </div>            
        <?php } ?>              
            <div class="col-xs-8 col-md-4 profile-picture">
                <img src="images/moi.jpg" alt="Jérôme" class="rounded-circle">
            </div>
            <div class="heading">
                <h1>Hello, c'est moi Jérôme</h1>
                <h3>Développeur PHP SYMFONY Junior</h3>
                <a href="docs/Mon cv2.pdf" class="button-1">Télécharger CV</a>
            </div>
        </section>
        <section id="skills">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Compétences</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <h5>HTML 85 %</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <h5>CSS 85 %</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <h5>JAVASCRIPT 30 %</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                <h5>PHP 50 %</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                <h5>SYMFONY 50 %</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <h5>BOOTSTRAP 60 %</h5>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <section id="experience">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Expérience Professionelle</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge" id="experience1">
                            <span <i class="fas fa-suitcase"></i></span>
                        </div>
                        <div class="timeline-panel-container exp1">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>IT ROOM à Hem</h3>
                                    <h4>Développeur PHP SYMFONY Junior</h4>
                                    <p class="text-muted"><small <i class="far fa-clock"></i></small> juillet-octobre 2019</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Développement d'une application permettant la surveillance de l'ensemble d'un parc applicatif</p>
                                    <p>Maintenance d'applications</p>
                                    <p>Développement d'API (ApiPlatform)</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge" id="experience2">
                            <span <i class="fas fa-suitcase"></i></span>
                        </div>
                        <div class="timeline-panel-container-inverted exp2">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>LEROY MERLIN Villeneuve d'Ascq</h3>
                                    <h4>Conseiller de vente expert</h4>
                                    <p class="text-muted"><small <i class="far fa-clock"></i></small> depuis 2003</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Suivi des indicateurs pour atteindre les objectifs de ventes</p>
                                    <p>Contact avec les fournisseurs</p>
                                    <p>Force de proposition en centrale d'achat(nouveautés, services,...)</p>
                                    <p>Elaboration et suivi de stratégies en équipe "débriefing en réunion de secteur"</p>                                    
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge" id="experience3">
                            <span <i class="fas fa-suitcase"></i></span>
                        </div>
                        <div class="timeline-panel-container exp3">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>LEROY MERLIN Tourcoing</h3>
                                    <h4>Logisticien</h4>
                                    <p class="text-muted"><small <i class="far fa-clock"></i></small> 2010-2013</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Assurer la gestion et la tenue du magasin de stockage pour garantir la disponibilité des produits</p>
                                    <p>Préparer les commandes des clients afin d'être au rendez vous sur la satisfaction clients</p>
                                    <p>Fiabilisation des stocks et du taux de rupture</p>                                    
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section id="education">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>FORMATION</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 educ1">
                        <div class="education-block ">
                            <h5>Depuis février 2019</h5>
                            <span <i class="fas fa-graduation-cap fa-2x"></i></span>
                            <h3>M2I Formation Villeneuve d'Ascq</h3>
                            <h4>Concepteur développeur d'applications (Bac+3/Bac+4 : Niveau II)</h4>
                            <div class="red-divider"></div>                            
                        </div>
                    </div>
                    <div class="col-sm-6 educ2">
                        <div class="education-block">
                            <h5>2002</h5>
                            <span <i class="fas fa-graduation-cap fa-2x"></i></span>
                            <h3>LICP Tourcoing</h3>
                            <h4>Diplôme du Baccalauréat Professionnel spécialité commerce</h4>
                            <div class="red-divider"></div>                            
                        </div>
                    </div>
                    <div class="col-sm-6 educ1">
                        <div class="education-block ">
                            <h5>2001</h5>
                            <span <i class="fas fa-graduation-cap fa-2x"></i></span>
                            <h3>CREPS de Wattignies</h3>
                            <h4>Certificat d'initiateur de football 1er niveau (éducateur sportif)</h4>
                            <div class="red-divider"></div>                           
                        </div>
                    </div>
                    <div class="col-sm-6 educ2">
                        <div class="education-block">
                            <h5>2000</h5>
                            <span <i class="fas fa-graduation-cap fa-2x"></i></span>
                            <h3>LICP Tourcoing</h3>
                            <h4>Brevet D'études Professionnelles métiers de la comptabilité</h4>
                            <div class="red-divider"></div>                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://github.com/jeje59223" target="_blank">
                            <img src="images/github2.png" alt="Github">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://www.linkedin.com/in/jerome-cnockaert-359a20181/" target="_blank">
                            <img src="images/linkedin.png" alt="linkedin">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://www.viadeo.com/p/0022rvmyj18w1no" target="_blank">
                            <img src="images/viadeo_socialnetwork_17398 (1).png" alt="viadeo">
                        </a>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://gitlab.com/jcnockaert" target="_blank">
                            <img src="images/gitlab-tile.svg" alt="Github">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://app.gitkraken.com/glo/board/XYe7Fs4GEQAPlINv" target="_blank">
                            <img src="images/gitkraken2.png" alt="linkedin">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="thumbnail" href="https://twitter.com/Jeje59223" target="_blank">
                            <img src="images/github3.png" alt="viadeo">
                        </a>
                    </div>
                </div>             
            </div>
        </section>
        <section id="recommandations">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>Centre d'intérets</h2>
                </div>
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <ol>
                        <li data-target="myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="myCarousel" data-slide-to="1"></li>
                        <li data-target="myCarousel" data-slide-to="2"></li>
                        <li data-target="myCarousel" data-slide-to="3"></li>
                        <li data-target="myCarousel" data-slide-to="4"></li>
                        <li data-target="myCarousel" data-slide-to="5"></li>
                        <li data-target="myCarousel" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <h3>Football</h3>                            
                        </div>
                        <div class="carousel-item">
                            <h3>Voyage</h3>                            
                        </div>
                        <div class="carousel-item">
                            <h3>Cinéma</h3>                            
                        </div>
                        <div class="carousel-item">
                            <h3>Robotique (arduino et raspberry)</h3>                            
                        </div>
                        <div class="carousel-item">
                            <h3>Bricolage</h3>                            
                        </div>
                        <div class="carousel-item">
                            <h3>Informatique</h3>                            
                        </div>
                        <div class="carousel-item">
                            <h3>Jeux vidéo</h3>                            
                        </div>                        
                    </div>                    
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Contact</h2>
                </div>
                <div class="container text-center " id="contact">                                  
                    <h2 class="m-5 text-white">Formulaire de contact</h2>
                    <form method="POST" action="#about">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adresse mail :</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Entrez votre email">            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Objet :</label>
                            <select class="form-control" id="objet" name="objet">
                                <option value="question">Question</option>
                                <option value="remarque">Remarque</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message :</label>
                            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                        </div>  
                        <button type="submit" class="button-1">Valider</button>
                    </form>
                </div>
                
            </div>
        </section>
        

        <footer class="text-center">
            <a href="#about">
                <span <i class="fas fa-chevron-up"></i></span>
                <h5>© 2019 CNOCKAERT Jérôme</h5>
            </a>
        </footer>
    </body>
</html>