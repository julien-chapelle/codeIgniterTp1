<div class="index_background">
  <div class="container">
    <div class="row pt-2">
      <div class="col-md-12">
        <?= heading($title, 3); ?>
      </div>
    </div>
    <hr />
    <p>Détails de mon compte utilisateur :</p>
    <p><i class='far fa-user mr-2'></i>Nom : <?= $this->auth_user->username ?></p>
    <?php if ($this->auth_user->status == 'A') : ?>
      <p><i class="fas fa-crown mr-2"></i></i>Droit : Admin</p>
    <?php endif ?>
  </div>
</div>