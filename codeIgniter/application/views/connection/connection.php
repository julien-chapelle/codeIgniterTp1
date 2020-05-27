<div class="container">
    <div class="row">
        <?= heading($title, 3); ?>
        <hr />
    </div>
    <div class="row">
        <?= form_open('connection', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10 has-error">
                <span class="help-block text_error"><?= !empty($login_error) ? $login_error : '' ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Nom d'utilisateur&nbsp;:", "username", ['class' => "col-md-10 control-label"]) ?>
            <div class="col-md-10 <?= empty(form_error('username')) ? "" : "has-error" ?>">
                <?= form_input(['name' => "username", 'id' => "username", 'class' => 'form-control border-top-0 border-right-0 rounded-0 border-warning', 'placeholder' => "ex: Jean"], set_value('username')) ?>
                <span class="help-block text_error"><?= form_error('username'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Mot de passe&nbsp;:", "password", ['class' => "col-md-10 control-label"]) ?>
            <div class="col-md-10 <?= empty(form_error('password')) ? "" : "has-error" ?>">
                <?= form_password(['name' => "password", 'id' => "password", 'class' => 'form-control border-top-0 border-right-0 rounded-0 border-warning'], set_value('password')) ?>
                <span class="help-block text_error"><?= form_error('password'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <?= form_submit("send", "Envoyer", ['class' => "btn btn-outline-warning"]); ?>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>