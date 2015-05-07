<?php 

?>


<div class="row">
    <h1>Billing Report</h1>
</div>


<div class="row">
    <div class="col-lg-2 pull-right">
        <?php
            echo $this->Form->create(); 
        
            $options = array('created' => 'Tickets Created', 'closed' => 'Tickets Closed', 'open' => 'Open Tickets');
            $attributes = array('legend' => false);

            $options = array(
                'open' => 'Open Tickets',
                'ready' => 'Ready to Bill',
                'billed' => 'Billed',
                'overdue' => 'Overdue',
                'paid' => 'Paid',
            );
            echo $this->Form->label('Billing Statuses');
            echo $this->Form->select('billingstatus', $options);
            
            
            $options = array(
                'std_contract' => 'Contract - Standard',
                'emerg_ontract' => 'Contract - Emergency',
                'std_hourly' => 'Hourly - Standard',
                'emerg_hourly' => 'Hourly - Emergency',
            );
            echo $this->Form->label('Service Types');
            echo $this->Form->select('servicetypes', $options);
            
            $options = array(
                'hardware' => 'Hardware', 
                'software' => 'Software', 
                'network' => 'Network',
                'website' => 'Website',
                'phone' => 'Phone',
            );
            echo $this->Form->label('Problem Types');
            echo $this->Form->select('problemtypes', $options);          
            
            echo $this->Form->input("Date From:");
            echo $this->Form->input("Date To:");
            
            echo $this->Form->label('Customer:');
            echo $this->Form->select('customer_id');
            
            echo $this->Form->label('Detail Level:');
            $options = array('summary' => 'Summary', 'detailed' => 'Detailed');
            echo $this->Form->radio('detaillevel', $options, $attributes);
           
            echo $this->Form->label('Group By:');
            $options = array('customer' => 'Customer', 'site' => 'Site');
            echo $this->Form->select('groupby', $options);
        
            echo $this->Form->label('Output Format:');
            $options = array('html' => 'HTML', 'pdf' => 'PDF', 'xls' => 'Excel');
            echo $this->Form->radio('format', $options, $attributes);
        
            echo $this->Form->button('Generate Report');
            echo $this->Form->end();
           
        ?>
    </div>

    <div class="col-lg-10">
    Report Data Goes Here.
    </div>
</div>