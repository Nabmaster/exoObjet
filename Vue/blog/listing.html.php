<?php foreach ($articles as $article): ?>
  <h3> <a href="?module=blog&action=detail&id=<?php echo $article->getId(); ?>"><?php echo $article->getTitre(); ?></a></h3>
  <p><?php echo $article->getExtrait($article->getContenu()); ?></p>
  <p><?php echo 'Posté le : ' . $article->dateLocale();//on utilise la methode format de DateTime ?></p>
<?php endforeach; ?>
