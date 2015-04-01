<div class="progress progress-striped active">
<?php 
    if($percent >= 0 && $percent <= 30) {
        $bar_class = "progress-bar-danger";
    } else if($percent > 30 && $percent <= 65) {
        $bar_class = "progress-bar-warning";
    } else if($ticket->completion >= 65) {
        $bar_class = "progress-bar-success";
    }
?>
                    
    <div class="progress-bar <?= $bar_class ?>" role="progressbar" aria-valuenow="<?= $percent ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $percent ?>%">
		<span class=""><?= $percent ?>% Complete</span>
	</div>
</div>