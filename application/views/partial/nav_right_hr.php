 
 <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <?php echo img('assets/images/user.jpg');?>
                            </div>
                            <div class="user-info">
                                <div>Jonny <strong>Deen</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>User Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?php echo anchor('user/records','Record User');?>
                            </li>
                            <li>
                                <?php echo anchor('user/adds','Add User');?>
                            </li>
                            <li>
                                <?php echo anchor('user/details','Detail User');?>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                         <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Salary Management<span class="fa arrow"></span></a>
                    
                      <ul class="nav nav-second-level">
                        <li>
                          <?php echo anchor('salary/records','Record Salary');?>
                        </li>
                        <li>
                          <?php echo anchor('salary/adds','Add Salary');?>
                        </li>
                        <li>
                            <?php echo anchor('salary/details','Detail Salary');?>
                        </li>
                      </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Staff Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                          <?php echo anchor('staff/records','Record Staff');?>
                        </li>
                        <li>
                          <?php echo anchor('staff/adds','Add Staff');?>
                        </li>
                        <li>
                            <?php echo anchor('staff/details','Detail Staff');?>
                        </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Atendant Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                              <?php echo anchor('atendant/records','Record Atendant');?>
                            </li>
                          <li>
                              <?php echo anchor('atendant/adds','Add Atendant');?>
                          </li>
                          <li>
                            <?php echo anchor('atendant/details','Detail Atendant');?>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Take Leave Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                          <?php echo anchor('take_leave/records','Record TakeLeave');?>
                        </li>
                        <li>
                          <?php echo anchor('take_leave/adds','Add TakeLeave');?>
                        </li>
                        <li>
                            <?php echo anchor('take_leave/details','Detail TakeLeave');?>
                        </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->