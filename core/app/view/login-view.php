
    <?php
							
include_once("assets/google/src/Google_Client.php");
include_once("assets/google/src/contrib/Google_Oauth2Service.php");
include_once("assets/google/includes/functions.php");

######### edit details ##########
$clientId = '185452406150-qiaao8b2mre5fkl1ne8cbes3jomnag1v.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'jlc898OyXp1k4n6qIlKc2bQ3'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/telemed/index.php?view=login';  //return url (url to script)

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login to Telemed');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);		
		
	?>			

<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}

?>
<br><br><br><br><br>
<div class="container">
<div class="row">
    	<div class="col-md-4 col-md-offset-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Acceder a Andimedic</h4>
  </div>
  
   <div class="panel-body">
						<p> Por favor ingresa con tu cuenta corporativa de Google</p>
						
						<?php

							//print_r($_GET);die;
								
										
							if(isset($_REQUEST['code'])){
								
								echo '<script language="javascript">';
								echo 'alert("if 1")';
								echo '</script>';
								
								$gClient->authenticate();
								$_SESSION['token'] = $gClient->getAccessToken();
								header('Location: ' . filter_var($redirectUrl, FILTER_SANITIZE_URL));
								
							}

							if (isset($_SESSION['token'])) {
								echo '<script language="javascript">';
								echo 'alert("if 2")';
								echo '</script>';
								$gClient->setAccessToken($_SESSION['token']);
							}

							if ($gClient->getAccessToken()) {
								echo '<script language="javascript">';
								echo 'alert("if 3")';
								echo '</script>';
								
								$userProfile = $google_oauthV2->userinfo->get();
							//DB Insert}
							
								$gUser = new Users();
								$gUser->debug_to_console("Hola mundo");
								$gUser->debug_to_console("Ingreso a la validacion");
								$gUser->checkUser('google',$userProfile['id'],$userProfile['given_name'],$userProfile['family_name'],$userProfile['email'],$userProfile['gender'],$userProfile['locale'],$userProfile['link'],$userProfile['picture']);
								//var_dump($gUser->connect->affected_rows);
								if ($gUser->connect->affected_rows>0)
								{
								//$_SESSION['google_data'] = $userProfile; // Storing Google User Data in Session
								$_SESSION['user_id'] = $userProfile['id'];
								//print_r($_SESSION);
								//header("location: account.php");
								//$_SESSION['token'] = $gClient->getAccessToken();
								}
								else
								{
								 
								 header("Location:logout.php?logout");
								}

							} else {
								$authUrl = $gClient->createAuthUrl();
							}

							if(isset($authUrl)) {
								echo '<a href="'.$authUrl.'"><img src="assets/images/glogin.png" alt=""/></a>';
							} else {
								echo '<a href="logout.php?logout">Logout</a>';
							}
							?>
						
					
						<a href="./?view=newmedicg" >
							Crear un nuevo medico
							
						</a> <br>
						<a href="./?view=newuserg" >
							Crear un nuevo administrador
						</a>
                    </div>
	<!--				
  <div class="card-content table-responsive">
  <p> Ingreso administrador</p>
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" name="mail" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion">
						
			    	</fieldset>
			      	</form>
			      	</div>
					-->
					
			      	</div>
		</div>
	</div>
</div>
