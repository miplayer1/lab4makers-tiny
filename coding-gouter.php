<?php
  require_once('contact.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
<?php
	include('private/views/head.php');
?>		  
  </head>
  <body>
<?php
	include('private/views/nav.php');
?>
		<header>
			<div class="content">
		        <div class="row">
		          <div class="col s12 center-align">
						<img class="responsive-img" src="assets/coding.png" alt="Logo TinySite" width="330px">
		          </div>
		          <div class="col s12 ">
		            <h1 class="center-align">Ateliers ludiques autours du code informatique<br> pour les enfants à partir de 7 ans</h1>
		            <div class="separator col s4 offset-s4 divider"></div>
		          </div>
		
		          <div class="col s12 social center-align">
		            <a href="https://www.facebook.com/labprovence" target="_blank"><img class="responsive-img" src="assets/logo-fb.png" alt="Lien vers facebook"></a>
		            <a href="https://twitter.com/lab_lp" target="_blank"><img class="responsive-img" src="assets/logo-twitter.png" alt="Lien vers twitter"></a>
		            <a href="#contact" ><img class="responsive-img" src="assets/contact.png" alt="envoyer un message"></a>
		          </div>
		        </div>
		      </div>
		</header>
		<section class="ressources">
			<div class="row">
      	 <div id="cards" class="col s12 l10 offset-l1">
        <div class="col s8 offset-s2  m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/briques-scratch.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">Télécharger</a>
            </div>
          </div>
        </div><!--CARD 1-->
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/yellow-scratch.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">Télécharger</a>
            </div>
          </div>
        </div><!--CARD 2--> 
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/purple-scratch.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div><!--CARD 3-->
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/blue-scratch.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div><!--CARD 4-->
      </div>
    </div><!--CARDS 1--> 
       <div class="row">
      	 <div id="cards" class="col s12 l10 offset-l1">
        <div class="col s8 offset-s2  m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/coding.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">Télécharger</a>
            </div>
          </div>
        </div><!--CARD 1-->
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/purple-jeu.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">Télécharger</a>
            </div>
          </div>
        </div><!--CARD 2-->
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/blue-jeu.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div><!--CARD 3-->
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/yellow-jeu.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div><!--CARD 4-->
      </div><!--CARDS 2-->
           		
		</section><!--RESSOURCES-->
<?php
	include('private/views/contact-form.php');
?>
<?php
	include('private/views/footer.php');
?>

	</body>