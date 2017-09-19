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
		<section>
			<div class="row">
			<div class="col s12 m8 offset-m2 grey-text"><p>Nous mettons en place depuis 2016 des ateliers au format "coding goûter" à destination des enfants en région PACA.</p>
			</div>
			<div class="col s12 center-align margin-top"><a class="waves-effect waves-light btn-large"><i class="material-icons">&#xE614;</i>Prochaines dates</a></div>

			</div>
		</section>
		<section class="ressources margin-top">
			<div class="row">
		<div class="col s12 center-align">
				<h2>Ressources</h2>
			</div>
      	 <div id="cards" class="col s12 l10 offset-l1">
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/yellow-scratch.png">
              <span class="card-title grey-text">Scratch</span>
            </div>
            <div class="card-content">
              <p>Logiciel de programmation édité par le MIT Media Lab (en ligne ou à télécharger). Très apprécié par les enfants, il suffit de glisser-déposer des briques d'instructions pour voir ses personnages prendre vie. </p>
            </div>
            <div class="card-action">
              <a href="http://vimeo.com/65583694" target="_blank">Découvrir</a>
              <a href="https://scratch.mit.edu/" target="_blank">Le site</a>
            </div>
          </div>
        </div><!--CARD 1-->
        <div class="col s8 offset-s2  m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/briques-scratch.png">
              <span class="card-title grey-text">Les briques</span>
            </div>
            <div class="card-content">
              <p>Toutes les briques disponibles dans Scratch au format pdf</p>
            </div>
            <div class="card-action">
              <a href="assets/ressources/telechargements/Briques Scratch.pdf" target="_blank">Télécharger</a>
            </div>
          </div>
        </div><!--CARD 2-->
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/purple-scratch.png">
              <span class="card-title">Les mouvements</span>
            </div>
            <div class="card-content">
              <p>Briques et combinaisons de base pour faire bouger les lutins</p>
            </div>
            <div class="card-action">
              <a href="assets/ressources/telechargements/fiche-mouvement-scratc.pdf" target="_blank">Télécharger</a>
            </div>
          </div>
        </div><!--CARD 3-->
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/blue-scratch.png">
              <span class="card-title">Créer son jeu</span>
            </div>
            <div class="card-content">
              <p>Fiche projet pour créer son propre jeu avec Scratch (Trouver son scénario, écrire les règles...). Pour les utilisateurs confirmés de Scratch </p>
            </div>
            <div class="card-action">
              <a href="assets/ressources/telechargements/creer-son-jeu-avec-scratch.pdf" target="_blank">Télécharger</a>
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
              <span class="card-title grey-text">Animer un atelier</span>
            </div>
            <div class="card-content">
              <p>Pour une classe, avec vos enfants, entre amis, découvrez la version française du <a href="http://scratched.gse.harvard.edu/guide/" target="_blank">guide Creative Computing de l’Université de Harvard</a></p>
            </div>
            <div class="card-action">
              <a href="assets/ressources/telechargements/CreativeComputing20140806_FR_ttfrancais.pdf" target="_blank">Télécharger</a>
            </div>
          </div>
        </div><!--CARD 1-->
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/purple-jeu.png">
              <span class="card-title">Jeu : Projet Newton</span>
            </div>
            <div class="card-content">
              <p>Histoire : On récolte des pommes dans un panier. Plus on gagne, plus ça va vite.
Le déplacement du panier se fait avec les flèches du clavier.</p>
            </div>
            <div class="card-action">
              <a href="assets/ressources/telechargements/projet-newton.pdf" target="_blank">Télécharger la fiche</a>
            </div>
          </div>
        </div><!--CARD 2-->
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/blue-jeu.png">
              <span class="card-title">Jeu : Star Shooter</span>
            </div>
            <div class="card-content">
              <p>Histoire : Un vaisseau se trouve dans l'espace au milieu d'une pluie de météorites. Il doit les détruire sans être touché.</p>
            </div>
            <div class="card-action">
              <a href="assets/ressources/telechargements/Star shooter.pdf" target="_blank">Télécharger la fiche</a>
            </div>
          </div>
        </div><!--CARD 3-->
        <div class="col s8 offset-s2 m4 xl3">
          <div class="card">
            <div class="card-image">
              <img src="assets/ressources/yellow-jeu.png">
              <span class="card-title">Jeu : Chase Game</span>
            </div>
            <div class="card-content">
              <p>Histoire : Un hélicoptère se fait poursuivre par une balle. En le faisant voler grâce à la souris, il peut les éviter.</p>
            </div>
            <div class="card-action">
             <a href="assets/ressources/telechargements/Chase Game.pdf" target="_blank">Télécharger la fiche</a>
            </div>
          </div>
        </div><!--CARD 4-->
      </div><!--CARDS 2-->

		</section><!--RESSOURCES-->
		<section id="section-ressources" class="scrollspy">

	 <div class="container">
	 	<div class="row">
      	<div class="col s12 m8 offset-m2 white-text">
        <h2 class="center-align">Autres ressources</h2>
        </div>
        <div class="separator col s2 offset-s5 divider"></div>
        <div class="col s12 center-align">
        	<p class="white-text">
        		 Section en cours. Si vous avez des liens interressants qui pourraient servir aux autres, n'hésitez pas à nous les envoyer.</p>

        </div>
       </div>
      </div>

</section><!--SECTION 2-->
<?php
	include('private/views/contact-form.php');
?>
<?php
	include('private/views/footer.php');
?>

	</body>
