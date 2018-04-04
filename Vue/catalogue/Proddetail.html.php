<article>
<header>
  <?php if ($produit->getImage()) : ?>
  <?php echo '<img class="float-left" src="images/'.$produit->getImage().'" alt="'.$produit->getNom().'" height="160px">'; ?>
  <?php endif; ?>
  <h1><?php echo $produit->getNom(); ?></h1>
  <p>
    <?php echo $produit->getContenu(); ?>
  </p>
  <p><strong>Prix TTC : <?php echo $produit->getPrix(); ?>€</strong></p>
  Tags :
  <?php foreach ($tags as $tag) :?>
    <span class="badge badge-warning">
      <a href="?module=catalogue&action=tagdetail&id=<?php echo $tag['id']; ?>">
        <?php echo $tag['titre']; ?>
      </a>
    </span>
  <?php endforeach; ?>
</header>
</article>
