<p class="alert alert-warning" role="alert">
    Êtes-vous sûr(e) de vouloir publier l'article "<?= $this->item_detail->title ?>" ?
</p>
<?= form_open(uri_string(), ['class' => 'form-horizontal']); ?>
<div class="form-group">
    <p style="text-align : center">
        <?= form_submit('confirm', "Publier", ['class' => "btn btn-outline-warning"]); ?>
        &nbsp;&nbsp;&nbsp;
        <?= anchor(
            ['blog', $this->item_detail->alias . '_' . $this->item_detail->id],
            "Annuler",
            ['id' => 'cancel_delete', 'class' => 'btn btn-outline-warning']
        ) ?>
    </p>
</div>
<?= form_close() ?>