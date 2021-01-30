
<?php if(count($erreurs) > 0): ?>
<div class='erreur'>
<ul>
<?php foreach($erreurs as $erreur): ?>
<li> <?php echo $erreur; ?></li>
<?php endforeach ?>
</ul>
</div>
<?php endif ?>
