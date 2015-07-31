<!-- Make slider !!! -->

<div id="temoignages">
		
			<div class="slider1">
			<?php foreach(page('temoignages')->children()->limit(3) as $t): ?>
				<div class="slider">
					<div class="temoignage">
					    <i><?php echo $t->texte()->Kirbytext() ?></i><br>
					    <div class="author"><strong><?php echo $t->title() ?></strong></div>
					    <div class="status"><?php echo $t->poste() ?>, <?php echo $t->company() ?></div> 
					    </br>

					    <!-- mettre le lien vers le service lié -->
					    <a href="#" class="btn btn-style">DSP1</a>
				   	</div>
				</div>
			<?php endforeach ?>
			</div>
</div>