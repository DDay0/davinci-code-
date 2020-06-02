<?php
    include ('dbConnect.php');
    
    if(isset($_POST['keyBox'])){
       // echo keyBox;
        $keyvalue = md5($_POST['keyBox']);
        
        $q = "SELECT levelKey, levelUrl FROM level_details WHERE lvlID = 7";
        $result = mysqli_query($dbconn,$q);
        
        $row = mysqli_fetch_assoc($result);
        
        $lvkey = $row['levelKey'];
        $url = $row['levelUrl'];
        if($keyvalue === $lvkey){
            
            echo "<a href='$url'> Click For Next Level</a>";
            
        }
        
    }