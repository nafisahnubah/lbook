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