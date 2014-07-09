<?php echo $this->element('shopnav'); ?>

<div class="page-header">
	<h1>Smartphones</h1>
</div>

<form role="form">
	<div class="row">
		<div class="col-sm-3">
			<div class="form-group">
				<label for="operating-system">Narrow By: </label> <select
					class="form-control" id="operating-system">
					<option>Operating System</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="manufacturer">&nbsp;</label> <select
					class="form-control" id="manufacturer">
					<option>Manufacturer</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
		</div>
		<div class="col-sm-3 col-sm-offset-1">
			<div class="form-group">
				<label for="sort-by">Sort By: </label> <select class="form-control"
					id="sort-by">
					<option>Most Popular</option>
					<option>Newest</option>
					<option>Name</option>
					<option>Lowest Price</option>
					<option>Highest Price</option>
				</select>
			</div>
		</div>
		<div class="col-sm-1">
			<div class="form-group">
				<label for="sort-by">&nbsp;</label>
				<p class="form-control-static">
					<a href="#">Reset</a>
				</p>
			</div>
		</div>
	</div>

</form>
<p>
<?php foreach (array_chunk($phoneList, 3) as $phoneRow) { ?>

<div class="row">
	<?php foreach ($phoneRow as $phone) { ?>
	<div class="col-md-4">

		<div class="media">
			<a class="pull-left" href="#"> <img
				src="<?php echo $phone->picture; ?>" class="img-rounded">
			</a>
			<div class="media-body">
				<h4 class="media-heading">
					<a href="#"><?php echo $phone->name; ?></a>
				</h4>
				<p><?php echo $this->Text->truncate($phone->description, 100); ?></p>
				<p class="text-success"><h3><?php echo $phone->price; ?></h3></p>
				<p>
					<a href="#" class="btn btn-primary">Add to Cart</a>
					<a href="#"  class="btn btn-default">Details</a>
				</p>
			</div>

		</div>
		<hr>
	</div>
	<?php } ?>
</div>
<?php } ?>
</p>