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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
            <ul class="nav">
                <li><?php echo $this->Html->link('Home', '/'); ?></li>
                <li><?php echo $this->Html->link('Properties', array('controller' => 'properties', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index')); ?></li>
                <?php if (AuthComponent::user() != null){ ?>
                    <li><?php echo $this->Html->link(AuthComponent::user('username'), array('controller' => 'users', 'action' => 'view', AuthComponent::user('id'))); ?></li>
                    <li><?php echo $this->Html->link('Log Out', array('controller' => 'users', 'action' => 'logout')); ?></li>
                <?php } else { ?>
                    <li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
                <?php } ?>
            </ul>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
