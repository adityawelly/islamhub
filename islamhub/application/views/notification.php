<?php $type_message = $this->session->flashdata('type_message'); if (!empty($type_message)) : ?>
    <div class="alert alert-<?=$this->session->flashdata('type_message')?> alert-with-icon" data-notify="container">
        <i class="material-icons" data-notify="icon">notifications</i>
        <button type="button" aria-hidden="true" class="close">
            <i class="material-icons">close</i>
        </button>
        <span data-notify="message"><?=$this->session->flashdata('message');?></span>
    </div>
<?php endif; ?>