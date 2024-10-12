<?php
include 'header.php';
?>

<h1 class="h1photo">Parmi les murmures de la nature, l'œil derrière l'appareil capture la danse de la lumière.</h1>


<div class="container py-5">
<div class="gallery-row">
    <!-- 12 images pour la galerie -->
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 1">
    </div>
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 2">
    </div>
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 3">
    </div>
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 4">
    </div>
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 5">
    </div>
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 6">
    </div>
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 7">
    </div>
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 8">
    </div>
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 9">
    </div>
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 10">
    </div>
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 11">
    </div>
    <div class="gallery-item">
        <img src="img/chat3.jpg" class="img-fluid rounded" alt="Photo 12">
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="photoModalLabel">Photo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" class="img-fluid" alt="">
                <p id="modalImageAlt"></p>
            </div>
        </div>
    </div>
</div>

<!-- Bouton pour retourner en haut de la page -->
<a href="#" id="backToTopBtn" class="btn btn-primary" style="position: fixed; bottom: 20px; right: 20px; display: none;">
    Retour en haut
</a>

<script>
    // Afficher le bouton lorsque l'utilisateur fait défiler vers le bas
    window.onscroll = function() {
        var backToTopBtn = document.getElementById('backToTopBtn');
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopBtn.style.display = "block";
        } else {
            backToTopBtn.style.display = "none";
        }
    };
</script>

<!-- Script pour afficher l'image dans la modal -->
<script>
    document.querySelectorAll('.gallery-item img').forEach(img => {
        img.addEventListener('click', function() {
            document.getElementById('modalImage').src = this.src;
            document.getElementById('modalImageAlt').innerText = this.alt; // Affichage du contenu de l'attribut alt
            var photoModal = new bootstrap.Modal(document.getElementById('photoModal'));
            photoModal.show();
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<?php
include 'footer.php';
?>

<!-- PLOP TEST COMMIT 2 -->