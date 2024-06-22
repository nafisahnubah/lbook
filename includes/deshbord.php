			<div class="row-fluid">
				
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<?php
					$action = "SELECT id FROM students WHERE status = 0";
					$result=mysqli_query($conn, $action);
					$count=mysqli_num_rows($result);
					?>
					<div class="number"><?=$count?></div>
					<div class="title">Students</div>
					<div class="footer">
						<a href="#">Active</a>
					</div>	
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<?php
					$action = "SELECT id FROM students WHERE status = 1";
					$result=mysqli_query($conn, $action);
					$count=mysqli_num_rows($result);
					?>
					<div class="number"><?=$count?></div>
					<div class="title">Students</div>
					<div class="footer">
						<a href="#">Inactive</a>
					</div>
				</div>
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					<?php
					$action = "SELECT id FROM students WHERE status = 2";
					$result=mysqli_query($conn, $action);
					$count=mysqli_num_rows($result);
					?>
					<div class="number"><?=$count?></div>
					<div class="title">Students</div>
					<div class="footer">
						<a href="#">Suspended</a>
					</div>
				</div>
				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					<?php
					$action = "SELECT id FROM students";
					$result=mysqli_query($conn, $action);
					$count=mysqli_num_rows($result);
					?>
					<div class="number"><?=$count?></div>
					<div class="title">Students</div>
					<div class="footer">
						<a href="#">Total</a>
					</div>
				</div>	
				
			</div>	

			<div class="row-fluid">
				
				<div class="span3 statbox red" onTablet="span6" onDesktop="span3">
					<?php
					$action = "SELECT id FROM borrowbooks";
					$result=mysqli_query($conn, $action);
					$count=mysqli_num_rows($result);
					?>
					<div class="number"><?=$count?></div>
					<div class="title">Books</div>
					<div class="footer">
						<a href="#">Ordered</a>
					</div>	
				</div>
				<div class="span3 statbox pink" onTablet="span6" onDesktop="span3">
					<?php
					$action = "SELECT id FROM books WHERE status = 0";
					$result=mysqli_query($conn, $action);
					$count=mysqli_num_rows($result);
					?>
					<div class="number"><?=$count?></div>
					<div class="title">Books</div>
					<div class="footer">
						<a href="#">Available</a>
					</div>
				</div>
				<div class="span3 statbox blue orange" onTablet="span6" onDesktop="span3">
					<?php
					$action = "SELECT id FROM books WHERE status = 2";
					$result=mysqli_query($conn, $action);
					$count=mysqli_num_rows($result);
					?>
					<div class="number"><?=$count?></div>
					<div class="title">Books</div>
					<div class="footer">
						<a href="#">Unavailable</a>
					</div>
				</div>
				<div class="span3 statbox greenDark" onTablet="span6" onDesktop="span3">
					<?php
					$action = "SELECT id FROM books";
					$result=mysqli_query($conn, $action);
					$count=mysqli_num_rows($result);
					?>
					<div class="number"><?=$count?></div>
					<div class="title">Books</div>
					<div class="footer">
						<a href="#">Total</a>
					</div>
				</div>	
				
			</div>
			
			<div class="row-fluid hideInIE8 circleStats">
				
				<div class="span3" onTablet="span6" onDesktop="span3">
                	<div class="circleStatsItemBox yellow">
                		<?php
						$action = "SELECT * FROM students WHERE status=0";
						$result=mysqli_query($conn, $action);
						$count=mysqli_num_rows($result);

						$action2 = "SELECT * FROM students";
						$result2=mysqli_query($conn, $action2);
						$count2=mysqli_num_rows($result2);

						$total = bcdiv($count, $count2, 2)*100;
						?>
						<div class="header">Active Students</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="<?=$total?>" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="number"><?=$count?></span>
								<span class="unit">Students</span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?=$count2?></span>
								<span class="unit">Students</span>
							</span>	
						</div>
                	</div>
				</div>

				<div class="span3 noMargin" onTablet="span6" onDesktop="span3">
                	<div class="circleStatsItemBox pink">
						<?php
						$action = "SELECT * FROM borrowbooks WHERE status=1";
						$result=mysqli_query($conn, $action);
						$count=mysqli_num_rows($result);

						$action2 = "SELECT * FROM borrowbooks";
						$result2=mysqli_query($conn, $action2);
						$count2=mysqli_num_rows($result2);

						$total = bcdiv($count, $count2, 2)*100;
						?>
						<div class="header">Borrowed Books</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="<?=$total?>" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="number"><?=$count?></span>
								<span class="unit">Books</span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?=$count2?></span>
								<span class="unit">Books</span>
							</span>	
						</div>
                	</div>
				</div>

				<div class="span3" onTablet="span6" onDesktop="span3">
                	<div class="circleStatsItemBox orange">
						<?php
						$action = "SELECT * FROM books WHERE status=0";
						$result=mysqli_query($conn, $action);
						$count=mysqli_num_rows($result);

						$action2 = "SELECT * FROM books";
						$result2=mysqli_query($conn, $action2);
						$count2=mysqli_num_rows($result2);

						$total = bcdiv($count, $count2, 2)*100;
						?>
						<div class="header">Available Books</div>
						<span class="percent">percent</span>
						<div class="circleStat">
                    		<input type="text" value="<?=$total?>" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="number"><?=$count?></span>
								<span class="unit">Books</span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?=$count2?></span>
								<span class="unit">Books</span>
							</span>	
						</div>                	</div>
				</div>

				<div class="span3" onTablet="span6" onDesktop="span3">
                	<div class="circleStatsItemBox greenLight">
                		<?php
						$action = "SELECT * FROM borrowbooks";
						$result=mysqli_query($conn, $action);
						$count=mysqli_num_rows($result);

						$goal=100;

						$total=$count*100/$goal;
						?>
						<div class="header">Lending Goal</div>
						<span class="percent">percent</span>
                    	<div class="circleStat">
                    		<input type="text" value="<?=$total?>" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="number"><?=$count?></span>
								<span class="unit">Books</span>
							</span>
							<span class="sep"> / </span>
							<span class="value">
								<span class="number"><?=$goal?></span>
								<span class="unit">Books</span>
							</span>	
						</div>
                	</div>
				</div>
						
			</div>		
						
			
			
			<div class="row-fluid">
				
				<div class="box black span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Weekly Stat</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li>
								<a href="#">
									<i class="icon-arrow-up green"></i>                               
									<strong>92</strong>
									New Comments                                    
								</a>
							</li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down red"></i>
							  <strong>15</strong>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus blue"></i>
							  <strong>36</strong>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment yellow"></i>
							  <strong>45</strong>
							  User reviews                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-up green"></i>                               
							  <strong>112</strong>
							  New Comments                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down red"></i>
							  <strong>31</strong>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus blue"></i>
							  <strong>93</strong>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment yellow"></i>
							  <strong>256</strong>
							  User reviews                                    
							</a>
						  </li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box black span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Last Users</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li class="green">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Approved             
							</li>
							<li class="yellow">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Pending                                
							</li>
							<li class="red">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Banned                                  
							</li>
							<li class="blue">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Updated                                 
							</li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white check"></i><span class="break"></span>To Do List</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="todo metro">
							<ul class="todo-list">
								<li class="red">
									<a class="action icon-check-empty" href="#"></a>	
									Windows Phone 8 App 
									<strong>today</strong>
								</li>
								<li class="red">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>today</strong>
								</li>
								<li class="yellow">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>tommorow</strong>
								</li>
								<li class="yellow">
									<a class="action icon-check-empty" href="#"></a>
									Windows Phone 8 App
									<strong>tommorow</strong>
								</li>
								<li class="green">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>this week</strong>
								</li>
								<li class="green">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>this week</strong>
								</li>
								<li class="blue">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>this month</strong>
								</li>
								<li class="blue">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>this month</strong>
								</li>
							</ul>
						</div>	
					</div>
				</div>
			
			</div>
			
			<div class="row-fluid">	

				<a class="quick-button metro yellow span2">
					<i class="icon-group"></i>
					<p>Users</p>
					<span class="badge">237</span>
				</a>
				<a class="quick-button metro red span2">
					<i class="icon-comments-alt"></i>
					<p>Comments</p>
					<span class="badge">46</span>
				</a>
				<a class="quick-button metro blue span2">
					<i class="icon-shopping-cart"></i>
					<p>Orders</p>
					<span class="badge">13</span>
				</a>
				<a class="quick-button metro green span2">
					<i class="icon-barcode"></i>
					<p>Products</p>
				</a>
				<a class="quick-button metro pink span2">
					<i class="icon-envelope"></i>
					<p>Messages</p>
					<span class="badge">88</span>
				</a>
				<a class="quick-button metro black span2">
					<i class="icon-calendar"></i>
					<p>Calendar</p>
				</a>
				
				<div class="clearfix"></div>
								
			</div><!--/row-->