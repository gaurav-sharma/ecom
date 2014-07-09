<?php foreach (array_chunk($planList, 3) as $planRow) { ?>
<div class="row">
	<?php foreach ($planRow as $plan) { ?>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="media">
					<a class="pull-left" href="#">
						<img src="<?php echo $plan->picture; ?>" class="img-rounded" alt="140x140">
					</a>
					<div class="media-body">
						<h4 class="media-heading"><a href="#"><?php echo $plan->name; ?></a></h4>
						<p><?php echo $this->Text->truncate($plan->description, 100); ?></p>
						<p><a href="#">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
<?php } ?>