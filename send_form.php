<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "ozielalves7@gmail.com";
     
    $email_subject = "Submissão de Formulário de Contato - Renale";
     
     
    function died($error) {
        // your error code can go here
        echo "Sentimos muito mas o formulário enviado contém erros<br/>";
        echo "Os erros seguintes apareceram:<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor, volte e corrija-os.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('Sentimos muito, parece haver um erro com o formulário enviado');       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'O E-mail informado não parece ser válido.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'O Nome informado não parece ser válido<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'A menssagem não aparenta ser válida.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Detalhes do Formulário abaixo.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Nome: ".clean_string($name)."\n";
    $email_message .= "E-mail: ".clean_string($email_from)."\n";
    $email_message .= "Menssagem: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'De: '.$email_from."\r\n".
'Responda a: '.$email_from."\r\n" .
'Oziel-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
 
<script type="text/javascript">
  window.location="http://renalenefrologia-com.umbler.net/index.php"; 
  alert("Obrigado por nos contatar. Entraremos em contato em breve!")
</script>
 
<?php
}
die();
?>