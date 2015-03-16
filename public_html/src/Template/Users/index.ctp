<!-- File: src/Template/Users/index.ctp -->

<div class="container">
    <div class="row">
        <div class="col-md-9">
			<div class="panel panel-default">
                <div class="panel-heading">
                    Users
                </div>
                    <!-- /.panel-heading -->
				<div class="panel-body">
					<div class="dataTable_wrapper">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>ID</th>
									<th>Username</th>
									<th>Role</th>
									<th>Created</th>
									<th>Modified</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($users as $user) { ?>
									<tr>
										<td><?php echo $user->id ?></td>
										<td><?php echo $user->username ?></td>
										<td><?php echo $user->role ?></td>
										<td><?php echo $user->created ?></td>
										<td><?php echo $user->modified ?></td>
										<td>
											<?= $this->Html->link('View', $this->Url->build(['controller' => 'Users', 'action' => 'view', $user->id])); ?>
											<?= $this->Html->link('Edit', $this->Url->build(['controller' => 'Users', 'action' => 'edit', $user->id])); ?>
											<?= $this->Html->postLink('Delete', $this->Url->build(['controller' => 'Users', 'action' => 'delete', $user->id])); ?>
										</td>
									</tr>
								<?php } ?>
							</tbody>				
						</table>
					</div>
				</div>
			</div>
		</div> <!-- End of MD-9 -->
			
	    <div class="col-md-3">
		    <h3> Actions </h3>
			<ul>
				<li> Create New User </li>
				<li> View Roles </li>
				<li> User Reports </li>
			</ul>
		</div>
    </div>
</div>