<?php

class siliconeClass{
     public function create_connection(){
        		$dbServer='localhost';
        		$dbUser='silico31_wp_user';//
        		$dbPass='+8@y@[Iwt(,*';//
        		$dbName='silico31_wp_db';
        		
        		$link = mysql_connect("$dbServer","$dbUser","$dbPass");
                mysql_select_db("$dbName");
        	
        	}//EOF
            public function sendRequestSample(){
                if(isset($_POST['btn-send'])){
                    echo "<script>alert('Hey');</script>";
                }
            }
    
}



?>