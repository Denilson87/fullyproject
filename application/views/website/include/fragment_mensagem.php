<?php if ($this->session->flashdata('mensagem')) { ?>
    <div class="alert alert-success alert-dismissible fade in" id="mensagem">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <?php echo $this->session->flashdata('mensagem'); ?>
    </div>
<?php } ?>