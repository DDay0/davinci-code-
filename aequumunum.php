<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <?php
        require('./temp/header.php');
        require './script/script.php';
    ?>  
</head>
    <body oncontextmenu="return false">
    <div class="container-fluid">
        <?php 
            require './temp/titlebar.php';
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                    <div class="sidebar-nav">
                        <div class="navbar navbar-default" role="navigation" style="border: none;">
                           <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <span class="visible-xs navbar-brand">Menu Bar</span>
                           </div>
                           <div id="menu" class="navbar-collapse collapse sidebar-navbar-collapse">
                              <ul class="nav navbar-nav">
                                <li><h3 class="nav-title first">LEVELS</h3></li>
                                <li><a href="aequumunum.php"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 01</a></li>
                                <li><a href="aequumduo.php"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 02</a></li>
                                <li><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 03</a></li>
                                <li><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 04</a></li>
                                <li><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 05</a></li>
                                <li><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 06</a></li>
                                <li><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 07</a></li>
                                <li><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>LEVEL - 08</a></li>
                              </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
              </div>
            <div class="col-md-9" style="background-color: rgba(186, 186, 186, 0.46);color: #010101;">
                <!-- Content Load Here -->
                <h3 class="contentArea" style="margin-top: 10px;">Level-1 Challenge</h3>
                <hr style="margin-top: 14px;">
                    <p>This level is too easy. log in to the provided linux server using ssh (username-davinci1 password-password) 
			Still you dont require any key to go to the level 2. But the level 2 login is inside a TEXT file the challenge is to find the login deatails for the next level.
                    </p>
                <hr>
                <!-- End Of Content -->
            </div>
        </div>
    </div>
    <?php
        require ('./temp/footer.php');
    ?>
</body>
<script src="Js/jquery-1.9.1.min.js"></script>
<script src="Js/bootstrap.js"></script>
</html>
