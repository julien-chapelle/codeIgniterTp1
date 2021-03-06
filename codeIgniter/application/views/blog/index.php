<div class="container">
    <div class="row">
        <div class="col-md-5">
            <ul class="nav nav-pills nav-justified">
                <?php if ($this->auth_user->is_connected) : ?>
                    <li role="presentation"><?= anchor('blog/edition', "Nouvel article", ['class' => 'btn btn-outline-warning btn-sm mt-2']); ?></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="col-md-12 mt-2">
            <?= heading($title, 3); ?>
            <hr />
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
                var_dump($this->pagination->first_url);
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
    <div class="text-center"><?= $this->pagination->create_links(); ?></div>
</div>