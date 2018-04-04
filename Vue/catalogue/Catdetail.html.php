<article>
<header>
<?php foreach ($produits as $produit): ?>
  <?php if ($produit->getImage()) : ?>
  <?php echo '<img class="float-left" src="images/'.$produit->getImage().'" alt="'.$produit->getNom().'" height="80px">'; ?>
  <?php endif; ?>

  <h2><a href="?module=catalogue&action=Proddetail&id=<?php echo $produit->getId(); ?>"><?php echo $produit->getNom(); ?></a></h2>
  <p>
    <?php echo $produit->getContenu(); ?>
  </p>
<?php endforeach; ?>
</header>
</article>
