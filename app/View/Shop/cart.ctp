<div class="row">
	<div class="col-md-8">
		<h2>Your Shopping Cart</h2>
		<p>Review your cart below. If you need to make changes, you can. When you're finished, select the Continue button to checkout.</p>
		
		<h3>Service Plan</h3>
		<p>You have not selected a plan.</p>
		<?php echo $this->Html->link('Choose a plan', '/cell_phones/plans_and_features', array('class' => 'btn btn-primary btn-lg')); ?>
		<hr>
		
		<h3>Device</h3>
		<p>You have not selected a device.</p>
		<?php echo $this->Html->link('Choose a device', '/cell_phones/smartphones', array('class' => 'btn btn-primary btn-lg')); ?>
		<hr>
		
		<h3>Accessories</h3>
		<p>You have not selected any accessories.</p>
		<?php echo $this->Html->link('Shop Accessories', '/cell_phones/accessories', array('class' => 'btn btn-primary btn-lg')); ?>
		
	</div>
	<div class="col-md-4">
	
		<div class="well hidden-sm" id="cart-summary" data-spy="affix" data-offset-top="60">			
			<div class="page-header">
				<h3>Shopping Cart</h3>
			</div>
			<p>Your cart is empty</p>
		</div>
	</div>

</div>