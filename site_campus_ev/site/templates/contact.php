<?php snippet('head') ?>
<?php snippet('menu') ?>

<div id="contact">	

  <div class="container-fluid page">
  	<div class="row">
  		<div class="col-xs-12">
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
					    	<input class="form-control input-lg" id="name" required placeholder="nom" type="text" name="name">
					    </div>

					    <div class="form-group">
					    	<input class="form-control input-lg" id="mail" required placeholder="Mail" type="email" name="mail">
						</div>

						<div class="form-group">
					    	<input class="form-control input-lg" id="tel" required placeholder="Téléphone" type="tel" name="tel">
					    </div>

					    <div class="form-group">
							<textarea class="form-control input-lg" rows="8" placeholder='message'></textarea>
					    </div>



					    <button type="submit" class="btn btn-effect">Envoyer</button>
					</form>
		  		</div>
		  		<div class="col-xs-5" id="info">
		  			<?php echo $page->text()->kirbytext(); ?>
					</div>	
				</div>
  			</div>
  		</div>
  	

  	</div>	
  </div>
</div>
<?php snippet('footer') ?>