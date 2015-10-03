<?php snippet('head') ?>
<?php snippet('menu') ?>

<div id="contact">	

  <div class="container-fluid">
  	<img src="<?php echo $page->images()->first()->url() ?>" class="img-responsive">
  </div>

  <div class="container">
  	<div class="row">
  		<div class="col-sm-8 col-sm-offset-2 col-xs-12">
  			<div class="row">
				<div class="col-sm-7">
				  	<form action="//formspree.io/rbalay@mevolution.fr" id="form"  method="POST">
				  	
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

					    <input type="hidden" name="_next" value="<?php echo $site->url() ?>" />
					    <input type="hidden" name="_subject" value="Message du site Internet" />
					    <input type="text" name="_gotcha" style="display:none" />

					    <button type="submit" class="btn btn-effect">Envoyer</button>
					</form>
		  		</div>
		  		<div class="col-sm-5 col-xs-12" id="info">
		  			<?php echo $page->text()->kirbytext(); ?>
					</div>	
				</div>
  			</div>
  		</div>
  	

  	</div>	
  </div>
</div>
<?php snippet('footer') ?>