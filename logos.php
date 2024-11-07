<?php include 'header.php'; ?>


<div class="vdt container my-4">
  <div class="row align-items-center">
    <!-- Image à gauche -->
    <div class="col-md-4">
      <img src="img/Logo_Blanc.jpg" alt="Logo Fournil des Alpes" class="img-fluid rounded shadow">
    </div>
    <!-- Texte à droite -->
    <div class="col-md-8">
      <h2 class="project-title">Projet vedette : Le fournil des Alpes (2024)</h2>
      <p class="project-description">
        Le temps d'une matinée, j'ai réalisé ce projet fictif d'identité visuelle pour une boulangerie. Issu d'un délicieux mélange entre le blé et la montagne,
        l'identité visuelle de cette boulangerie évoque la simplicité et l'authenticité des produits artisanaux, en harmonie avec la nature environnante.
        Les lignes épurées et les teintes douces créent une atmosphère chaleureuse, tandis que le logo symbolise un lieu où tradition et qualité se rencontrent
        pour offrir un pain qui respire la générosité de nos montagnes. Ce projet incarne ma capacité à imaginer une identité unique, qui raconte une histoire en un coup d'œil.
      </p>
    </div>
  </div>
</div>
<div class="gallery-bento">
    <figure>
        <img src="img/Deventure.jpg" alt="Deventure">
        <figcaption>Façade de la boulangerie</figcaption>
    </figure>
    <figure>
        <img src="img/Post_Ouverture.jpg" alt="Post Ouverture">
        <figcaption>Annonce d'ouverture</figcaption>
    </figure>
    <figure>
        <img src="img/pain.png" alt="Pain" style="background-color: white;">
        <figcaption>Pain artisanal</figcaption>
    </figure>
    <figure>
        <img src="img/cbok.png" alt="Cbok" style="background-color: white;">
        <figcaption>Carte de visite</figcaption>
    </figure>
    <figure>
        <img src="img/croissant.png" alt="Croissant" style="background-color: white;">
        <figcaption>Croissant frais</figcaption>
    </figure>
    <figure>
        <img src="img/naturel.png" alt="Naturel" style="background-color: white;">
        <figcaption>Produits naturels</figcaption>
    </figure>
</div>

<div id="projectCarousel" class="carousel slide my-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="cafein.php">
                <img src="img/café-03-02.png" class="d-block w-100" alt="Café'in">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Café'in</h5>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <a href="tresor.php">
                <img src="img/trésor d'épices.png" class="d-block w-100" alt="Trésor d'épices">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Trésor d'épices</h5>
                </div>
            </a>
        </div>
        <!-- Add more carousel items here for future projects -->
    </div>
    <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
    </a>
</div>




<?php include 'footer.php'; ?>