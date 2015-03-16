            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Ticket, Invoice, Product">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'dashboard']);?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cogs fa-fw"></i> Enigma <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-paperclip fa-fw"></i>&nbsp; Projects</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-life-saver fa-fw"></i>&nbsp; Tickets</a>
                                </li>
								<li>
									<a href="#"><i class="fa fa-credit-card fa-faw"></i>&nbsp; Customers</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-quote-left"></i>&nbsp; Quotes</a>
								</li>
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>&nbsp; Reports <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Ticket Report</a>
                                        </li>
                                        <li>
                                            <a href="#">Employee Report</a>
                                        </li>
                                        <li>
                                            <a href="#">Billing Report</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
								<li>
									<a href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Management <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
										<li>
											<a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>"><i class="fa fa-cog fa-users"></i>&nbsp; Users</a>
										</li>
									</ul>									
								</li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-power-off fa-fw"></i> WTCR <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
									<a href="#"><i class="fa fa-dollar fa-fw"></i>&nbsp;In-Store POS</a>
								</li>
                                <li>
                                    <a href="#"><i class="fa fa-list-alt fa-fw"></i>&nbsp;Inventory</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-suitcase fa-fw"></i>&nbsp;Vendors <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">EPROM</a>
                                        </li>
                                        <li>
                                            <a href="#">Longtech</a>
                                        </li>
                                        <li>
                                            <a href="#">ASI</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
								<li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>&nbsp;Reports</a>
                                </li>
								<li>
									<a href="#"><i class="fa fa-star-half-full fa-fw"></i>&nbsp;Orders</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-bitcoin fa-fw"></i>&nbsp;CryptoCurrency<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Bitcoin</a>
                                        </li>
                                        <li>
                                            <a href="#">Litecoin</a>
                                        </li>
                                        <li>
                                            <a href="#">Peercoin</a>
                                        </li>
                                    </ul>
								</li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>