<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?= heading($title, 3); ?>
            <hr />
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('blog/delete_' . $action); ?>
        </div>
    </div>
</div>