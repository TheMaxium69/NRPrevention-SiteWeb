<?php include "app/app.php";
$page = 2;
head($page); ?>

<body>
    <header> <?php navbar($page); ?>
    </header>
    <main>
        <div class="displayback-calendar">
        </div>
        <h1 class="margin-header-calendrier">Calendrier 2022</h1>

        <div class="comportement-div">

            
            <div id="formation-incendie">
                <div class="planning">
                <div class="titre-formation">
                        <h3>Formation Incendie</h3>
                    </div>
                    <h4>Dates</h4>
                                <p>Le 17/08/2022 au 18/08/2022</p>
                                <p>Le 17/08/2022 au 18/08/2022</p>
                                <p>Le 17/08/2022 au 18/08/2022</p>
                                <p>Le 17/08/2022 au 18/08/2022</p>
                </div>

                <div class="lieu">
                    <h3>Lieu</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nisi iusto odio, aliquid eum quod maiores nulla </p>
                </div>

            </div>
            <div id="formation-sst">

                <div class="planning">
                    <div class="titre-formation">
                    <h3>Formation SST</h3>
                    </div>
                </div>
                <div class="calendar"></div>

            </div>


            <div id="formation-defebrilateur">

                <div class="planning">
                    <div class="titre-formation">
                    <h3>Formation Defibrilateur</h3>
                    </div>
                </div>
                <div class="formation"></div>

            </div>  


            <div id="formation-geste">
                <div class="planning-geste">
                <div class="titre-formation">
                        <h3>Formation Geste et posture</h3>
                    </div>
                    
                </div>

                <div class="invisible">
                </div>

            </div>
            <div id="formation-mac">

                <div class="planning-mac">
                    <div class="titre-formation">
                    <h3>Formation MAC SST</h3>
                    </div>
                </div>
                <div class="devis">
                    <h4>Devis</h4>
                </div>

            </div>
        </div>
    </main>


    <footer> <?php footer(); ?> </footer>

</body>

</html>