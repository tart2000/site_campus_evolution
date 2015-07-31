<!-- Make slider !!! -->

  <?php foreach(page('temoignages')->children()->limit(3) as $t): ?>

    <i><?php echo $t->texte()->Kirbytext() ?></i>
    <strong><?php echo $t->title() ?></strong>
    <?php echo $t->poste() ?>, <?php echo $t->company() ?>
    </br>

    <!-- mettre le lien vers le service lié -->
    <a href="#" class="btn btn-style">DSP1</a>

  <?php endforeach ?>
