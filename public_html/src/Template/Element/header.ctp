<?php $user = $this->Session->read('Auth.User'); ?>
 
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>

    <a class="navbar-brand" href="<?php 
		echo $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'dashboard']); 
		?>"><i class="fa fa-th-list"></i>&nbsp; TT v2.0</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-envelope fa-fw"></i> Messages  <i class="fa fa-caret-down"></i>
		</a>
		<ul class="dropdown-menu dropdown-messages">
			<?php echo $this->element('chat_header_messages', array('header_messages' => $header_messages)); ?>
			<li>
				<a class="text-center" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'messages']);?>">
					<strong>Read All Messages</strong>
					<i class="fa fa-angle-right"></i>
				</a>
			</li>
		</ul>
		<!-- /.dropdown-messages -->
	</li>
	
	<!-- Turn tasks into element? -->
	<!-- /.dropdown -->
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-tasks fa-fw"></i> My Tickets  <i class="fa fa-caret-down"></i>
		</a>
        
        <?php echo $this->element('my_tickets', array('my_tickets' => $my_tickets)); ?>
		<!-- /.dropdown-tasks -->
	</li>
	<!-- /.dropdown -->
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-bell fa-fw"></i> Notifications  <i class="fa fa-caret-down"></i>
		</a>
		<ul class="dropdown-menu dropdown-alerts">
			<li>
				<a href="#">
					<div>
						<i class="fa fa-comment fa-fw"></i> New Comment
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-twitter fa-fw"></i> 3 New Followers
						<span class="pull-right text-muted small">12 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-envelope fa-fw"></i> Message Sent
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-tasks fa-fw"></i> New Task
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-upload fa-fw"></i> Server Rebooted
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a class="text-center" href="#">
					<strong>See All Notifications</strong>
					<i class="fa fa-angle-right"></i>
				</a>
			</li>
		</ul>
		<!-- /.dropdown-alerts -->
	</li>
	<!-- /.dropdown -->
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-user fa-fw"></i> <?= $user['username'] ?> <i class="fa fa-caret-down"></i>
		</a>
		<ul class="dropdown-menu dropdown-user">
			<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
			</li>
			<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
			</li>
			<li class="divider"></li>
			<li><a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
			</li>
		</ul>
		<!-- /.dropdown-user -->
	</li>
    
    <li class="">
        <a data-toggle="modal" data-target="#help"><i class="fa fa-help fa-fw"></i></a>
    </li>
        
	<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->