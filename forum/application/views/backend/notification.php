<?php $type_message = $this->session->flashdata('type_message'); if (!empty($type_message)) : ?>
    <div class="alert alert-<?=$this->session->flashdata('type_message')?> alert-dismissible text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?=$this->session->flashdata('message');?>
    </div>
<?php endif; ?>