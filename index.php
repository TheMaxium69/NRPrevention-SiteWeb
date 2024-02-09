<?php include "app/app.php";
$page = 1;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>

    <main>
        <div class="brown-bar"></div>
        <section id="sectionACF">
            <!-- ACCOMPAGNEMENT/COMPETENCES/FORMATION -->
            <div class="container"> <!-- container si je touche pas les bords pas de container si je touche les bords)
                    <h2>MON TITRE</h2>-->

                <div class="row"> <!-- ça aligne -->
                    <div class="col-lg-4"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="d-flex justify-content-center img1">

                        </div>
                        <div class="d-flex justify-content-center m-3">
                            <p class="fontOrange">Accompagnement</p>
                        </div>
                        <div class="m-3">
                            <p> Spécialiste de la prévention et de la sécurité en entreprises,nous vous accompagnons dans la formation de vos salariés en satsifaisant aux obligations légales et règlementaires en vigueur en fonction de vos besoins.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 border-end border-start"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class=" d-flex justify-content-center img2">

                        </div>
                        <div class="d-flex justify-content-center m-3">
                            <p class="fontOrange">Compétences</p>
                        </div>
                        <div class="m-3">
                            Notre objectif est d'apporter à vos collaborateurs les compétences nécessaires en matière de secourisme et/ou de sécurité incendie afin de pouvoir intervenir rapidement et efficacement.
                        </div>
                    </div>
                    <div class="col-lg-4"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="d-flex justify-content-center img3">

                        </div>
                        <div class="d-flex justify-content-center m-3">
                            <p class="fontOrange">Formation</p>
                        </div>
                        <div class="m-3">
                            Nos formations sont dispensés par des professionnels de l'incendie et du secourisme. Elles sont composées d'apports théoriques interactifs et de participatifs ainsi que d'études de cas et de mises en pratique.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section3CD">
            <!-- 3 cases design -->
            <div> <!-- container si je touche pas les bords pas de container si je touche les bords)
                    <h2>MON TITRE</h2>-->
                <div class="row justify-content-end p-0 m-0"> <!-- ça aligne -->
                    <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="rectangledesign rectanglecolor1">
                        </div>
                    </div>
                    <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="rectangledesign rectanglecolor2">
                        </div>
                    </div>
                    <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="rectangledesign rectanglecolor1">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sectionCL">
            <!-- CADRE LEGALE -->
            <div class="container NR"> <!-- container si je touche pas les bords pas de container si je touche les bords)
                    <h2>MON TITRE</h2>-->

                <div class="row"> <!-- ça aligne -->
                    <div class="col-lg-6 h2NR"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div id="h2CL" class="m-3 fontCadreLegale fontOrange">
                            CADRE <br> LEGALE
                            <style>
                                .h2NR:before {
                                    content: 'NR';

                                }
                            </style>
                        </div>
                    </div>
                    <div class="col-lg-6 border-start"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="m-3">
                            Les entreprises ont pour obligations de mettre en place des formations de sécurité. Ces formations s'adressent aux personnes qui sont en CDD ou intérimaires, qui sont nouvellemnt embauchés, qui changent de poste, qui ont été en arrêt depuis 21 jours et pour les entreprises exterieurs. NR prévention intervient donc en tant que formateur indépendant pour assurer la mise en pratique et théorique de ces formations qui visent à protéger la santé et maintenir le bien-être au travail pour les salariés.
                        </div>
                        <div class="m-3 fontOrange">
                            Article L 4141-2 du code du travail
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="brown-bar"></div>
                    <div class="gray-bar"></div>
                </div>
                <div class="col-lg-2">
                    <h2 class="fontFormations">FORMATIONS</h2>
                </div>
            </div>
        </div>
        <section id="sectionF">
            <!-- FORMATIONS -->
            <div class="container-fluid"> <!-- container si je touche pas les bords pas de container si je touche les bords)
                    <h2>MON TITRE</h2>-->
                <div class="row d-flex justify-content-evenly imageFormation"> <!-- ça aligne -->
                    <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="imgF1">

                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="text-center fontOrange">Formation <br> Incendie</p>
                        </div>
                    </div>
                    <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="imgF2">

                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="text-center fontOrange">Formation <br> Geste et posture</p>
                        </div>
                    </div>
                    <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="imgF3">

                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="text-center fontOrange">Formation <br> SST</p>
                        </div>
                    </div>
                    <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="imgF4">

                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="text-center fontOrange">Formation <br> Défibrilateur</p>
                        </div>
                    </div>
                    <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="imgF5">

                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="text-center fontOrange">Formation <br>MAC SST</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <div class="gray-bar"></div>
                </div>
                <div class="col-lg-4">
                </div>
                <div class="col-lg-6">
                    <div class="brown-bar"></div>
                </div>
            </div>
        </div>
        <section id="sectionQ1">
            <div class="container">
                <!-- 3 cases design -->
                <div> <!-- container si je touche pas les bords pas de container si je touche les bords)
                    <h2>MON TITRE</h2>-->
                    <div class="row p-0 m-0"> <!-- ça aligne -->
                        <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                            <div class="rectangledesign rectanglecolor3">
                                <img class="img-fluid" src="./assets/Logo-Qualiopi.png" alt="Logo Qualiopi">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sectionQ2">
            <!-- Qualiopi -->
            <div class="container"> <!-- container si je touche pas les bords pas de container si je touche les bords)
                    <h2>MON TITRE</h2>-->
                <div class="row justify-content-between"> <!-- ça aligne -->
                    <div class="col-lg-3"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <img src="https://placehold.co/150x150" height="150px" width="150px" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p class="text-center">620 000+ Nombre d'AT sur lieu de travail par an</p>
                        </div>
                    </div>
                    <div class="col-lg-3"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <img src="https://placehold.co/150x150" height="150px" width="150px" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p class="text-center">550 Décès sur lieu de travail par an </p>
                        </div>
                    </div>
                    <div class="col-lg-3"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <img src="https://placehold.co/150x150" height="150px" width="150px" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p class="text-center">99% de taux de réussite</p>
                        </div>
                    </div>
                    <div class="col-lg-3"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <img src="https://placehold.co/150x150" height="150px" width="150px" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p class="text-center">97% de taux de satisfaction sur nos formations</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sectionCD">
            <!-- Calendrier/Devis -->
            <div class="container"> <!-- container si je touche pas les bords pas de container si je touche les bords)
                    <h2>MON TITRE</h2>-->
                <div class="row"> <!-- ça aligne -->
                    <div class="col-lg-6 d-flex align-items-center"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="row">
                            <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                                <div class="border d-flex justify-content-center">
                                    <img class="img-fluid" src="./assets/calendrier.png" height="200px" width="200px" alt="kc">
                                </div>
                            </div>
                            <div class="col-lg-6"> <!-- On copie ça le nombre de fois ou on a besoin -->
                                <div class="border d-flex justify-content-center">
                                    <h2>Calendrier</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <img class="img-fluid" src="./assets/calcul.png" alt="kc">
                        </div>
                    </div>
                    <div class="col-lg-3"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <h2>Devis</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer> <?php footer(); ?> </footer>

</body>

</html>