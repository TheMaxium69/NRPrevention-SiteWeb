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
                        <div class="d-flex justify-content-center">
                            <img src="./assets/deggr.png" class="m-3" height="200px" width="200px" alt="kc">
                        </div>
                        <div class="d-flex justify-content-center m-3">
                            ici mon titre 1
                        </div>
                        <div class="m-3">
                            ici mon contenu 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus dolorum repudiandae sunt excepturi nobis quo, hic, voluptatum autem recusandae doloremque at? Dolore voluptatibus velit quia, aliquid debitis nisi veritatis accusantium.
                        </div>
                    </div>
                    <div class="col-lg-4 border-end border-start"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class=" d-flex justify-content-center">
                            <img src="./assets/iohni.png" class="m-3" height="200px" width="200px" alt="deggr">
                        </div>
                        <div class="d-flex justify-content-center m-3">
                            ici mon titre 2
                        </div>
                        <div class="m-3">
                            ici mon contenu 2 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae ea itaque odit velit animi magni cum. Distinctio est eligendi sint vel, pariatur blanditiis reprehenderit quidem voluptates itaque eveniet nam assumenda!
                        </div>
                    </div>
                    <div class="col-lg-4"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="d-flex justify-content-center">
                            <img src="./assets/sqfze.png" class="m-3" height="200px" width="200px" alt="sqfze">
                        </div>
                        <div class="d-flex justify-content-center m-3">
                            ici mon titre 3
                        </div>
                        <div class="m-3">
                            ici mon contenu 3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sint, architecto in accusantium neque cum perferendis et vel, possimus voluptatibus iusto ullam sed id optio culpa consequatur. Expedita, natus distinctio.
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
                        <div id="h2CL" class="m-3 fontCadreLegale">
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
                        <div class="m-3">
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
            <div class="container"> <!-- container si je touche pas les bords pas de container si je touche les bords)
                    <h2>MON TITRE</h2>-->
                <div class="row d-flex justify-content-around imageFormation"> <!-- ça aligne -->
                    <div class="col-lg-2 custom-width"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <img class="img-fluid" src="./assets/page-9.jpeg" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p class="text-start">Formation <br> Incendie</p>
                        </div>
                    </div>
                    <div class="col-lg-2 custom-width"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border">
                            <img src="./assets/postures.jpeg" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p class="text-start">Formation <br> Geste et posture</p>
                        </div>
                    </div>
                    <div class="col-lg-2 custom-width"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border">
                            <img src="./assets/dfdfg (1).jpeg" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p class="text-start">Formation <br> SST</p>
                        </div>
                    </div>
                    <div class="col-lg-2 custom-width"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border">
                            <img src="./assets/defib.jpeg" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p class="text-start">Formation <br> Défibrilateur</p>
                        </div>
                    </div>
                    <div class="col-lg-2 custom-width"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border">
                            <img src="./assets/page-5.jpeg" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p class="text-start">Formation <br>MAC SST</p>
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
                            <p>TEST</p>
                        </div>
                    </div>
                    <div class="col-lg-3"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <img src="https://placehold.co/150x150" height="150px" width="150px" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p>TEST</p>
                        </div>
                    </div>
                    <div class="col-lg-3"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <img src="https://placehold.co/150x150" height="150px" width="150px" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p>TEST</p>
                        </div>
                    </div>
                    <div class="col-lg-3"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <img src="https://placehold.co/150x150" height="150px" width="150px" alt="kc">
                        </div>
                        <div class="border d-flex justify-content-center">
                            <p>TEST</p>
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
                    <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <img class="img-fluid" src="./assets/calendrier.png" alt="kc">
                        </div>
                    </div>
                    <div class="col-lg-4"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <h2>Calendrier</h2>
                        </div>
                    </div>
                    <div class="col-lg-2"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class="border d-flex justify-content-center">
                            <img class="img-fluid" src="./assets/calcul.png" alt="kc">
                        </div>
                    </div>
                    <div class="col-lg-4"> <!-- On copie ça le nombre de fois ou on a besoin -->
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