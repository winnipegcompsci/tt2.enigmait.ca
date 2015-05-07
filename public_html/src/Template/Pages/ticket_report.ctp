<?php 

?>


<div class="row">
    <h1>Ticket Report</h1>
</div>


<div class="row">
    <div class="col-lg-2">
        <?php
            echo $this->Form->create(); 
        
            $options = array('created' => 'Tickets Created', 'closed' => 'Tickets Closed', 'open' => 'Open Tickets');
            $attributes = array('legend' => false);
            echo $this->Form->radio('ticketstatus', $options, $attributes);
            
            echo $this->Form->input("Date From:");
            echo $this->Form->input("Date To:");
            echo $this->Form->input('customer_id');
            
            $options = array('summary' => 'Summary', 'detailed' => 'Detailed');
            
            echo $this->Form->radio('detaillevel', $options, $attributes);
           
            $options = array('customer' => 'Customer', 'site' => 'Site');
            echo $this->Form->select('groupby', $options);
        
            $options = array('html' => 'HTML', 'pdf' => 'PDF', 'xls' => 'Excel');
            echo $this->Form->radio('format', $options, $attributes);
        
            echo $this->Form->end('Generate Report');
           
        ?>
    </div>

    <div class="col-lg-10">
    Report Data Goes Here.
    </div>
</div>