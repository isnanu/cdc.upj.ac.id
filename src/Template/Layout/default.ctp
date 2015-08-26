<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Universitas Pembangunan Jaya Alumni Association';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('upjlogo.png','/img/upjlogo.png',['type' => 'icon']); ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css(['style.css']) ?>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <?= $this->Html->script('npm.js') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container">
          <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6">          
            <?= $this->Html->image('logo2.png') ?>
          </div> 
        </div>
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <?= $this->Html->link('Career Development Center','/pages/about_cdc',['class'=>"navbar-brand"]); ?>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          		<?= $this->element('header'); ?>
            </div>
          </div>
        </nav>
    </header>

    <div class="container" id="container">
        <div id="content">
            <?= $this->Flash->render() ?>            
            	<div class="container col col-xs-12 col-sm-12 col-md-12 col-lg-12" id="content"> 
            		<?= $this->fetch('content') ?>
            	</div>
        </div>
    </div>

  <!-- FOOTER -->
    <footer id="bg-footerTop">      
        <div class="container">
          <div class="container-fluid">
              <div class="row">
                <div class="col-md-4" id="footer1">
                    <p>Universitas Pembangunan Jaya</p>
                    <p>Jl. Boulevard Bintaro, Bintaro Jaya Sektor 7 Tangerang Selatan, Banten, Indonesia.</p> 
                    <p>Telepon : (021)7455555- (021) 29045405 </p>
                </div>
                <div class="col-md-4 col-md-offset-4" id="footer2">
                  <a href="">
                    <?= $this->Html->image('f.png') ?>
                  </a>
                  <a href="">
                    <?= $this->Html->image('t.png') ?>
                  </a>
                  <a href="">
                    <?= $this->Html->image('g.png') ?>
                  </a>
                  <a href="">
                    <?= $this->Html->image('l.png') ?>
                  </a>
                  <a href="">
                    <?= $this->Html->image('p.png') ?>
                  </a>
                </div>
              </div>
          </div>
        </div>
         <div>
            <div class="col col-xs-12 col-sm-1 col-md-1 col-lg-1" id="footer3" style="background-color: green; height:35px"></div>
            <div class="col col-xs-12 col-sm-2 col-md-2 col-lg-2" id="footer3" style="background-color: blue; height:35px"></div>
            <div class="col col-xs-12 col-sm-9 col-md-9 col-lg-9" id="footer3" style="background-color: red; height:35px;"></div>
            <div style="padding-top:7px;padding-left:35%;padding-right:30%;position:absolute;color:white"> 
                <center>&copy; 2015 - Universitas Pembangunan Jaya | All Rights Reserved</center></div>
    </footer>

</body>
</html>
