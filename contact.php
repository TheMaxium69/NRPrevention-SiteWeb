<?php include "app/app.php";
$page = 4;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>


    <main>

        <section id="sectionCN">
            <div class="blockCN">
                <h1>CONTACTEZ-NOUS</h1>
                <br>
                <p>Notre équipe se tient à votre disposition pour toutes demandes ou conseils, n'hésitez pas.</p>
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

        </section>




    </main>

    <footer> <?php footer(); ?> </footer>


</body>

</html>