<header>
        <div class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                       <?php
			      $pageName = basename($_SERVER['PHP_SELF']);
			        if($pageName == "index.php") {
			            echo "<li class='active'><a href='index.php'><font color='black'>Home</font></a></li>";
                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                        echo "<li  class='dropdown'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Services<span class='caret'></span></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'>Trading</a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li><a href='contact.php'><font color='black'>Contact</font></a></li>";
			        }
			        else if($pageName == "aboutus.php") {
			            echo "<li><a href='index.php'>Home</a></li>";
                        echo "<li class='active'><a href='aboutus.php'>About Us</a></li>";
                        echo "<li  class='dropdown'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Services<span class='caret'></span></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'>Trading</a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li><a href='contact.php'>Contact</a></li>";
			        }
			         else if($pageName == "trading.php" || $pageName == "priceriskmgmt.php") {
			            echo "<li><a href='index.php'>Home</a></li>";
                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                        echo "<li class='dropdown active'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Services<span class='caret'></span></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'>Trading</a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li><a href='contact.php'>Contact</a></li>";
			        }
			         else if($pageName == "contact.php") {
			            echo "<li><a href='index.php'>Home</a></li>";
                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                        echo "<li  class='dropdown'><a href='#' data-toggle='dropdown' class='dropdown-toggle'>Services<span class='caret'></span></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'>Trading</a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li class='active'><a href='contact.php'>Contact</a></li>";
			        }
				?>
                    </ul>
                </div>
            </div>
        </div>
		
		
<div class="navbar-wrapper">
            <div class="container-fluid">
                <nav class="navbar navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"/></a>
                            
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
						
						  <ul class="nav navbar-nav">
                        <?php
			      $pageName = basename($_SERVER['PHP_SELF']);
			        if($pageName == "index.php") {
			            echo "<li class='active'><a href='index.php'><font color='black'>Home</font></a></li>";
                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                        echo "<li  class='dropdown'><a href='#' class='dropdown-toggle active' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Services<span class='caret'></span></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'>Trading</a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li><a href='contact.php'>Contact</a></li>";
			        }
			        else if($pageName == "aboutus.php") {
			            echo "<li><a href='index.php'>Home</a></li>";
                        echo "<li class='active'><a href='aboutus.php'><font color='black'>About Us</font></a></li>";
                        echo "<li  class='dropdown'><a href='#' class='dropdown-toggle active' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Services<span class='caret'></span></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'>Trading</a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li><a href='contact.php'>Contact</a></li>";
			        }
			         else if($pageName == "trading.php" || $pageName == "priceriskmgmt.php") {
			            echo "<li><a href='index.php'>Home</a></li>";
                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                        echo "<li class='dropdown active'><a href='#' class='dropdown-toggle active' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                            <font color='black'>Services</font><span class='caret'></span></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'><font color='black'>Trading</font></a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</font></a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li><a href='contact.php'>Contact</a></li>";
			        }
			         else if($pageName == "contact.php") {
			            echo "<li><a href='index.php'>Home</a></li>";
                        echo "<li><a href='aboutus.php'>About Us</a></li>";
                        echo "<li  class='dropdown'><a href='#' class='dropdown-toggle active' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Services<span class='caret'></span></a>";
                        	 echo "<ul class='dropdown-menu'>";
                        		echo "<li><a href='trading.php'>Trading</a></li>";
                        		echo "<li><a href='priceriskmgmt.php'>Price Risk Management</a></li>"; 
                        	 echo "</ul>";
                        echo "</li>";
                        echo "<li class='active'><a href='contact.php'><font color='black'>Contact</font></a></li>";
			        }
				?>
                          </ul>
					
                            
                                    
                            </ul> 
                        </div>
                    </div>
                </nav>
            </div>
        </div>
		
	</header>