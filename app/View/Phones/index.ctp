<?php foreach (array_chunk($phoneList, 3) as $phoneRow) { ?>
<div class="row">
	<?php foreach ($phoneRow as $phone) { ?>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="media">
					<a class="pull-left" href="#">
						<img src="<?php echo $phone->picture; ?>" class="img-rounded" alt="140x140">
					</a>
					<div class="media-body">
						<h4 class="media-heading"><a href="#"><?php echo $phone->name; ?></a></h4>
						<p><?php echo $this->Text->truncate($phone->description, 100); ?></p>
						<p><a href="#">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
<?php } ?>