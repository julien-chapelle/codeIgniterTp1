<div class="container">
    <div class="row">
        <?= heading($title, 3); ?>
    </div>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Merci de nous avoir envoyé ce mail. Nous y répondrons dans les meilleurs délais.
    </div>
    <div class="row text-center">
        <?= anchor("index", "Fermer", ['class' => "btn btn-outline-warning"]); ?>
    </div>
</div>