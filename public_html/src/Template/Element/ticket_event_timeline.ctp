<?php
    $class = "";
    $BADGES = array("success", "info", "warn", "danger");
?>

<div class="panel panel-info">
    <div class="panel-heading">
        <i class="fa fa-sellsy fa-2x"></i> <span style="font-size: 2em"> Ticket Events </span>
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i>  <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Add New Event</a></li>
                    <li><a href="#">Edit Ticket</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Ticket</a></li>
                </ul>
        </div>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <ul class="timeline">
            <li class="timeline">
                    <div class="timeline-badge danger">
                        <i class="fa fa-ticket"></i>
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
            $solution_min = 0;
            
            foreach($events as $event) :
                if($class == "") {
                    $class = "timeline-inverted";
                } else {
                    $class = "";
                }
                $icon = "fa-check";
                
                $event_type_id = $event->ticket_event_type_id;
                $badgetype = "info";
                                
                if($event_type_id == 1) {   //  Service
                    $icon = "fa-wrench";
                } else if($event_type_id == 2) { // Informational 
                    $icon = "fa-info";
                } else if($event_type_id == 3) { // Internal
                    $icon = "fa-retweet";
                }
                
                echo "<pre>";
                echo "<br />Description: " . $event->description;
                echo "<br />Solution: " . $solution;
                echo "<br />Is Solution: " . strpos($event->description, $solution) != false ? "TRUE" : "FALSE";
                echo "</pre>";
                
                if(strpos($event->description, $solution) != false) {
                    $icon = "fa-check";
                    $badtype = "success";
                }
                      
                $this_user = isset($names[$event->user_id]) ? $names[$event->user_id] : 'Unknown';
                // echo "<pre>" . print_r($event, TRUE) . "</pre>";    // DEBUG

        ?>
                <li class="<?php echo $class; ?>">
                    <div class="timeline-badge <?= $badgetype ?>">
                        <i class="fa <?= $icon ?>"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title"><?php echo $event->timestamp; ?><span class="pull-right"><?= $this_user; ?></span></h4>
                            <p><small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?= $event->time_taken . " minutes" ?></small></p>
                            
                        </div>
                        <div class="timeline-body">
                            <p><?php echo $event->description; ?></p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i>  <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?= $this->Url->build(['controller' => 'ticket_events', 'action' => 'edit', $event->id]); ?>">Edit Event</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?= $this->Url->build(['controller' => 'ticket_events', 'action' => 'set_solution', $event->id]); ?>">Mark as Solution</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </li>
            <?php
                    $solution_min += $event->time_taken;
                endforeach;
            
                /*
                if($solution != "") :
            ?>
                <li class="timeline">
                <div class="timeline-badge success">
                    <i class="fa fa-check"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title success"> Solution: </h4>
                        <p><small class="text-muted"><i class="fa fa-clock-o"></i><strong class='text-success'> <?= $solution_min . " minutes" ?></strong></small></p>
                    </div>
                    <div class="timeline-body">
                        <p><?php echo $solution; ?></p>                
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i>  <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?= $this->Url->build(['controller' => 'ticket_events', 'action' => 'edit', $event->id]); ?>">Edit Event</a></li>
                                <li><a href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <?php endif; */ ?>
        </ul>
    </div>
</div>
