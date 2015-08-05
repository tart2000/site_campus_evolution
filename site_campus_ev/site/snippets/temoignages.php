<!-- Make slider !!! -->

<?php $image = page('temoignages')->images()->first()->url(); ?>
<div id="temoignages" style="background-image: url(<?php echo $image ?>);">
		
			<div class="slider1">
			<?php foreach(page('temoignages')->children()->limit(3) as $t): ?>
				<div class="slider">
					<div class="temoignage">
						<i class="fa fa-2x fa-quote-left"></i>
					    <i><?php echo $t->texte()->Kirbytext() ?></i><br>
					    <div class="author"><strong><?php echo $t->title() ?></strong></div>
					    <div class="status"><?php echo $t->poste() ?>, <?php echo $t->company() ?></div> 
					    </br>

					    <!-- mettre le lien vers le service lié -->
	

						    <?php if($t->service() != ""){
							    $pageService = page('services')->find($t->service());
							?>
								<a href="<?php echo $pageService->url(); ?>" class="btn btn-style"><?php echo $pageService->title(); ?></a>
							 <?php }?>

						   

	
				   		<i class="fa fa-2x fa-quote-right"></i>
				   	</div>
				</div>
			<?php endforeach ?>
			</div>
</div>