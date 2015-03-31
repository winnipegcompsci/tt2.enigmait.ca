<div class="actions columns col-lg-2 col-md-3 pull-right">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Statuses'), ['controller' => 'ProjectStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Status'), ['controller' => 'ProjectStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="projects index col-lg-10 col-md-9 columns">
    <div class="panel panel-green">
        <div class="panel-heading">
            <i class="fa fa-tasks fa-2x"></i><span style="font-size: 2em"> Projects </span>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">Project Menu <i class="fa fa-gear"></i>  <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Create New Project</a></li>
                    <li><a href="#">Find Project</a></li>
                    <li class="divider"></li>
                    <li><a href="">Delete Project</a></li>
                </ul>
            </div>
        </div> <!-- ./heading -->
        
        <div class="panel-body">
            <table id="datatable" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date Created</th>
                        <th><?= $this->Paginator->sort('project_status_id') ?></th>
                        <th><?= $this->Paginator->sort('max_hours') ?></th>
                        <th><?= $this->Paginator->sort('quoted_hours') ?></th>
                        <th><?= $this->Paginator->sort('due_date') ?></th>
                        <th><?= $this->Paginator->sort('quote_id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($projects as $project): ?>
                    <tr>
                        <td><?= $this->Number->format($project->id) ?></td>
                        <td><?= h($project->date_created) ?></td>
                        <td><?= $project->has('project_status') ? $this->Html->link($project->project_status->name, ['controller' => 'ProjectStatuses', 'action' => 'view', $project->project_status->id]) : '' ?></td> 
                        <td><?= $this->Number->format($project->max_hours) ?></td>
                        <td><?= $this->Number->format($project->quoted_hours) ?></td>
                        <td><?= h($project->due_date) ?></td>
                        <td>
                            <?= $project->has('quote') ? $this->Html->link($project->quote->name, ['controller' => 'Quotes', 'action' => 'view', $project->quote->id]) : '' ?>
                        </td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!-- ./panel-body -->
    </div> <!-- ./panel -->
</div> <!-- ./column -->
