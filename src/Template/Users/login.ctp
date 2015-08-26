<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
		<div class="account-wall">
				<?= $this->Html->image("account.png", ['alt' => 'account.png','class'=>'profile-img', 'height' => 100, 'width' => 100]); ?>
                <div class="form-signin">
				<?= $this->Flash->render('auth') ?>
				<?= $this->Form->create() ?>
				    <div class="form-group">
				        <?= $this->Form->input('username',['class'=>'form-control', 'placeholder'=>'Username', 'required', 'autofocus', 'label' => '']) ?>
				        <?= $this->Form->input('password',['class'=>'form-control', 'placeholder'=>'Password', 'required', 'autofocus', 'label' => '']) ?>
				    </div>
				<?= $this->Form->button(__('Login'),['class'=>'btn btn-lg btn-primary btn-block','id'=>'loginrad']); ?>
				  <?= $this->Html->link('Create an account','/reg_companies/add',['class'=>'text-center new-account']); ?>
				<?= $this->Form->end() ?>
				</div>				
        </div>	
	</div>
</div>


    
            
            
            
        