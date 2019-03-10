<!DOCTYPE html>
<html lang="en" dir="ltr" class="bigContainer">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
      mail("nicolas.bouteiller44@hotmail.fr","sujet","message","header");
     ?>
<div class="container">
  <form id="contact" action="https://formspree.io/nicolas.bouteiller44@hotmail.fr" method="POST">
    <h2>Contact</h2>
    <h4>Contactez moi dès aujourd'hui, vous obtiendrez une réponse sous 24 heures !</h4>
    <fieldset>
      <input placeholder="Nom et prénom" type="text" name="name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Adresse e-mail" type="email" name="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Numéro de téléphone" type="tel" name="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Ecrivez votre message ici..." name="content" tabindex="4" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
<script src="main.js"></script>
  </body>
</html>
