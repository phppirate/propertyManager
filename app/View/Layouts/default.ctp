<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Property Manager');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="padding-top: 70px; padding-bottom: 100px;">
	<div class="container">
		<div id="header">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php echo $this->Html->link('Property Manager', array('controller' => 'welcome',
                            'action' => 'index'), array('class' => 'navbar-brand')); ?>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <?php if (AuthComponent::user() != null): ?>
                                <?php if (!$this->App->admin()): ?>
                                    <li><?php echo $this->Html->link('Your Properties', array('controller' => 'users',
                                            'action' => 'properties'));?></li>
                                <?php endif; ?>

                                <?php if ($this->App->admin()): ?>

                                    <li><?php echo $this->Html->link('Notes', array('controller' => 'users',
                                            'action' => 'notes')); ?></li>
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">Properties <span
                                                class='caret'></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><?php echo $this->Html->link('All Properties', array('controller' => 'properties',
                                                    'action' => 'index')); ?></li>
                                            <li><?php echo $this->Html->link('My Properties', array('controller' => 'users',
                                                    'action' => 'properties')); ?></li>
                                            <li class="divider"></li>
                                            <li><?php echo $this->Html->link('Add Property', array('controller' => 'properties',
                                                    'action' => 'add')); ?></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">Users <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><?php echo $this->Html->link('All Users', array('controller' => 'users',
                                                    'action' => 'index')); ?></li>
                                            <li class="divider"></li>
                                            <li><?php echo $this->Html->link('Add User', array('controller' => 'users',
                                                    'action' => 'add')); ?></li>
                                        </ul>
                                    </li>

                                <?php endif; ?>

                                <li><?php echo $this->Html->link(__('Log Out'), array('controller' => 'users',
                                        'action' => 'logout'), array('escape' => false)); ?></li>

                            <?php else: ?>

                                <li><?php echo $this->Html->link('Login', array('controller' => 'users',
                                        'action' => 'login')); ?></li>

                            <?php endif; ?>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
		</div>
		<div id="content">

			<?php $result = $this->Session->flash(); if ($result != null): ?>
                <div class="alert alert-info"><?php echo $result; ?></div>
            <?php endif; ?>

			<?php echo $this->fetch('content'); ?>
		</div>
        <div class="footer">
            <div class="center">&copy; 2014 - Property Manager</div>
        </div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
    <?php echo $this->Html->script('jquery'); ?>
    <?php echo $this->Html->script('bootstrap.min'); ?>
    <?php echo $this->Html->script('script'); ?>
</body>
</html>
