<?php if (count($invalid) > 0) : ?>
  <div class="alert alert-danger p-2" role="alert">
  	<?php foreach ($invalid as $invalid) : ?>
			<ul class="m-0">
				<li><small class="m-0"><?php echo $invalid ?></small></li>
			</ul>
  	<?php endforeach ?>
  </div>
<?php endif ?>

<?php if (count($warning) > 0) : ?>
	<div class="alert alert-warning p-2" role="alert">
		<?php foreach ($warning as $warning) : ?>
				<ul class="m-0">
					<li><p class="small m-0"><?php echo $warning ?></p></li>
				</ul>
		<?php endforeach ?>
	</div>
<?php endif ?>

<?php if (count($success) > 0) : ?>
  	<div class="alert alert-success p-2" role="alert">
  		<?php foreach ($success as $success) : ?>
			<ul class="m-0">
				<li><p class="small m-0"><?php echo $success ?></p></li>
			</ul>
  		<?php endforeach ?>
  	</div>
<?php endif ?>

<?php if (count($info) > 0) : ?>
	<div class="alert alert-info p-2" role="alert">
		<?php foreach ($info as $info) : ?>
			<ul class="m-0">
				<li><p class="small m-0"><?php echo $info ?></p></li>
			</ul>
		<?php endforeach ?>
	</div>
<?php endif ?>

