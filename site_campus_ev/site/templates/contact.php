<?php snippet('head') ?>
<?php snippet('menu') ?>

<div id="contact">	

  <div class="container-fluid page">
  	<div class="row">
  		<div class="col-xs-12">

  			<div class="row">
  				<div class="col-xs-10 col-xs-offset-1">
  					<h1>Nous sommes la pour vous...</h1>
  					<h2>Pour réserver votre prochaine formation ou obtenir de plus amples informations, contactez-nous</h2>
  				</div>
  			</div>
  			<div id="map"></div>
  			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.8981254505456!2d2.3454618!3d48.860153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f5cd698fd%3A0xe26dbd54eb06e7ec!2s34+Rue+des+Bourdonnais%2C+75001+Paris%2C+France!5e0!3m2!1sfr!2sca!4v1440599887417" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> -->
  		</div>
  	</div>
  </div>

  <div class="container">
  	<div class="row">
  		<div class="col-xs-8 col-xs-offset-2">
  			<div class="row">
				<div class="col-xs-7">
				  	<form action="//formspree.io/leymiris@gmal.com" id="form"  method="POST">
				  	
				  		<div class="form-group">
				  			<label for="name" >Nom</label>
					    	<input class="form-control" id="name" required placeholder="nom" type="text" name="name">
					    </div>

					    <div class="form-group">
				  			<label for="mail" >Mail</label>
					    	<input class="form-control" id="mail" required placeholder="nom" type="email" name="mail">
						</div>

						<div class="form-group">
							<label for="tel" >Téléphone</label>
					    	<input class="form-control" id="tel" required placeholder="nom" type="tel" name="tel">
					    </div>

					    <div class="form-group">
							<label for="tel" >Message</label>
							<textarea class="form-control" rows="8"></textarea>
					    </div>



					    <button type="submit" class="btn btn-effect">Envoyer</button>
					</form>
		  		</div>
		  		<div class="col-xs-5" id="info">
					<strong>Tel :</strong> Raphaël Balay 06 13 68 1425 <br>
					<strong>Tel :</strong> Marc Rousse 06 88 53 75 85 <br>
					<strong>Mail :</strong> <a href="mailto:contact@mevolution.fr">contact@mevolution.fr</a> <br>
				</div>
  			</div>
  		</div>
  	

  	</div>	
  </div>
</div>
<?php snippet('footer') ?>