<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php  echo $this->Form->create(null, ['type' => 'file']); ?>
        <h4 class="modal-title" id="myModalLabel">Add your logo</h4>
      </div>
      <div class="modal-body">
        <?php 
          echo $this->Form->file('uploadfile.');
       ?>
      </div>
      <div class="modal-footer">
        <?= $this->Form->button('Submit', ['type' => 'submit','class'=>'btn btn-default', 'data-dismiss'=>'modal']); ?>
        <?= $this->Form->end(); ?>
      </div>
    </div>
  </div>
</div>