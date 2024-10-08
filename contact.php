<?php include 'header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    $to = "thegaldX@gmail.com";
    $subject = "Nouveau contact de " . $name;
    $message = "Nom: " . $name . "\nEmail: " . $email . "\nNuméro de téléphone: " . $phone;
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "<p class='success-message'>Votre message a été envoyé avec succès.</p>";
    } else {
        echo "<p class='error-message'>Échec de l'envoi du message. Veuillez réessayer.</p>";
    }
}
?>

    <div class="form-container">
        <h1>Formulaire de contact</h1>
        <p>Merci de renseigner les champs suivants</p>
        <form method="post" action="">
            <label for="name">Nom*</label>
            <input type="text" id="name" name="name" placeholder="Pierre Durand" required>
            
            <label for="email">Adresse Mail*</label>
            <input type="email" id="email" name="email" placeholder="Pierre.Durand@email.fr" required>
            
            <label for="phone">Numéro de téléphone</label>
            <input type="text" id="phone" name="phone" placeholder="06.08.10.12.14">
            
            <button type="submit">Envoyer le formulaire</button>
        </form>
    </div>

<?php include 'footer.php'; ?>