<section id="contact" class="container scrollspy">
	    <div class="col s12">
	      <h2 class="dark-green center-align">Contactez-nous !</h2>
	      <div class="col s12"></div>
	    </div>
	
	  <div class="row">
	    <form class="col s12" action="#contact" method="POST">
	
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">account_circle</i>
	          <input placeholder="John Doe" id="name" name="nom" type="text" class="validate" required>
	          <label for="name">Votre nom</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">email</i>
	          <input placeholder="john.doe@mail.com" id="email" name="email" type="email" class="validate" required>
	          <label for="email">Votre adresse mail</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">subject</i>
	          <input placeholder="Objet de votre message" id="subject" name="objet" type="text" class="validate" required>
	          <label for="subject">Sujet</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">textsms</i>
	          <textarea placeholder="Votre message" id="message" name="message" type="text" class="materialize-textarea" required></textarea>
	          <label for="message">Votre message</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col s12 center-align">
	          <button class="btn waves-effect waves-light cyan darken-3" id="submit" type="submit" name="submit">Envoyer
	            <i class="material-icons right">send</i>
	          </button>
	        </div>
	      </div>
	      <div id="feedback">
	        <?php echo $feedback; ?>
	      </div>
	    </form>
	
	  </div>
	</section><!--SECTION CONTACT FORM-->
	<div class="container">
	<div class="row padding">
              <h2 class="center-align">Nos partenaires et amis</h2>
              <div class=" col s12">
							<span>
              <a href="http://cooldev.xyz" target="_blank"><img class=" padding " src="assets/partenaires/cooldev.png" alt=""></a>
              </span>
              <span>
              <a href="http://mpaw.xyz" target="_blank"><img class=" padding" src="assets/partenaires/mpaw.png" alt=""></a>
              </span>
							<span >
              <a href="http://ecole-eip-galilee.fr/" target="_blank"><img class="padding " src="assets/partenaires/ep83_80.gif" alt=""></a>
              </span>
              <span >
              <a href="https://www.sunfm83.com/" target="_blank"><img class="padding " src="assets/partenaires/sunFM.png" alt=""></a>
              </span>
							<span>
              <a href="http://www.disaneo.fr" target="_blank"><img class=" padding" src="assets/partenaires/disaneo.png" alt=""></a>
              </span>
							<span >
              <a href="https://www.facebook.com/pg/RetroGeeksStyle" target="_blank"><img class=" padding" src="assets/partenaires/retro-geek.png" alt=""></a>
              </span>
						</div>
						</div>
						</div>