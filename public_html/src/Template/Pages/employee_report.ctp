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
            
            echo $this->Form->input('user_id');
            
            echo $this->Form->label('Detail Level:');
            $options = array('summary' => 'Summary', 'detailed' => 'Detailed');
            echo $this->Form->radio('detaillevel', $options, $attributes);
           
        
            echo $this->Form->label('Output Format:');
            $options = array('html' => 'HTML', 'pdf' => 'PDF', 'xls' => 'Excel');
            echo $this->Form->radio('format', $options, $attributes);
        
            echo $this->Form->button('Generate Report');
            echo $this->Form->end();
        ?>
    </div>

    <div class="col-lg-10" style="border: solid 1px black">
    Report Data Goes Here.
    </div>
</div>