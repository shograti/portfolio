<!DOCTYPE html>
<html lang="en" id="page">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title></title>
</head>

<body>
    <header class="header-content">
        <div class="presentation">
            <h2>Léo Petitberghien</h2>
            <h3>Développeur étudiant</h3>
            <p>
                Apprenti développeur curieux, je suis avide d'apprendre de nouvelles choses.
            </p>
        </div>
        <div class="img-card" id="img-show">
            <div class="social-links" id="icons">
                <a href="https://github.com/shograti" target="_blank"><img src="assets/img/icons8-github-50.png"
                        width="40px" alt="" /></a>
                <a href="https://www.linkedin.com/in/l%C3%A9o-petitberghien-786aa222a/" target="_blank">
                    <img src="assets/img/icons8-linkedin-50.png" width="40px" alt="" /></a>
            </div>
        </div>
    </header>

    <main class="details">
        <div class="list">
            <ul>
                <li class="show">
                    Expériences
                    <i data-feather="arrow-down-right" class="feather-main"></i>
                </li>
                <section class="experiences-content">
                    <ul>
                        <li class="sub-show">
                            2017-2019 - Animateur et entraineur du jeu d'échecs - Schlak,
                            Paris
                            <i data-feather="arrow-down-right" class="feather-sub"></i>
                        </li>
                        <div class="sub-content">
                            Préparation de cours d'échecs au sein du club et des écoles
                            primaires dans le cadre des activités périscolaires, migration et
                            modification du site internet de l'association, organisation
                            d'évènements (tournois, stages), aide aux enfants les plus en
                            difficulté (réussite éducative), création de matériel et d'activités
                            pédagogiques uniques (diagrammes, puzzles, ateliers).
                        </div>
                        <li class="sub-show">
                            2009-2017 - Création de sites internet, création de contenu,
                            blogging - Personnel, Lille
                            <i data-feather="arrow-down-right" class="feather-sub"></i>
                        </li>
                        <div class="sub-content">
                            Déploiements de sites utilisant Joomla, Wordpress, adaption des
                            templates graphiques, création de contenu (actualités
                            technologiques, satire, poésie, musique).
                        </div>
                    </ul>
                </section>

                <li class="show">
                    Formations
                    <i data-feather="arrow-down-right" class="feather-main"></i>
                </li>
                <section class="formations-content">
                    <ul>
                        <li>
                            2021 - Formation Développeur Web & Web Mobile - Centre Afpa
                            Roubaix
                        </li>
                        <li>
                            2014 - Stage découverte géomètre topographe auprès d'un professionel
                        </li>
                        <li>
                            2012 - Baccalauréat Général Littéraire - Lycée Fénelon, Lille
                            (Mention Bien)
                        </li>
                    </ul>
                </section>

                <li class="show">
                    Technos <i data-feather="arrow-down-right" class="feather-main"></i>
                </li>
                <section class="technos-content">
                    <img src="assets/img/html.png" alt="" title="HTML5" />
                    <img src="assets/img/css.png" alt="" title="CSS3" />
                    <img src="assets/img/js.png" alt="" title="Javascript" />
                    <img src="assets/img/php.png" alt="" title="PHP" />

                </section>

                <li class="show">
                    Projets <i data-feather="arrow-down-right" class="feather-main"></i>
                </li>
                <section class="project-content">
                    <div class="img-project-container">
                        <a href="https://leo.mystagiaire.fr/myuka"><img src="assets/img/myuka-capition.png"
                                title="Projet inspiré de l'application YUKA réalisé avec Angular et l'API OpenFoodFacts"
                                alt="" /></a>
                    </div>
                </section>

                <li class="show">
                    Contact <i data-feather="arrow-down-right" class="feather-main"></i>
                </li>
                <section class="contact-content">
                    <ul>
                        <li>
                            <a href="https://github.com/shograti/" target="_blank">Github</a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/l%C3%A9o-petitberghien-786aa222a/" target="_blank">LinkedIn</a>
                        </li>
                        <li class="sub-show">
                            Mail <i data-feather="arrow-down-right" class="feather-sub"></i>
                        </li>
                        <div class="sub-content">
                            <form class="contact-form" action="contact.php" method="POST">
                                <label>Nom :</label>
                                <input type="text" name="name">
                                <label>Objet : </label>
                                <input type="text" name="object">
                                <label>Email :</label>
                                <input type="email" name="email" />
                                <label class="message-label"> Message :</label>
                                <textarea name="message"></textarea>
                                <button type="submit">Envoyer</button>
                            </form>
                        </div>
                    </ul>
                </section>
            </ul>
        </div>
    </main>

    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>

</body>

</html>