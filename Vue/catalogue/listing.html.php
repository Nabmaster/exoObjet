<?php foreach ($categories as $categorie): ?>
  <h3><a href="?module=catalogue&action=Catdetail&id=<?php echo $categorie->getId(); ?>"><?php echo $categorie->getNom(); ?></a></h3>
<?php endforeach; ?>
