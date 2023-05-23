<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "osvaldobernardocossa@gmail.com";
    $email_subject = "Message from www.merceariadopovo.com";
 
    function died($error) {
        // your error code can go here
        echo "Lamentamos muito, mas foram encontrados erros com o formulário que enviou. ";
        echo "Esses erros aparecem abaixo.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor, volte e corrija esses erros.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('Lamentamos, mas parece haver um problema com o formulário que enviou.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; // required
    
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'O endereço de e-mail que introduziu não parece ser válido.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'O nome introduzido não parece ser válido.<br />';
  }
 
   
  if(strlen($message) < 1) {
    $error_message .= 'Os comentários inseridos não parecem ser válidos.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Detalhes do formulário abaixo.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<p>Obrigado por nos contactar. Entraremos em contacto consigo muito em breve.</p>
 
<?php
 
}
?>