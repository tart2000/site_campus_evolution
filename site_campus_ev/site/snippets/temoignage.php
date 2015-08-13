<div class="temoignage">
	<i class="fa fa-quote-left"></i>
	<?php echo $temoignage->texte(); ?>


	<div class="video">
		<?php 
			if($temoignage->video() != ''){
				if (preg_match("/\b(?:youtu|youtube)\b/i", $temoignage->video())) {
				   echo youtube($temoignage->video(), '100%', 200);
				} else if(preg_match("/\b(?:vimeo)\b/i", $temoignage->video())) {
					echo vimeo($temoignage->video(), '100%', 200);
				}
			}
		?>
	</div>
	<div class="author"><strong><?php echo $temoignage->title(); ?></strong> le <span class="date"><?php echo strftime('%e %B %G', $temoignage->date()) ?></span></div>
	<div class="status"><?php echo $temoignage->poste() ?>, <?php echo $temoignage->company() ?></div>

	

</div>