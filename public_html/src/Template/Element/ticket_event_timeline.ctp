<?php
    $class = "";
    $BADGES = array("success", "info", "warn", "danger");
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-clock-o fa-fw"></i> Ticket Events
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <ul class="timeline">
            <li class="timeline">
                    <div class="timeline-badge danger">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title"> Problem: </h4>
                        </div>
                        <div class="timeline-body">
                            <p><?php echo $problem; ?></p>
                        </div>
                    </div>
            </li>
        <?php    
            foreach($events as $event) :
                if($class == "") {
                    $class = "timeline-inverted";
                } else {
                    $class = "";
                }
                $badgetype = "info";
        ?>
                <li class="<?php echo $class; ?>">
                    <div class="timeline-badge <?= $badgetype ?>">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title"><?php echo $event->timestamp; ?></h4>
                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> <?= $event->time_taken . " minutes" ?></small></p>
                        </div>
                        <div class="timeline-body">
                            <p><?php echo $event->description; ?></p>
                        </div>
                    </div>
                </li>
            <?php         
                endforeach;
            
                if($solution != "") :
            ?>
                <li class="timeline">
                <div class="timeline-badge success>">
                    <i class="fa fa-check"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title success"> Solution: </h4>
                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> <?= $event->time_taken . " minutes" ?></small></p>
                    </div>
                    <div class="timeline-body">
                        <p><?php echo $solution; ?></p>
                    </div>
                </div>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
