<div>

	<?php foreach ($data as $photo): ?>
		
		<br />

		<img src="<?php echo $GLOBALS['web_root']; ?>/uploads/<?php echo $photo['filePath']; ?>"




	<?php endforeach; ?>

</div>