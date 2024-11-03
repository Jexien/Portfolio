<?php
// Détermination de la page actuelle
$current_page = basename($_SERVER['PHP_SELF']);
$background_color = "white"; // Couleur par défaut

// Définition de la couleur d'arrière-plan en fonction de la page
if ($current_page == 'contact.php' || $current_page == 'contactbis.php') {
    $background_color = "#181818";
}else {
    $background_color = "black";
}


echo "<!-- Background color: $background_color -->";
?>

<?php include 'header.php'; ?>

<style>
    :root {
        --background-color: <?= $background_color ?> !important;
    }
    body {
        background-color: var(--background-color) !important;
    }
</style>

<div class="d-flex justify-content-center">
    <h1 class="col-6 my-5 text-center bish1">Formulaire de contact</h1>
</div>
<div class="d-flex justify-content-center">
    <p class="notice col-6 text-center bistxt">Merci pour votre message. Nous avons bien pris en compte votre demande, vous recevrez une confirmation par mail dans les minutes qui viennent.</p>
</div>

<?php include 'footer.php'; ?>