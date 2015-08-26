<?php  
	echo $this->Form->create(null, ['type' => 'file']);
	echo $this->Form->file('uploadfile.');
	echo $this->Form->button('Submit', ['type' => 'submit','class'=>'btn btn-default', 'data-dismiss'=>'modal', 'action'=>'upload']); 
    echo $this->Form->end(); 
?>