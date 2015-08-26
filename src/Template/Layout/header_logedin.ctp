<?php
	$menuBar = [
    $this->Html->link('Campus Hiring',''),
    $this->Html->link('Job Vacancy',''),
    $this->Html->link('Job Training',''),
    $this->Html->link('Internship Program',''),
  ];
  echo $this->Html->nestedList($menuBar,['class' => 'nav navbar-nav']);
?>

<?php 
	$login = [
    $this->Html->link(
      'My Profile',
      ''
    ),
  	$this->Html->link(
  		'Logout',
  		'/users/logout'
  	),
  ];
  echo $this->Html->nestedList($login,['class' => 'nav navbar-nav navbar-right']); 
?>