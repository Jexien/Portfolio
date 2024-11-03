<?php
$current_page = basename($_SERVER['PHP_SELF']);
$background_color = "black";

// Couleur en fonction de la page
if ($current_page == 'contact.php' || $current_page == 'contactbis.php') {
    $background_color = "#181818";
}else {
    $background_color = "black";
}

include 'header.php'; ?>

<style>
    :root {
        --background-color: <?= $background_color ?> !important;
    }
    body {
        background-color: var(--background-color) !important;
    }
</style>



<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = htmlspecialchars($_POST['name']);
//     $email = htmlspecialchars($_POST['email']);
//     $phone = htmlspecialchars($_POST['phone']);

//     $to = "thegaldX@gmail.com";
//     $subject = "Nouveau contact de " . $name;
//     $message = "Nom: " . $name . "\nEmail: " . $email . "\nNuméro de téléphone: " . $phone;
//     $headers = "From: " . $email;

//     if (mail($to, $subject, $message, $headers)) {
//         echo "<p class='success-message'>Votre message a été envoyé avec succès.</p>";
//     } else {
//         echo "<p class='error-message'>Échec de l'envoi du message. Veuillez réessayer.</p>";
//     }
// }
?>

<div class="form-container contactpage">
    <div class="d-flex justify-content-center">
        <h1 class="col-6 my-5 text-center">Formulaire de contact</h1>
    </div>
    <div class="d-flex justify-content-center">
        <p class="notice col-6 text-center">Merci de renseigner les champs suivants</p>
    </div>
    <form class="formulaire" method="post" action="">
        <div class="champ">
            <label class="col-3 my-5" for="name">Nom &nbsp;<span>*</span></label>
            <input class="col-6" type="text" id="name" name="name" placeholder="Pierre Durand" required>
        </div>
        <div class="champ">
            <label class="col-3 my-5" for="email">Adresse Mail &nbsp;<span style="color: red;">*</span></label>
            <input class="col-6" type="email" id="email" name="email" placeholder="Pierre.Durand@email.fr" required>
        </div>
        <div class="champ">
            <label class="col-3 my-5" for="phone">Numéro de téléphone</label>
            <input class="col-6" type="text" id="phone" name="phone" placeholder="06.08.10.12.14">
        </div>
    </form>
    <div class="d-flex justify-content-center">
        <button class="form_button col-3" type="submit" formaction="contactbis.php">Envoyer le formulaire</button>
    </div>
    
</div>

<?php include 'footer.php'; ?>