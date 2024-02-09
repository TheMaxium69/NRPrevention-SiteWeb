<?php include "app/app.php";
$page = 4;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>


    <main>

        <section id="sectionCN">
            <div class="blockCN ">
                <div class="col-lg-4">
                    <h2 class="text-white">CONTACTEZ-NOUS</h2>
                </div>
                <div class="">
                    <p class="">Notre équipe se tient à votre disposition pour toutes demandes ou conseils, n'hésitez pas.</p>
                </div>
            </div>
        </section>
        <h2 class="fontForm">Ecrivez-nous un message</h2>
        <section class="sectionForm bgForm">
            <div class="container">
                <form>
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" placeholder="Votre nom">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" id="prenom" placeholder="Votre prénom">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Votre email">
                    </div>

                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" class="form-control" id="telephone" placeholder="Votre téléphone">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label for="codePostal">Code Postal</label>
                            <input type="text" class="form-control" id="codePostal" placeholder="Code Postal">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="ville">Ville</label>
                            <input type="text" class="form-control" id="ville" placeholder="Ville">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="societe">Société</label>
                        <input type="text" class="form-control" id="societe" placeholder="Votre société">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="6" placeholder="Votre message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </section>



    </main>

    <footer> <?php footer(); ?> </footer>


</body>

</html>