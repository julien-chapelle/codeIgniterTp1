<div class="container">
    <div class="row">
        <?= heading($title, 3); ?>
    </div>
    <div class="row">
        <?= form_open('contact', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <?= form_label("Nom&nbsp;:", "name", ['class' => "col-md-2"]) ?>
            <div class="col-md-10 <?= empty(form_error('name')) ? '' : 'has-error' ?>">
                <?= form_input(['name' => "name", 'id' => "name", 'class' => 'form-control border-top-0 border-right-0 rounded-0 border-warning', 'placeholder' => "ex: Jean"], set_value('name')) ?>
                <span class="help-block text_error"><?= form_error('name'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Mail&nbsp;:", "email", ['class' => "col-md-2"]) ?>
            <div class="col-md-10 <?= empty(form_error('email')) ? '' : 'has-error' ?>">
                <?= form_input(['name' => "email", 'id' => "email", 'type' => 'email', 'class' => 'form-control border-top-0 border-right-0 rounded-0 border-warning', 'placeholder' => "ex: exemple@gmail.com"], set_value('email')) ?>
                <span class="help-block text_error"><?= form_error('email'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Confirmer mail&nbsp;:", "email_confirme", ['class' => "col-md-2"]) ?>
            <div class="col-md-10 <?= empty(form_error('email_confirme')) ? '' : 'has-error' ?>">
                <?= form_input(['name' => "email_confirme", 'id' => "email_confirme", 'type' => 'email', 'class' => 'form-control border-top-0 border-right-0 rounded-0 border-warning', 'placeholder' => "ex: exemple@gmail.com"], set_value('email_confirme')) ?>
                <span class="help-block text_error"><?= form_error('email_confirme'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Titre&nbsp;:", "title", ['class' => "col-md-2"]) ?>
            <div class="col-md-10 <?= empty(form_error('title')) ? '' : 'has-error' ?>">
                <?= form_input(['name' => "title", 'id' => "title", 'class' => 'form-control border-top-0 border-right-0 rounded-0 border-warning', 'placeholder' => "ex: Demande d'informations"], set_value('title')) ?>
                <span class="help-block text_error"><?= form_error('title'); ?></span>
            </div>
        </div>
        <div class="form-group">
            <?= form_label("Message&nbsp;:", "message", ['class' => "col-md-2"]) ?>
            <div class="col-md-10 <?= empty(form_error('message')) ? '' : 'has-error' ?>">
                <?= form_textarea(['name' => "message", 'id' => "message", 'class' => 'form-control border-top-0 border-right-0 rounded-0 border-warning', 'placeholder' => "Ecrire votre message..."], set_value('message')) ?>
                <span class="help-block text_error"><?= form_error('message'); ?></span>
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