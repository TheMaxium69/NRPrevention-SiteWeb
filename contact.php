<?php include "app/app.php";
$page = 4;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>


    <main>

        <section id="sectionCN">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-6 bgCN">
                        <h2 class="d-flex justify-content-center text-white fontTitleCN pt-4">CONTACTEZ NOUS</h2>
                        <p class="d-flex justify-content-center pb-4 fontTextCN">Notre équipe se tient à votre disposition pour <br> toutes demandes ou conseils, n'hésitez pas.</p>
                    </div>
                    <div class="col-lg-6 imgCN">

                    </div>

                </div>
        </section>
        <h2 class="fontForm">Ecrivez-nous un message</h2>
        <section class="sectionForm bgForm">
            <div class="container">
                <form action="api/request.php" method="POST">
                    <div class="row">
                        <div class="form-group col-lg-6 mt-4">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="nom" placeholder="NOM*" name="lastName">
                        </div>
                        <div class="form-group col-lg-6 mt-4">
                            <label for="prenom"></label>
                            <input type="text" class="form-control" id="prenom" placeholder="PRENOM*" name="firstName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12 mt-4">
                            <label for="email"></label>
                            <input type="email" class="form-control" id="email" placeholder="EMAIL*" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12 mt-4">
                            <label for="telephone"></label>
                            <input type="tel" class="form-control" id="telephone" placeholder="TELEPHONE*" name="phone">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6 mt-4">
                            <label for="codePostal"></label>
                            <input type="text" class="form-control" id="codePostal" placeholder="CODE POSTAL*" name="zipCode">
                        </div>
                        <div class="form-group col-lg-6 mt-4">
                            <label for="ville"></label>
                            <input type="text" class="form-control" id="ville" placeholder="VILLE*" name="city">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12 mt-4">
                            <label for="societe"></label>
                            <input type="text" class="form-control" id="societe" placeholder="SOCIETE*" name="compagny">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12 mt-4">
                            <label for="message"></label>
                            <textarea class="form-control" id="message" rows="6" placeholder="MESSAGE*" name="content"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-lg-12 pb-4 mt-4">
                            <button type="submit" class="btn btn-light btn-lg">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>



    </main>

    <footer> <?php footer(); ?> </footer>


</body>

</html>