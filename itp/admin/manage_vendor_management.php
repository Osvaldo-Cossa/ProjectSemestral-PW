<?php
require('top.inc.php');
isAdmin();
$username='';
$password='';
$email='';
$mobile='';

$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from admin_users where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$username=$row['username'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		$password=$row['password'];
	}else{
		header('location:vendor_management.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$username=get_safe_value($con,$_POST['username']);
	$email=get_safe_value($con,$_POST['email']);
	$mobile=get_safe_value($con,$_POST['mobile']);
	$password=get_safe_value($con,$_POST['password']);
	
	$res=mysqli_query($con,"select * from admin_users where username='$username'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="O nome de utilizador já existe";
			}
		}else{
			$msg="O nome de utilizador já existe";
		}
	}
	
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$update_sql="update admin_users set username='$username',password='$password',email='$email',mobile='$mobile' where id='$id'";
			mysqli_query($con,$update_sql);
		}else{
			mysqli_query($con,"insert into admin_users(username,password,email,mobile,role,status) values('$username','$password','$email','$mobile',1,1)");
		}
		header('location:vendor_management.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Formulário de Gerenciamento de Fornecedores</strong><small> </small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-group">
									<label for="username" class=" form-control-label">Usuário</label>
									<input type="text" name="username" placeholder="Introduza o nome de usuário" class="form-control" required value="<?php echo $username?>">
								</div>
								<div class="form-group">
									<label for="password" class=" form-control-label">Senha</label>
									<input type="text" name="password" placeholder="Introduza a senha" class="form-control" required value="<?php echo $password?>">
								</div>
								
								<div class="form-group">
									<label for="password" class=" form-control-label">Email</label>
									<input type="email" name="email" placeholder="Introduza o email" class="form-control" required value="<?php echo $email?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Telefone</label>
									<input type="text" name="mobile" placeholder="Introduza o telefone" class="form-control" required value="<?php echo $mobile?>">
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submeter</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 
         
<?php
require('footer.inc.php');
?>