<?php if (isset($message)): ?>
  <div class="alert alert-warning">
    <?php echo $message; ?>
  </div>
<?php endif; ?>


<form class="" name="recherche" method="POST">
  <div class="col-sm-6">
    <label class="radio-inline"><input type="radio" name="genre" value="Monsieur">M.</label>
    <label class="radio-inline"><input type="radio" name="genre" value="Madame">Mme</label>
    <input class="form-control" type="text" placeholder="Nom" name="nom">
    <input class="form-control" type="email" placeholder="Email" name="email">
    <select class="form-control" name="categorie">
      <option>Categorie</option>
       <?php foreach ($categories as $categorie): ?>
        <option><?php echo $categorie->getNom(); ?></option>
      <?php endforeach; ?>
    </select>
    <textarea class="form-control" name="message" placeholder="Message" rows="8" cols="80"></textarea>
    <button class="btn btn-info" type="reset">Reset</button>
    <button class="btn btn-success" type="submit" name="ok">Envoyer</button>
  </div>
</form>
