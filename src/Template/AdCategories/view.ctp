<?php 
    $role = $this->request->session()->read('Auth.User.role_id');

    if($role=='1')
    {
        echo $this->element('admin_adscategories');
    }
    else {

        
    }
    
?>
<?php 
    if($role==('1'||'2'||'3'||'4'))
    {
        echo '<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">'; 
    }
    else
    {            
        echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">';
    }
    
?>
    <div class="page-header">
        <h2><?= h($adCategory->name) ?></h2>
    </div>

    <div class="related row">
        <div class="container-fluid">
            <div class="row-fluid">
                <?php if (!empty($adCategory->ads)): ?>
                <?php foreach ($adCategory->ads as $ads): ?>
                <div class="span3 tiny" style="margin:10px 20px 10px 20px">
                    <div class="pricing-table-header-tiny">
                        <h2>Company Name</h2>
                        <h3><?= h($ads->image) ?></h3>
                    </div>
                    <div class="pricing-table-features">
                        <p><strong>Position</strong> <?= h($ads->position) ?></p>
                        <p><strong>Study Program </strong> <?= h($ads->study_program) ?></p>
                        <p><strong>Salary</strong> <?= h($ads->salary) ?></p>
                        <p><strong>Created</strong> <?= h($ads->modified) ?></p>
                    </div>
                    <div class="pricing-table-signup-tiny">
                    <?php 
                        if($role=='1')
                        {
                            echo '<p>';
                            echo $this->Html->link(__('Read More'), ['controller' => 'Ads', 'action' => 'view', $ads->id]);
                            echo '</p>';
                            echo '<p>';
                            echo $this->Html->link(__('Edit'), ['controller' => 'Ads', 'action' => 'edit', $ads->id]);
                            echo '</p>';
                            echo '<p>';
                            echo $this->Form->postLink(__('Delete'), ['controller' => 'Ads', 'action' => 'delete', $ads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ads->id)]);
                            echo '</p>';
                        }
                        else if($role=='2')
                        {            
                            echo '<p>';
                            echo $this->Html->link(__('Read More'), ['controller' => 'Ads', 'action' => 'view', $ads->id]);
                            echo '</p>'; 
                            echo '<p>';
                            echo $this->Html->link(__('Edit'), ['controller' => 'Ads', 'action' => 'edit', $ads->id]);
                            echo '</p>';
                            echo '<p>';
                            echo $this->Form->postLink(__('Delete'), ['controller' => 'Ads', 'action' => 'delete', $ads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ads->id)]);  
                            echo '</p>';
                        }
                         else{
                            echo $this->Html->link(__('Read More'), ['controller' => 'Ads', 'action' => 'view', $ads->id]); 
                         }
                        
                    ?>
                                   <!--  <p><?= $this->Html->link(__('Read More'), ['controller' => 'Ads', 'action' => 'view', $ads->id]) ?></p>
                                    <p><?= $this->Html->link(__('Edit'), ['controller' => 'Ads', 'action' => 'edit', $ads->id]) ?></p>
                                    <p><?= $this->Form->postLink(__('Delete'), ['controller' => 'Ads', 'action' => 'delete', $ads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ads->id)]) ?></p> -->
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div>        
    </div>    
</div>

