<?php 

?>

<div class="row">
    <h1>Employee Report</h1>
</div>


<div class="row">
    <div class="col-lg-2">
        <?php
            $attributes = array('legend' => false);
            echo $this->Form->input("Time Logged From:");
            echo $this->Form->input("Time Logged To:");
            
            echo $this->Form->label('User');
            echo $this->Form->select('user_id');
            
            echo $this->Form->label('Detail Level:') . "<br />";
            $options = array('summary' => 'Summary', 'detailed' => 'Detailed');
            echo $this->Form->radio('detaillevel', $options, $attributes);
           
        
            echo $this->Form->label('Output Format:') . "<br />";
            $options = array('html' => 'HTML', 'pdf' => 'PDF', 'xls' => 'Excel');
            echo $this->Form->radio('format', $options, $attributes);
        
            echo "<br />";
            echo $this->Form->button('Generate Report');
            echo $this->Form->end();
        ?>
    </div>

    <div class="col-lg-10">
    Report Data Goes Here.
    </div>
</div>