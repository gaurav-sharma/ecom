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
$cakeDescription = __d ( 'cake_dev', 'Acme' );
$cakeVersion = __d ( 'cake_dev', 'CakePHP %s', Configure::version () )?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?> |
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	echo $this->Html->meta ( 'icon' );
	
	echo $this->Html->css ( 'bootstrap.min' );
	echo $this->Html->css ( 'style' );
	
	echo $this->fetch ( 'meta' );
	echo $this->fetch ( 'css' );
	?>
</head>
<body>

	<div class="container">

		<!-- Static navbar -->
		<div class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>					
					<?php echo $this->Html->link('Acme', '/', array('class' => 'navbar-brand')); ?>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><?php echo $this->Html->link('Home', '/') ?></li>
						<li><?php echo $this->Html->link('Shop', '/cell_phones') ?></li>
						<li><?php echo $this->Html->link('My Account', '/my_account') ?></li>
						<li><?php echo $this->Html->link('Support', '/support') ?></li>
						<li><?php echo $this->Html->link('Why Acme?', '/pages/why_acme') ?></li>
						<li><?php echo $this->Html->link('Coverage', '/coverage') ?></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Cart (0)', '/shop/cart', array('escape' => false)) ?>
							
						</li>

					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
			<!--/.container-fluid -->
		</div>

		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<!-- /container -->



	<script
		src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script
		src="//cdnjs.cloudflare.com/ajax/libs/holder/2.3.1/holder.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min'); ?>
    <?php echo $this->fetch('script'); ?>
</body>
</html>
