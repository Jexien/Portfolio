<?php
include 'header.php';
?>

    <h1 class="h1photo">
        Parmi les murmures de la nature, l'œil derrière l'appareil capture la danse de la lumière.
    </h1>

    <!-- Menu de tri par catégories -->
    <div class="container py-3">
        <select id="categoryFilter" class="form-select" aria-label="Filtrer par catégorie">
            <option value="all">Toutes les catégories</option>
            <option value="astrophoto">Astrophoto</option>
            <option value="paysage">Paysage</option>
            <option value="nature">Nature</option>
            <option value="urbain">Urbain</option>
            <option value="portrait">Portrait</option>
            <option value="vehicule">Véhicule</option>
            <option value="macro">Macro</option>
            <option value="urbex">Urbex</option>
            <option value="autre">Autre</option>
        </select>
    </div>

    <div class="container py-5">
        <div class="gallery-row row rowgallerie" id="gallery">
            <!-- Les images seront ajoutées dynamiquement -->
        </div>

        <!-- Animation de chargement -->
        <div id="loading" class="text-center my-3" style="display: none;">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Chargement...</span>
            </div>
        </div>

        <!-- Bouton pour retourner à l'accueil -->
        <div class="row justify-content-left rowgallerie">
            <a href="index.php" class="btn btn-secondary">
                Retour
            </a>
        </div>
    </div>

    <!-- Modal pour afficher une image en plein écran avec son nom -->
    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="photoModalLabel">Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid" alt="">
                    <p id="modalImageAlt" class="mt-3"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bouton pour retourner en haut de la page -->
    <a href="#" id="backToTopBtn" style="position: fixed; bottom: 20px; right: 20px; display: none;">
        Retour en haut
    </a>

    <script>
        const images = [
            { src: 'img/Photo/orage.jpg', alt: 'Orage', category: 'nature' },
            { src: 'img/Photo/pissenlit.jpg', alt: 'Pissenlit', category: 'nature' },
            { src: 'img/Photo/couchesoleil.jpg', alt: 'Couché de soleil', category: 'paysage' },
            { src: 'img/Photo/chapelle.jpg', alt: 'Chapelle', category: 'urbain' },
            { src: 'img/Photo/graine_pissenlit.jpg', alt: 'Graine de pissenlit', category: 'macro' },
            { src: 'img/Photo/lune.jpg', alt: 'Lune', category: 'astrophoto' },
            { src: 'img/Photo/orgere.jpg', alt: 'Orgère', category: 'paysage' },
            { src: 'img/Photo/mesange.jpg', alt: 'Mésange', category: 'nature' },
            { src: 'img/Photo/chat.jpg', alt: 'Chat', category: 'portrait' },
            { src: 'img/Photo/tikky.jpg', alt: 'Tikky', category: 'portrait' },
            { src: 'img/Photo/marmotte.jpg', alt: 'Marmotte', category: 'nature' },
            { src: 'img/Photo/fleur.jpg', alt: 'Fleur', category: 'macro' },
            { src: 'img/Photo/grenoble.jpg', alt: 'Grenoble', category: 'urbain' },
            { src: 'img/Photo/turin.jpg', alt: 'Turin', category: 'urbain' },
            { src: 'img/Photo/bilbao.jpg', alt: 'Bilbao', category: 'urbain' },
        ];

        let loadedImages = 0;
        const imagesPerLoad = 6;
        const gallery = document.getElementById('gallery');
        const categoryFilter = document.getElementById('categoryFilter');
        const loadingSpinner = document.getElementById('loading');
        const preloadedImages = new Set();

        function preloadImage(src) {
            if (!preloadedImages.has(src)) {
                const img = new Image();
                img.src = src;
                preloadedImages.add(src);
            }
        }

        function loadImages() {
            const fragment = document.createDocumentFragment();
            for (let i = loadedImages; i < loadedImages + imagesPerLoad && i < images.length; i++) {
                const image = images[i];
                preloadImage(image.src);
                const div = document.createElement('div');
                div.classList.add('gallery-item', 'col-md-4');
                div.dataset.category = image.category;
                div.innerHTML = `<img src="${image.src}" alt="${image.alt}" class="img-fluid rounded fade-in" data-bs-toggle="modal" data-bs-target="#photoModal">`;
                fragment.appendChild(div);
            }
            gallery.appendChild(fragment);

            setTimeout(() => {
                document.querySelectorAll('.fade-in').forEach(img => img.classList.add('loaded'));
            }, 100);

            loadedImages += imagesPerLoad;
        }

        function filterImages(category) {
            const items = document.querySelectorAll('.gallery-item');
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function handleInfiniteScroll() {
            if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100) {
                if (loadedImages < images.length) {
                    loadingSpinner.style.display = 'block';
                    setTimeout(() => {
                        loadImages();
                        loadingSpinner.style.display = 'none';
                    }, 500);
                }
            }
        }

        function setupModal() {
            const modalImage = document.getElementById('modalImage');
            const modalImageAlt = document.getElementById('modalImageAlt');

            gallery.addEventListener('click', (e) => {
                if (e.target.tagName === 'IMG') {
                    const img = e.target;
                    modalImage.src = img.src;
                    modalImage.alt = img.alt;
                    modalImageAlt.textContent = img.alt; // Affiche le texte de l'attribut alt
                }
            });
        }

        loadImages();
        setupModal();

        categoryFilter.addEventListener('change', (e) => filterImages(e.target.value));
        window.addEventListener('scroll', handleInfiniteScroll);
        window.onscroll = function () {
            const backToTopBtn = document.getElementById('backToTopBtn');
            backToTopBtn.style.display = document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ? "block" : "none";
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
include 'footer.php';
?>
