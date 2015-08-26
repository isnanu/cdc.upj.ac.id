<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "cdc");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT COUNT(Approval) FROM reg_companies WHERE Approval=0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $unapprove = implode(" ",$row);
    }
}

$menuBar = [
    $this->Html->link('Campus Hiring',
      ['controller' => 'ad_categories', 'action' => 'view', 1]),
    $this->Html->link('Online Recruitment',
      ['controller' => 'ad_categories', 'action' => 'view', 2]),
    $this->Html->link('Job Training',
      ['controller' => 'ad_categories', 'action' => 'view', 4]),
    $this->Html->link('Internship Program',
      ['controller' => 'ad_categories', 'action' => 'view', 3]),
  ];

$login = [
    $this->Html->link(
      'Login',
      '/users/login'
    ),
  ];

$admin = [
    $this->Html->link(
      'My Profile',
      '/users/view/'.$this->request->session()->read('Auth.User.id')
    ), 
    $this->Html->link(
      'Approval'.' '.$this->Html->tag('span',$unapprove,['class'=>'badge']),
      '/reg_companies/',
      ['escape' => FALSE]
    ), 
    $this->Html->link(
      'Edit Profile',
      '/users/edit/'.$this->request->session()->read('Auth.User.id')
    ), 
    $this->Html->link(
      'Ads',
      '/ads/index'
    ), 
    $this->Html->link(
      'Logout',
      '/users/logout'
    ), 

  ];

$loged = [
    $this->Html->link(
      'Create New Ad',
      '/ads/add'
    ), 
    $this->Html->link(
      'My Profile',
      '/users/view/'.$this->request->session()->read('Auth.User.id')
    ), 
    $this->Html->link(
      'Edit Profile',
      '/users/edit/'.$this->request->session()->read('Auth.User.id')
    ), 
    $this->Html->link(
      'Change Password',
      '/users/edit/'.$this->request->session()->read('Auth.User.id')
    ), 
    $this->Html->link(
      'Logout',
      '/users/logout'
    ), 

  ];  
 
if(is_null($this->request->session()->read('Auth.User.username')))
{
  echo $this->Html->nestedList($menuBar,['class' => 'nav navbar-nav']);
  echo $this->Html->nestedList($login,['class' => 'nav navbar-nav navbar-right']); 
}
else if($this->request->session()->read('Auth.User.role_id')=='1')
{            
  echo $this->Html->nestedList($menuBar,['class' => 'nav navbar-nav']);
  echo '<div class="nav navbar-nav navbar-right">';
  echo '<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">'.$this->request->session()->read('Auth.User.username').' '.'<span class="caret"></span></a>';
  echo $this->Html->nestedList($admin,['class' => 'dropdown-menu']);
  echo '</li></div>'; 


// echo $this->Html->nestedList($loged,['class' => 'nav navbar-nav navbar-right']); 
}
else{
  echo $this->Html->nestedList($menuBar,['class' => 'nav navbar-nav']);
  echo '<div class="nav navbar-nav navbar-right">';
  echo '<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">'.$this->request->session()->read('Auth.User.username').' '.'<span class="caret"></span></a>';
  echo $this->Html->nestedList($loged,['class' => 'dropdown-menu']);
  echo '</li></div>'; 
}
?>

