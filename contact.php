<?php include "app/app.php";
$page = 4;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>


    <main>

        <section id="sectionCN">
            <div class="blockCN ">
                <div class="col-lg-6">
                    <h2 class="text-white">CONTACTEZ-NOUS</h2>
                </div>
                <div class="">
                    <p class="">Notre équipe se tient à votre disposition pour toutes demandes ou conseils, n'hésitez pas.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="fontForm">Ecrivez-nous un message</h2>
            </div>



        </section>



    </main>

    <footer> <?php footer(); ?> </footer>


</body>

</html>