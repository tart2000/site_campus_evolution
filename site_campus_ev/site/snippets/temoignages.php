<!-- Make slider !!! -->

<div id="temoignages">
	<div class="container-fluid">
		
		<?php foreach(page('temoignages')->children()->limit(3) as $t): ?>
		  <div class="col-sm-6 col-sm-offset-3 temoignage">
		    <i><?php echo $t->texte()->Kirbytext() ?></i><br>

		    <div class="author"><strong><?php echo $t->title() ?></strong></div>
		    <div class="status"><?php echo $t->poste() ?>, <?php echo $t->company() ?></div> 
		    </br>

		    <!-- mettre le lien vers le service lié -->
		    <a href="#" class="btn btn-style">DSP1</a>
			</div>
		<?php endforeach ?>
		
	</div>
</div>