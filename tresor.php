<?php
include 'header.php';
?>



    <div class="vdt container my-4">
        <div class="row align-items-center">
            <!-- Image à gauche -->
            <div class="col-md-4">
                <img src="img/trésorepices.png" alt="Mockup maquette ACS" class="img-fluid rounded shadow">
            </div>
            <!-- Texte à droite -->
            <div class="col-md-8">
                <h2 class="project-title">Trésor d'épices (2024)</h2>
                <p class="project-description">
                La charte graphique de Trésor d'Épices reflète l'essence d'une marque sophistiquée et chaleureuse, dédiée à l'univers des épices haut de gamme.
                Elle s'articule autour d'une palette de couleurs terreuses et dorées, symbolisant la richesse, l'authenticité, et l'exotisme des épices. Le logo, 
                une composition élégante et minimaliste, évoque subtilement un bol rempli de trésors aromatiques, avec une pointe d'orange qui rappelle le dynamisme 
                et la chaleur des saveurs orientales.
             Les différentes déclinaisons de la charte permettent une utilisation polyvalente sur fond clair ou sombre, assurant une adaptabilité à divers supports, 
             qu'ils soient imprimés ou numériques. La typographie choisie, à la fois classique et moderne, renforce le positionnement premium de la marque, tout en 
             restant lisible et accessible.
             En résumé, cette charte est un outil puissant pour renforcer l'identité visuelle de Trésor d'Épices, séduire une clientèle en quête d'authenticité et 
             d'élégance, et instaurer une forte reconnaissance de marque.
                </p>
            </div>
        </div>
    </div>
    <div>
            <a href="logos.php" class="btn btn-primary">Retour</a>
    </div>

    <?php
    $projects = [
            'cafein.php' => 'Café\'in'
            // Add more projects here as needed
    ];

    $randomProject = array_rand($projects);
    ?>

    <div class="container my-4">
            <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card">
                                    <a href="<?php echo $randomProject; ?>" class="stretched-link"></a>
                                    <div class="card-body">
                                            <h5 class="card-title">Voir aussi</h5>
                                            <p class="card-text">Découvrez également le projet <strong><?php echo $projects[$randomProject]; ?></strong>.</p>
                                            <img src="img/<?php echo pathinfo($randomProject, PATHINFO_FILENAME); ?>.png" alt="<?php echo $projects[$randomProject]; ?>" class="img-fluid rounded shadow">
                                    </div>
                            </div>
                    </div>
            </div>
    </div>


<?php
include 'footer.php';
?>