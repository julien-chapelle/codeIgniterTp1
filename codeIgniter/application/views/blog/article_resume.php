<div class="col-md-4">
    <?= heading(htmlentities($title), 2); ?>
    <p>
        <small>
            <?= nice_date($date, 'd/m/Y'); ?>
            -
            <?= $author ?>
            <?php if ($this->auth_user->is_connected) : ?>
                -
                <?= $this->article_status->label[$status]; ?>
            <?php endif; ?>
        </small>
    </p>
    <p><?= nl2br(htmlentities($content)); ?>...</p>
</div>