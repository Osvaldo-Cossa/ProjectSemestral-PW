<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="utf-8">

	<title>HomePrincipal</title>

	<!-- Font-awesome -->
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css"/>

	<!-- Main stylesheet -->
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	
	

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lobster|Poppins:40,0,700" rel="stylesheet"/>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/fav.png" />

	<!--Contact-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 	
	<meta name="keywords" content="Working Contact Form HTML/PHP " />
	<!--web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'></head>
	<link href='//fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<style>
*{box-sizing:border-box;}

.form_box{width:400px; margin-left:40%;  padding:10px; background-color:white;}
input{padding:5px;  margin-bottom:5px;}
input[type="submit"]{border:none; outline:none; background-color:#679f1b; color:white;}
.heading{background-color:#ac1219; color:white; height:40px; width:100%; line-height:40px; text-align:center;}
.shadow{
  -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);}
.pic{text-align:left; width:33%; float:left;}
</style>

</head>
<body>

	<header id="header">
		
	
		<nav id="myTopNav" class="navtoggle">
			<ul class="header_list">
				<li class="active"><a href="http://localhost:3000/itp/index1.php">Home</a></li>
				<li><a href="it project/aboutus.html">Sobre</a></li>
				<li><a href="shoppingcart2/">Produtos</a></li>
                <li><a href="#">Log in</a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="admin/login.php">Admin</a></li>
                            <li><a href="customer-login/home.php">Cliente</a></li>
                            <li><a href="http://localhost:3000/pro/admin/index.php">Fornecedor</a></li>
                        </ul>
					</div>
                </li>
				<li><a href="customer-login/user-registration.php">Registar-se</a></li>
				<li><a href="#c">Contactos</a></li>
			</ul>
		</nav>
		
	</header>

	<section id="hero-image">
		<div class="hero-text">
			<h1>Mercearia Do Povo</h1>
		</div>

	</section>
	<section>
		<div class="flex-container">
			<div class="flex-item1">
				<div class="content1">
					<h1>Entregamos sempre mais do que o esperado</h1>
						<div class="prap">
						<p>Compre o seu melhor produto</p>
						</div>
				</div>
			</div>
			<div class="flex-item1" id="flex-image">
				<div class="content2">
					<img src="img/g3.jpg" alt="Image">
				</div>
			</div>
		</div>
	</section>
	<section id="c">
	<section class="contact">
		<div class="header">
			<h1>Contacte-nos</h1>
		</div>
		<!---header--->
		<!---main--->
			<div class="main-content">
				<div class="contact-w3">

					<form action="send_form_email.php" method="post">
						<label>Nome</label>
						<input type="text" name="name" placeholder="Introduza o nome" required>
						<div class="row">
							<div class="contact-left-w3">
								<label>Email</label>
									<input type="text" name="email" placeholder="Introduza o email" required>
							</div>
							<div class="contact-right-w3l">
								<label>Telefone</label>
								<input type="text" name="phone" placeholder="Introduza o número" required>
							</div>
							<div class="clear"></div>
						</div>
						<label>Assunto</label>
							<input type="text" name="subject" placeholder="Assunto" required>
						<div class="row1">
							<label>Mensagem</label>
							<textarea placeholder="Mensagem" name="message"></textarea>
						</div>
						<input type="submit" value="Enviar Mensagem">
					</form>
				</div>
			</div>
		<div class="footer-w3-agile">
			<p>POR FAVOR, DEIXE A SUA OPINIÃO</p>
		</div>
		<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "osvaldobernardocossa@gmail.com";
    $email_subject = "Message from xyz";
 
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
<div class="form_box shadow">
 <form method="post" action="feed.php">
 <div class="heading">
 A SUA OPINIÃO É IMPORTANTE
 </div>
 <br/>
 <p>O que pensa sobre a qualidade dos nossos produtos?</p>
 <div>
   <div class="pic">
     <img src="bad.jpg" alt="" width='40' height='40'> <br/>
     <input type="radio" name="quality" value="0"> Péssima
   </div>
   <div class="pic">
     <img src="neutral.jpg" alt="" width='40' height='40'> <br/>
     <input type="radio" name="quality" value="1"> Boa
   </div>
   <div class="pic">
     <img src="good.jpg" alt="" width='40' height='40'> <br/>
     <input type="radio" name="quality" value="2"> Excelente
   </div>
 </div>
 
 <p>Tem alguma sugestão para nós? </p>
 <textarea name=" suggestion" rows="8" cols="40"></textarea>
  <input type="submit" name="submit" value="Enviar">
</form>
 </div>

</section>
</section>


</body>

</html>