<!-- Row Containing Big Buttons Across Top -->
<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-support fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">13</div>
						<div>Support Tickets!</div>
					</div>
				</div>
			</div>
			<a href="<?= $this->Url->build(['controller' => 'Tickets', 'action' => 'index']); ?>">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-tasks fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">12</div>
						<div>Project Tasks!</div>
					</div>
				</div>
			</div>
			<a href="<?= $this->Url->build(['controller' => 'Projects', 'action' => 'index']); ?>">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-shopping-cart fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">124</div>
						<div>New Orders!</div>
					</div>
				</div>
			</div>
			<a href="<?= $this->Url->build(['controller' => 'Orders', 'action' => 'index']); ?>">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-comments fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">26</div>
						<div>Customer Feedback!</div>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	
</div>
<!-- end of Row containing attention buttons -->

<!-- Graph Row -->
<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-bar-chart-o fa-fw"></i> Recent Orders
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3326</td>
                            <td>10/21/2013</td>
                            <td>3:29 PM</td>
                            <td>$321.33</td>
                        </tr>
                        <tr>
                            <td>3325</td>
                            <td>10/21/2013</td>
                            <td>3:20 PM</td>
                            <td>$234.34</td>
                        </tr>
                        <tr>
                            <td>3324</td>
                            <td>10/21/2013</td>
                            <td>3:03 PM</td>
                            <td>$724.17</td>
                        </tr>
                        <tr>
                            <td>3323</td>
                            <td>10/21/2013</td>
                            <td>3:00 PM</td>
                            <td>$23.71</td>
                        </tr>
                        <tr>
                            <td>3322</td>
                            <td>10/21/2013</td>
                            <td>2:49 PM</td>
                            <td>$8345.23</td>
                        </tr>
                        <tr>
                            <td>3321</td>
                            <td>10/21/2013</td>
                            <td>2:23 PM</td>
                            <td>$245.12</td>
                        </tr>
                        <tr>
                            <td>3320</td>
                            <td>10/21/2013</td>
                            <td>2:15 PM</td>
                            <td>$5663.54</td>
                        </tr>
                        <tr>
                            <td>3319</td>
                            <td>10/21/2013</td>
                            <td>2:13 PM</td>
                            <td>$943.45</td>
                        </tr>
                    </tbody>
                </table>
				<a href="#" class="btn btn-default btn-block">View Details</a>
			</div>
			<!-- /.panel-body -->
		</div>
	</div>

	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-bar-chart-o fa-fw"></i> Sales by Marketplace
			</div>
			<div class="panel-body">
				<div id="morris-donut-chart">
                <svg height="342" version="1.1" width="479" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.328125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#0b62a4" d="M239.5,282.5A109,109,0,0,0,342.4220648142984,209.38939361930437" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#0b62a4" stroke="#ffffff" d="M239.5,285.5A112,112,0,0,0,345.25478219450844,210.377175095065L389.16190158776413,225.6877879693554A158.5,158.5,0,0,1,239.5,332Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#3980b5" d="M342.4220648142984,209.38939361930437A109,109,0,0,0,141.72069250765188,125.33147265779414" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#3980b5" stroke="#ffffff" d="M345.25478219450844,210.377175095065A112,112,0,0,0,139.02951890694504,124.00573337314628L92.8310387614778,101.24720898669122A163.5,163.5,0,0,1,393.88309722144754,227.33409042895653Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#679dc6" d="M141.72069250765188,125.33147265779414A109,109,0,0,0,239.46575664063926,282.49999462106564" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#679dc6" stroke="#ffffff" d="M139.02951890694504,124.00573337314628A112,112,0,0,0,239.4648141628587,285.4999944730216L239.45020575725985,331.9999921783386A158.5,158.5,0,0,1,97.31632809598918,103.45677446110433Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="239.5" y="163.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1.6914,0,0,1.6914,-165.5853,-120.6457)" stroke-width="0.5912334352701324"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan></text><text x="239.5" y="183.5" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(2.2708,0,0,2.2708,-304.3646,-223.0313)" stroke-width="0.4403669724770642"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text></svg>
                </div>
				<a href="#" class="btn btn-default btn-block">View All Orders</a>
			</div>
			<!-- /.panel-body -->
		</div>
	</div>
</div>
<!-- /.row for Graphs -->


<!-- Row Containing Chat -->
<div class="row">
	<div class="col-lg-8">
		<?php echo $this->element('chat'); ?>
	</div>
	<!-- /.col-lg-8 -->
	
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-bell fa-fw"></i> Recent Activity
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="list-group">
					<a href="#" class="list-group-item">
						<i class="fa fa-comment fa-fw"></i> New Comment
						<span class="pull-right text-muted small"><em>4 minutes ago</em>
						</span>
					</a>
					<a href="#" class="list-group-item">
						<i class="fa fa-twitter fa-fw"></i> 3 New Followers
						<span class="pull-right text-muted small"><em>12 minutes ago</em>
						</span>
					</a>
					<a href="#" class="list-group-item">
						<i class="fa fa-envelope fa-fw"></i> Message Sent
						<span class="pull-right text-muted small"><em>27 minutes ago</em>
						</span>
					</a>
					<a href="#" class="list-group-item">
						<i class="fa fa-tasks fa-fw"></i> New Task
						<span class="pull-right text-muted small"><em>43 minutes ago</em>
						</span>
					</a>
					<a href="#" class="list-group-item">
						<i class="fa fa-upload fa-fw"></i> Server Rebooted
						<span class="pull-right text-muted small"><em>11:32 AM</em>
						</span>
					</a>
					<a href="#" class="list-group-item">
						<i class="fa fa-bolt fa-fw"></i> Server Crashed!
						<span class="pull-right text-muted small"><em>11:13 AM</em>
						</span>
					</a>
					<a href="#" class="list-group-item">
						<i class="fa fa-warning fa-fw"></i> Server Not Responding
						<span class="pull-right text-muted small"><em>10:57 AM</em>
						</span>
					</a>
					<a href="#" class="list-group-item">
						<i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
						<span class="pull-right text-muted small"><em>9:49 AM</em>
						</span>
					</a>
					<a href="#" class="list-group-item">
						<i class="fa fa-money fa-fw"></i> Payment Received
						<span class="pull-right text-muted small"><em>Yesterday</em>
						</span>
					</a>
				</div>
				<!-- /.list-group -->
				<a href="#" class="btn btn-default btn-block">View All Alerts</a>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->

	</div>	
</div>
<!-- /.row for Notifications / Messages. -->

<div class="modal fade" id="help" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">×</button>
                <h4 class="modal-title" id="myModalLabel">Dashboard</h4>
            </div>

            <div class="modal-body">
                Shows charts, graphs, recent orders, and some other statistical data of high importance.
            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            </div><!-- /.footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div> <!-- /.model-fade -->



<!-- Morris Charts JavaScript -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="../bower_components/raphael/raphael-min.js"></script>
<script src="../bower_components/morrisjs/morris.js"></script>
<script src="../js/morris-data.js"></script>

<script src="../dist/js/sb-admin-2.js"></script>

