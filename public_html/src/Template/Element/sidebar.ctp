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
                <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'dashboard']);?>"><i class="fa fa-dashboard fa-fw"></i>&nbsp; Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-puzzle-piece fa-fw"></i> Enigma Networks <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'index']); ?>"><i class="fa fa-paperclip fa-fw"></i>&nbsp; Projects</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Tickets', 'action' => 'index']); ?>"><i class="fa fa-life-saver fa-fw"></i>&nbsp; Tickets</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Customers', 'action' => 'index']); ?>"><i class="fa fa-credit-card fa-faw"></i>&nbsp; Customers</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Quotes', 'action' => 'index']); ?>"><i class="fa fa-quote-left"></i>&nbsp; Quotes</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'asterisk', 'action' => 'index']); ?>"><i class="fa fa-quote-left"></i>&nbsp; Asterisk Lookup Tool</a>']);
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>&nbsp; Reports <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'ticket_report']);?>">Ticket Report</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'billing_report']);?>">Billing Report</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'employee_report']);?>">Employee Report</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Management <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>/"><i class="fa fa-cog fa-users"></i>&nbsp; Users</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'UserRoles', 'action' => 'index']); ?>/">&nbsp; User Roles</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'BillingTypes', 'action' => 'index']); ?>/">&nbsp; Billing Types</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'BillingStatuses', 'action' => 'index']); ?>/">&nbsp; Billing Statuses</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'BillingPlanLines', 'action' => 'index']); ?>/">&nbsp; Billing Plan Lines</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'ContactTypes', 'action' => 'index']); ?>/">&nbsp; Contact Types</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'PhoneNumbers', 'action' => 'index']); ?>/">&nbsp; Phone Numbers</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'TicketEventTypes', 'action' => 'index']); ?>/">&nbsp; Ticket Event Types</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'TicketPriorities', 'action' => 'index']); ?>/">&nbsp; Ticket Priorities</a>
                            </li>
                            <li>										
                                <a href="<?php echo $this->Url->build(['controller' => 'ServiceTypes', 'action' => 'index']); ?>/">&nbsp; Ticket Service Types</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'TicketStatuses', 'action' => 'index']); ?>/">&nbsp; Ticket Statuses</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'TicketTypes', 'action' => 'index']); ?>/">&nbsp; Ticket Types</a>
                            </li>
                        </ul>									
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            <li>
                <a href="#"><i class="fa fa-power-off fa-fw"></i> WTCR <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="disabled">
                        <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'under_construction']); ?>"><i class="fa fa-star-half-full fa-fw"></i>&nbsp;Orders</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'WtcrProducts', 'action' => 'index']); ?>"><i class="fa fa-won fa-fw"></i>&nbsp;WTCR Products </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'WtcrInventory', 'action' => 'index']); ?>"><i class="fa fa-list-alt fa-fw"></i>&nbsp;Inventory </a>
                        <!--
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'WtcrInventory', 'action' => 'index']); ?>">Find Product </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'WtcrInventory', 'action' => 'receive_products']); ?>">Receive Products </a>
                            </li>
                        </ul>
                     -->
                    
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'WtcrVendors', 'action' => 'index']); ?>/"><i class="fa fa-suitcase fa-fw"></i>&nbsp;Vendor Products <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'WtcrVendors', 'action' => 'view_vendor_products', 'eprom']); ?>">EPROM Products</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'WtcrVendors', 'action' => 'view_vendor_products', 'longtech']); ?>">Longtech Products</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'WtcrVendors', 'action' => 'view_vendor_products', 'asi']); ?>">ASI Products</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>

                    <li class="disabled">
                        <a href="#"><i class="fa fa-bitcoin fa-fw"></i>&nbsp;Crypto Currency Rates<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li class="disabled">
                                <a href="#">Bitcoin</a>
                            </li>
                            <li class="disabled">
                                <a href="#">Litecoin</a>
                            </li>
                            <li class="disabled">
                                <a href="#">Peercoin</a>
                            </li>
                        </ul>
                    </li>
                    <li class="disabled">
                        <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'under_construction']); ?>"><i class="fa fa-bar-chart-o fa-fw"></i>&nbsp;Reports</a>
                    </li>
                    <li>
                        <a href="settings"><i class="fa fa-cog fa-fw"></i>&nbsp;Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'WtcrProductCategories', 'action' => 'index']); ?>/">&nbsp; Product Categories</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'WtcrVendors', 'action' => 'index']); ?>/">&nbsp; WTCR Vendors</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'WtcrCompetitors', 'action' => 'index']); ?>/">&nbsp; WTCR Competitors</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'WtcrCurrencies', 'action' => 'index']); ?>/">&nbsp; Currencies</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'WtcrCurrencyProviders', 'action' => 'index']); ?>/">&nbsp; Currency Data Providers</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'WtcrMarketplaces', 'action' => 'index']); ?>/">&nbsp; Marketplaces</a>
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