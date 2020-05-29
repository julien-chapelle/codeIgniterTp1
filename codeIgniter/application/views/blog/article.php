<!-- MODAL DELETE DEBUT -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_delete_article" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Suppression de l'article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body" id="deleteModalContent"></div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL DELETE FIN -->
<!-- MODAL PUBLISH DEBUT -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_publish_article" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel2">Publication de l'article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body" id="publishModalContent"></div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL PUBLISH FIN -->
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <ul class="nav">
                <li class="nav-item mr-2"><?= anchor('blog/index', "Liste articles", ['class' => 'btn btn-outline-warning btn-sm mt-2']) ?></li>
                <?php if ($this->auth_user->is_connected) : ?>
                    <li class="nav-item">
                        <?= anchor(['blog', 'edition', $this->item_detail->id], "Modifier article", ['class' => 'btn btn-outline-warning btn-sm mt-2']) ?>
                    </li class="nav-item mx-2">
                    <?php if ($this->item_detail->status == 'D' || $this->item_detail->status == 'W') : ?>
                        <li class="nav-item mx-2">
                            <?= anchor(['blog', 'publication', $this->item_detail->id], "Publier", ['id' => 'menu_publish_article', 'data-target' => '#modal_publish_article', 'data-toggle' => 'modal', 'class' => 'btn btn-outline-warning btn-sm mt-2']) ?>
                        </li class="nav-item mx-2">
                    <?php endif; ?>
                    <?php if ($this->item_detail->status == 'P' || $this->item_detail->status == 'W') : ?>
                        <li class="nav-item mx-2">
                            <?= anchor(['blog', 'suppression', $this->item_detail->id], "Supprimer", ['id' => 'menu_delete_article', 'data-target' => '#modal_delete_article', 'data-toggle' => 'modal', 'class' => 'btn btn-outline-warning btn-sm mt-2']) ?>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item"><?= anchor('blog/edition', "Nouvel article", ['class' => 'btn btn-outline-warning btn-sm mt-2']) ?></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <?= heading($title, 3); ?>
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
    </div>
</div>