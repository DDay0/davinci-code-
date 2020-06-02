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
            <?php
                require './temp/menubar.php';
            ?>
            <div class="col-md-9" style="background-color: rgba(186, 186, 186, 0.46);color: #010101;">
                <!-- Content Load Here -->
                <h3 class="contentArea" style="margin-top: 10px;">The Davinci Code Challenge</h3>
                <hr style="margin-top: 14px;">
                <p> This game, like most other games, is organized in levels. You start at Level 1 and try to <b>beat</b> or <b>finish</b> it. 
                    if you finish some level you have a key, you need to submit that key into textbox that we are show in relevant Level web Page. 
                    Finishing a level results in information on how to start the next level. 
                    The pages on this website contain information on how to start level X from the previous level.
                    <br/>
                    <br/>
                    You will encounter many situations in which you have no idea what you are supposed to do. <br/>
                    <b>Do not panic!, Do not give up! </b>
                </p>
                <hr>
                <h2>GOOD LUCK !</h2>
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
