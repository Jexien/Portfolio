<?php include 'header.php'; ?>

<div class="hero-section">
    <img src="img/Logo FM.png" alt="Mon Logo">
    <h1 class="titre cinzel">Bienvenue</h1>
    <button class="chevron">
        <a href="#ss-titre">
            <img src="img/Chevron_bas btn.png" alt="Chevron Bas" onmouseover="this.src='img/Chevron_bas btn_dark.png'" onmouseout="this.src='img/Chevron_bas btn.png'">
        </a>
    </button>
</div>

<!-- Section Qui je suis avec PHOTO + BENTO -->
<section class="container-fluid qui-je-suis">
    <h2 class="text-center cinzel h2" id="ss-titre">Qui je suis</h2>
    <div class="container">
        <div class="row align-items-center">
            <!-- Colonne de gauche avec l'image et le texte -->
            <div class="col-lg-4">
                <div class="image-placeholder bg-dark">
                    <img src="img/moi.jpg" alt="Moi">
                </div>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Imperdiet proin fermentum leo vel orci porta non pulvinar neque. 
                    Dolor sit amet consectetur adipiscing.
                </p>
            </div>
            <!-- Fin colonne Photo
            Début BENTO -->
            <div class="mobile">
                <div class="center-box">
                    <p class="skill-text2">Compétences </p>
                </div>
            </div>
                     
            <div class="col-lg-8">
                <div class="row g-2">
                    <!-- Première ligne bento -->
                    <div class="row g-2">
                        <div class="col-12 col-lg">
                            <div class="skill-box">
                                <img src="img/adobe.png" alt="Adobe">
                                <p class="skill-text">Suite Adobe</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg">
                            <div class="skill-box">
                                <img src="img/code.png" alt="code">
                                <p class="skill-text">HTML/CSS, JS, PHP</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg">
                            <div class="skill-box">
                                <img src="img/wordpress.webp" alt="Wordpress">
                                <p class="skill-text">WordPress</p>
                            </div>
                        </div>
                    </div>
                    <!-- FIN Première ligne bento -->
    
                    <!-- Deuxième ligne bento -->
                    <div class="row g-2">
                        <div class="col-12 col-lg-3">
                            <div class="skill-box2">
                                <img src="img/figma.webp" alt="Figma">
                                <p class="skill-text">Figma</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg">
                            <div class="center-box desktop">
                                <p class="skill-text2">Mes competences <br> Mes passions</p>
                            </div>
                        </div>
                        <div class="center-box mobile">
                            <p class="skill-text2">Passions</p>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="skill-box2">
                                <img src="img/camera.png" alt="Appareil Photo">
                                <p class="skill-text">Photographie</p>
                            </div>
                        </div>
                    </div>
                    <!-- FIN Deuxième ligne bento -->
    
                    <!-- Troisième ligne bento -->
                    <div class="row g-2">
                        <div class="col-12 col-lg">
                            <div class="skill-box3">
                                <img src="img/C1.webp" alt="Capture One">
                                <p class="skill-text">Capture One</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg">
                            <div class="skill-box3">
                                <img src="img/Blacksmith.png" alt="Icone Forge">
                                <p class="skill-text">Forge & Ebenisterie</p>
                            </div>
                        </div>
    
                        <div class="center-box mobile">
                            <p class="skill-text2">Langues</p>
                        </div>
                        <div class="col-12 col-lg">
                            <div class="skill-box3">
                                <img src="img/Italie.png" alt="Drapeau Italien">
                                <p class="skill-text">Italiano</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg">
                            <div class="skill-box3">
                                <img src="img/Great Britain.png" alt="Drapeau Britanique">
                                <p class="skill-text">English</p>
                            </div>
                        </div>
                    </div>
                    <!-- FIN Troisième ligne bento -->
                </div>
            </div>
    
        <!-- FIN SECTION PHOTO BENTO
            
         Début "Mes travaux" -->
        <section>
            <div class="deco">
                <a href="#travaux">
                    <h2 class="text-center cinzel h2small" id="travaux">Découvrir mes travaux</h2>
                </a>
            </div>

            <div class="container text-center mt-5">
                <div class="row">
                    <!-- Logo et Identité Visuelle -->
                    <div class="col-6">
                        <div class="portfolio-item">
                            <h3 class="portfolio-title" id="Logo">Logos et Identité visuelle</h3>
                            <img src="img/id_logo.png" alt="Logos et Identité visuelle">
                        </div>
                    </div>

                    <!-- Sites web et Maquettes -->
                    <div class="col-6">
                        <div class="portfolio-item">
                            <h3 class="portfolio-title">Sites web et Maquettes</h3>
                            <img src="img/site.png" alt="Sites web et Maquettes">
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <!-- Photographies -->
                    <div class="col-6">
                        <div class="portfolio-item">
                            <a href="photo.php">
                                <h3 class="portfolio-title">Photographies</h3>
                                <img src="img/photo.png" alt="Photographies">
                            </a>
                        </div>
                    </div>

                    <!-- Vidéos -->
                    <div class="col-6">
                        <div class="portfolio-item">
                            <h3 class="portfolio-title">Vidéos</h3>
                            <img src="img/vidéo.png" alt="Vidéos">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Footer -->
    <div class="footer">
        <?php include 'footer.php'; ?>
    </div>
</div>
