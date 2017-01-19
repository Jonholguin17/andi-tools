
    <?php
							
include_once("assets/google/src/Google_Client.php");
include_once("assets/google/src/contrib/Google_Oauth2Service.php");
include_once("assets/google/includes/Medics.php");

######### edit details ##########
$clientId = '185452406150-qiaao8b2mre5fkl1ne8cbes3jomnag1v.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'jlc898OyXp1k4n6qIlKc2bQ3'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/telemed/index.php?view=newmedicg';  //return url (url to script)

#################################

$gClient2 = new Google_Client();
$gClient2->setApplicationName('Login to Telemed');
$gClient2->setClientId($clientId);
$gClient2->setClientSecret($clientSecret);
$gClient2->setRedirectUri($redirectUrl);

$google_oauthV22 = new Google_Oauth2Service($gClient2);		
		
	?>			
<br><br><br><br><br>
<div class="container">
   
   <div class="row">
    	<div class="col-md-4 col-md-offset-4">
		
		<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Cfreación nuevo médico</h4>
  </div>
  <div class="panel-body">
						<p> Paso 1. Ingrese con su cuenta corporativa de google</p>
						
						<?php

							//print_r($_GET);die;
						
							
							if(isset($_REQUEST['code'])){
								$gClient2->authenticate();
								$_SESSION['token'] = $gClient2->getAccessToken();
								header('Location: ' . filter_var($redirectUrl, FILTER_SANITIZE_URL));
							}

							if (isset($_SESSION['token'])) {
								$gClient2->setAccessToken($_SESSION['token']);
							}

							if ($gClient2->getAccessToken()) {
								$userProfile = $google_oauthV22->userinfo->get();
								//DB Insert
								$gUser2 = new Medics();
								$gUser2->debug_to_console("entro a crear usuario");
								$gUser2->createUser('google',$userProfile['id'],$userProfile['given_name'],$userProfile['family_name'],$userProfile['email'],$userProfile['gender'],$userProfile['locale'],$userProfile['link'],$userProfile['picture']);
								//var_dump($gUser->connect->affected_rows);
								if ($gUser2->connect->affected_rows>0)
								{
								//$_SESSION['google_data'] = $userProfile; // Storing Google User Data in Session
								//print_r($_SESSION);
								//header("location: account.php");
								//$_SESSION['token'] = $gClient->getAccessToken();
								}
								else
								{
									
								 
								
								}

							} else {
								$authUrl = $gClient2->createAuthUrl();
							}
							if(isset($authUrl)) {
								echo '<a href="'.$authUrl.'"><img src="assets/images/glogin.png" alt=""/></a>';
							} else {
								echo '<a href="logout.php?logout">Registro exitoso ID '. $userProfile['email']. ', la cuenta debe ser activada por el administrador</a>';

								
								
	
							}
							?>
						
					
                    </div>
  
</div>  
</div>
</div>
</div>