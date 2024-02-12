<?php include "app/app.php";
$page = 4;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>


    <main>

        <section id="sectionCN">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-6 bg-warning">
                        <h2 class="d-flex justify-content-center text-white p-4">CONTACTEZ NOUS</h2>
                        <p class="d-flex justify-content-center p-4">Notre équipe se tient à votre disposition pour <br> toutes demandes ou conseils, n'hésitez pas.</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="d-flex justify-content-center">Notre équipe se tient à votre disposition pour <br> toutes demandes ou conseils, n'hésitez pas.</p>
                    </div>

                </div>
        </section>
        <h2 class="fontForm">Ecrivez-nous un message</h2>
        <section class="sectionForm bgForm">
            <div class="container">
                <form>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="nom" placeholder="NOM*">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="prenom"></label>
                            <input type="text" class="form-control" id="prenom" placeholder="PRENOM*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label for="email"></label>
                            <input type="email" class="form-control" id="email" placeholder="EMAIL*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label for="telephone"></label>
                            <input type="tel" class="form-control" id="telephone" placeholder="TELEPHONE*">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="codePostal"></label>
                            <input type="text" class="form-control" id="codePostal" placeholder="CODE POSTAL*">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="ville"></label>
                            <input type="text" class="form-control" id="ville" placeholder="VILLE*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label for="societe"></label>
                            <input type="text" class="form-control" id="societe" placeholder="SOCIETE">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label for="message"></label>
                            <textarea class="form-control" id="message" rows="6" placeholder="MESSAGE"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-lg-12 pb-4">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>



    </main>

    <footer> <?php footer(); ?> </footer>


</body>

</html>