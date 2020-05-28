<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?= heading($title, 3); ?>
            <hr />
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <ul class="nav nav-pills nav-justified">
                <?php if ($this->auth_user->is_connected) : ?>
                    <li role="presentation"><?= anchor('blog/edition', "Nouvel article", ['class' => 'btn btn-outline-warning mb-2']); ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <p class="text-right">
                Nombre d'articles : <?= $this->item->num_items; ?>
            </p>
        </div>
    </div>
    <div class="row">
        <?php if ($this->item->has_items) : ?>
            <?php
            foreach ($this->item->items as $article) {
                $this->load->view('blog/article_resume', $article);
            }
            ?>
        <?php else : ?>
            <div class="col-md-12">
                <p class="alert alert-warning" role="alert">
                    Il n'y a encore aucun article.
                </p>
            </div>
        <?php endif; ?>
    </div>
</div>