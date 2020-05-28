<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Suppression de l'article</h4>
            </div>
            <div class="modal-body">
                <div class="modal-body" id="deleteModalContent"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <?= heading($title); ?>
                    <p>
                        <small>
                            <?= nice_date($this->item_detail->date, 'd/m/Y'); ?>
                            -
                            <?= $this->item_detail->author ?>
                            <?php if ($this->auth_user->is_connected) : ?>
                                -
                                <?= $this->article_status->label[$this->item_detail->status]; ?>
                            <?php endif; ?>
                        </small>
                    </p>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= nl2br(htmlentities($this->item_detail->content)); ?>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked">
                <li><?= anchor('blog/index', "Liste articles") ?></li>
                <?php if ($this->auth_user->is_connected) : ?>
                    <li>
                        <?= anchor(['blog', 'edition', $this->item_detail->id], "Modifier article") ?>
                    </li>
                    <li>
                        <?= anchor(['blog', 'suppression', $this->item_detail->id], "Supprimer", ['data-target' => 'menu_delete_article']) ?>
                    </li>
                    <li><?= anchor('blog/edition', "Nouvel article") ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>