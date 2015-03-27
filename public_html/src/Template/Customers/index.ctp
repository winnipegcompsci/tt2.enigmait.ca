<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Billing Plans'), ['controller' => 'BillingPlans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Plan'), ['controller' => 'BillingPlans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Notes'), ['controller' => 'CustomerNotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Note'), ['controller' => 'CustomerNotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Sites'), ['controller' => 'CustomerSites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Site'), ['controller' => 'CustomerSites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customers index col-lg-10 col-md-9 columns">
    <div class="panel panel-yellow">
        <div class="panel-heading">
            <i class="fa fa-male fa-2x"></i><span style="font-size: 2em"> Customers </span>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i>  <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Create New Ticket</a></li>
                    <li><a href="#">Find Ticket</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Ticket</a></li>
                </ul>
            </div>
        </div>
        
        <div class="panel-body">        
            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('address_id') ?></th>
                    <th><?= $this->Paginator->sort('contact_id') ?></th>
                    <th><?= $this->Paginator->sort('number') ?></th>
                    <th><?= $this->Paginator->sort('billing_plan_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $this->Number->format($customer->id) ?></td>
                    <td><?= h($customer->name) ?></td>
                    <td>
                        <?= $customer->has('address') ? $this->Html->link($customer->address->name, ['controller' => 'Addresses', 'action' => 'view', $customer->address->id]) : '' ?>
                    </td>
                    <td><?= $this->Number->format($customer->contact_id) ?></td>
                    <td><?= h($customer->number) ?></td>
                    <td>
                        <?= $customer->has('billing_plan') ? $this->Html->link($customer->billing_plan->name, ['controller' => 'BillingPlans', 'action' => 'view', $customer->billing_plan->id]) : '' ?>
                    </td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
                    </td>
                </tr>

            <?php endforeach; ?>
            </tbody>
            </table>
        </div> <!-- ./panel-body -->
    </div> <!-- ./panel -->
</div>
