<?php
$emailError = $adresseError = $messageError = '';
$email = $adresse = $message = ''; 
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $adresse = $_POST['adresse'];
  $message = $_POST['message'];
  if (empty($_POST['email']) === true && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
  {
      $emailError = '<br/>Erreur: l\'adresse email n\' est pas valide';
  }
  if (empty($_POST['adresse']) === true )
  {
    $adresseError = '<br />Erreur vous n\' avez pas rentrer d\'adresse';
  }
  if (empty($_POST['message']) === true)
  {
    $messageError = '<br />Erreur vous n\' avez pas rentrer de message';
  }
}
?>   
    
    
        
    <h2>- REJOINS-NOUS -</h2>
    <form id="contact" action="index.php" method="post">
      <fieldset>
        <input placeholder="E-mail" type="text" tabindex="1" name="email" value="<?php echo $email; ?>" required autofocus>
        <?php echo $emailError; ?>
      </fieldset>
      <fieldset>
        <input placeholder="Adresse" type="text" tabindex="2" name="adresse" value="<?php echo $adresse; ?>" required>
        <?php echo $adresseError; ?>
      </fieldset>
      <fieldset>
            <textarea name="message" rows="10" cols="60" name="message" value="<?php echo $message; ?>" required></textarea> 
            <?php echo $messageError; ?>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit"><p>Envoyer</p></button>
      </fieldset>
    </form>