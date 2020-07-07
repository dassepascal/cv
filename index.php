<?php $mysqly = new mysqli('localhost', 'root', '', 'relation_site_cv'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>CV Pascal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/script.js"></script>
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#about">Moi</a></li>
                    <li><a href="#skills">Compétences</a></li>
                    <li><a href="#formation">Formations</a></li>
                    <li><a href="#experience">Expériences</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#certificats">Certificats</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="about" class="container-fluid">
        <div class="col-xs-8 col-md-4 profile-picture">
            <img src="images/monPortrait.jpg" alt="Pascal" class="img-circle">
        </div>
        <div class="heading">
            <h1>Hello, c'est moi Pascal</h1>
            <h3>Développeur Web en alternance</h3>
            <h4>3 jours en entreprise, 2 jours de formation, durée 12 mois. </h4>
            <a href="docs/cv.pdf" class="button1">Télécharger CV</a><br>


        </div>


    </section>


    <section id="skills">
        <div class="blue-divider"></div>

        <div class="heading">
            <h2>Compétences</h2>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <h5>HTML 70%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <h5>CSS 70%</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <h5>PHP 60%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <h5>JAVASCRIPT 60%</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="formation">
        <div class="blue-divider"></div>
        <div class="heading">
            <h2>Formations</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="formation-block">
                        <h5>2020</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <a href="https://openclassrooms.com/fr/paths/185-developpeur-web">
                            <h3>OpenClassroom</h3>
                        </a>

                        <h4>Développeur web</h4>
                        <h6>Diplôme RNCP de niveau II</h6>
                        <div class="blue-divider"></div>

                        <ul>
                            <li>Découper, assembler et intégrer tous les éléments d’une
                                maquette graphique en HTML5</li>
                            <li>Ajouter du contenu audio et vidéo en HTML5 </li>
                            <li>Animer des pages web avec CSS3</li>
                            <li>Construire un site fluide s’adaptant à tous les types d’écran…</li>
                            <li>Améliorer le référencement naturel SEO</li>
                            <li>JavaScript,</li>
                            <li>Se connecter à un service web pour exploiter des données tierces (API),</li>
                            <li>Créer, gérer et afficher le contenu d'une base de données,</li>

                        </ul>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="formation-block">
                        <h5>2019-2022</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <a href="https://www.esecad.com/formation-web/integrateur-developpeur/programme.htm">
                            <h3>ESECAD</h3>
                        </a>

                        <h4>Développeur intégrateur web</h4>

                        <div class="blue-divider"></div>

                        <h6>Gestion de projet</h6>
                        <ul>
                            <li> Connaitre les bases des langages du web</li>
                            <li>concevoir un site efficace</li>
                            <li> Mettre en production un site web</li>
                        </ul>
                        <h6>HTML-CSS</h6>
                        <ul>
                            <li>HTML-CSS – Niveau Initiation</li>
                            <li>HTML-CSS – Niveau Perfectionnement</li>
                            <li>HTML-CSS – Niveau Avancé</li>
                            <li>HTML-CSS – Niveau Expert</li>
                            <li>Newsletter</li>
                        </ul>
                        <h6>Javascript</h6>
                        <ul>
                            <li>Niveau Initiation</li>
                            <li>Niveau Perfectionnement</li>
                        </ul>
                        <h6>Optimisation d’un site web</h6>
                        <ul>
                            <li>Maîtriser les fondamentaux du référencement naturel SEO</li>
                        </ul>
                        <h6>Conception graphique</h6>
                        <ul>
                            <li>Maîtriser les fondamentaux de Photoshop</li>
                        </ul>
                        <h6>PHP – MYSQL</h6>
                        <ul>
                            <li>PHP – Niveau Initiation</li>
                            <li>PHP – Niveau Perfectionnement</li>
                            <li>PHP – Niveau Avancé</li>
                            <li>PHP – Niveau Expert</li>
                        </ul>
                        <h6>WordPress</h6>
                        <ul>
                            <li>Créer un site WordPress</li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="formation-block">
                        <h5>1992-1993</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>AFPA</h3>
                        <h4>Technicien de maintenance en systémes automatisés</h4>
                        <h6>Diplôme RNCP de niveau IV</h6>
                        <div class="blue-divider"></div>

                        <ul>
                            <li>Pneumatique</li>
                            <li>Electricité</li>
                            <li>Automate programmable</li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="formation-block">
                        <h5>1983</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Lycée</h3>
                        <h4>Terminal F3 Electrotechnique</h4>

                        <div class="blue-divider"></div>
                        <p>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="experience">
        <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Expériences professionnelles</h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>OUEST COMPOSITE</h3>
                                <h4>Colleur</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2007-2020</p>
                            </div>
                            <div class="timeline-body">
                                <p>Formateur, colleur: assemblage d’inserts
                                    métallique sur des pièces en matériaux
                                    composites</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>S.G.A</h3>
                                <h4>Opérateur de sùreté aéroportuaire</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2002-2007</p>
                            </div>
                            <div class="timeline-body">
                                <p>Contrôle des passagers ,des bagages de soutes</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>S.E.S</h3>
                                <h4>Technicien alarme</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2000-2002</p>
                            </div>
                            <div class="timeline-body">
                                <p>Installation et maintenance de systèmes d’alarme
                                    filaires et radios.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>CORNOUAILLE DISTRIBUTION</h3>
                                <h4>Gestionnaire d'un parc de distributeurs de boissons</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 1999-2000</p>
                            </div>
                            <div class="timeline-body">
                                <p>Entretien et remplissage d’un parc de
                                    distributeurs automatiques de boissons</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>ARMORELEC</h3>
                                <h4>Galvanoplaste</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 1996-1999</p>
                            </div>
                            <div class="timeline-body">
                                <p>Opérateur sur ligne de production, montage,
                                    contrôle et suivi qualité.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>MATRA</h3>
                                <h4>Opérateur de production ligne FUJI (cms) </h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 1993-1995</p>
                            </div>
                            <div class="timeline-body">
                                <p>Approvisionnement, montage, contrôle qualité.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>I.B.M</h3>
                                <h4>Leader technique de ligne</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 1986-1991</p>
                            </div>
                            <div class="timeline-body">
                                <p>Responsable du secteur de la gravure, suivi de
                                    production, maintenance de niveau 1.Travail en salle blanche</p>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <div>

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
                    <a class="thumbnail" href="./html/realisation.html">
                        <img src="images/logo.png" alt="mes realisations dev">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="thumbnail" href="./html/windsurf.html">
                        <img src="images/windsurf.jpg" alt="windsurf">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="certificats">
        <div class="blue-divider"></div>
        <div class="container">
            <div class="heading">
                <h2>Certificats</h2>
            </div>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <!-- indicator -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                    <li data-target="#myCarousel" data-slide-to="7"></li>

                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/html_css.jpg" alt="html_css">
                    </div>
                    <div class="item ">
                        <img src="images/commande_terminal.jpg" alt="html_css">
                    </div>
                    <div class="item ">
                        <img src="images/git.jpg" alt="html_css">
                    </div>
                    <div class="item ">
                        <img src="images/javascript.jpg" alt="html_css">
                    </div>
                    <div class="item ">
                        <img src="images/jquery.jpg" alt="html_css">
                    </div>
                    <div class="item ">
                        <img src="images/web.jpg" alt="html_css">
                    </div>
                    <div class="item ">
                        <img src="images/udemy_javascript.jpg" alt="udemy_javascript">
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                    <span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                    <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </section>
    <?php


    ?>

    <section id="contact">
        <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>contact</h2>
            </div>
            <div class="row">

                <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="POST" action=" ">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom * </label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prenom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Nom *</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Votre email">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Téléphone </label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre Téléphone">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" class="form-control" placeholder="Votre message"></textarea>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <p><strong>* Ces informations sont requises</strong></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" name="submit_form" class="button1" value="Envoyer">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
    <div id="linkedin">
        <a href="https://www.linkedin.com/in/pascal-dasse">
            <img src="images/linkedin.jpg" alt="linkedin" width="50" height="30"></a>
    </div>

    <footer class="text-center">

        <a href="#about"><span class="glyphicon glyphicon-chevron-up"></span></a>


        <h5>APPRENDRE-A-CODER.COM</h5>
        <p>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" />
            </a>
        </p>




    </footer>


</body>


</html>
