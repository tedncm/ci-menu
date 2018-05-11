<?php  $this->load->view('/shared/_page_head'); ?>


<div class="menu">
  <?php $this->load->view('/shared/_nav'); ?>
</div>

<div class="row">
      <?php $this->load->view($subview); ?>
</div>

<?php  $this->load->view('/shared/_page_tail'); ?>