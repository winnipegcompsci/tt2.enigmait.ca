<div class="wtcrCompetitors index col-lg-10 col-md-9 columns">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-ticket fa-2x"></i><span style="font-size: 2em"> Vendor Products </span>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Ticket Menu <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Create New Ticket</a></li>
                    <li><a href="#">Find Ticket</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Ticket</a></li>
                </ul>
            </div>
        </div>
        
        <div class="panel-body">
            <table id="datatable" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Competitor Name</th>
                    <th>Update Frequency (Hours)</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($wtcrCompetitors as $wtcrCompetitor): ?>
                <tr>
                    <td><?= $this->Number->format($wtcrCompetitor->id) ?></td>
                    <td><?= h($wtcrCompetitor->competitor_name) ?></td>
                    <td><?= $this->Number->format($wtcrCompetitor->update_frequency_hours) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $wtcrCompetitor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wtcrCompetitor->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wtcrCompetitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wtcrCompetitor->id)]) ?>
                    </td>
                </tr>

            <?php endforeach; ?>
            </tbody>
            </table>
        </div>        
    </div>
</div>
