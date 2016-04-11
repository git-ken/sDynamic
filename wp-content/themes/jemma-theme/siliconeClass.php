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
            public function sendContact(){
                $this->create_connection();
                if(isset($_POST['btn-send-contact'])){
                    if((empty($_POST['fname'])) && (empty($_POST['lname'])) && (empty($_POST['empty']))){
                        echo "<style>.alert-error{display:block;}#fname{display:block;}#lname{display:block;}#email{display:block;}</style>";
                    }elseif(empty($_POST['fname'])){
                        echo "<style>.alert-error{display:block;}#fname{display:block;}</style>";
                    }
                    elseif(empty($_POST['lname'])){
                        echo "<style>.alert-error{display:block;}#lname{display:block;}</style>";
                    }
                    elseif(empty($_POST['email'])){
                        echo "<style>.alert-error{display:block;}#email{display:block;}</style>";
                        
                    }else{
                        $to = "bantugan.johnkenneth@gmail.com";
                                                $subject = "Message From: ".ucwords($_POST['fname'])." ".ucwords($_POST['lname'])."";
                                                
                                                $message = "
                                                <html>
                                                <head>
                                                <title>SiliconeDynamics</title>
                                                </head>
                                                <body>
                                                 <p><img src='http://dev.siliconedynamics.net/wp-content/uploads/2015/06/silicone-logo2-mobile.png' width='292' height='150'></p>
                                       
                                                <h4>Silicone Dynamics Contact</h4>
                                                
                                                <p>Name: ".ucwords($_POST['fname'])." ".ucwords($_POST['lname'])."<br />
                                                Email: ".$_POST['email']."<br />
                                                Address: ".$_POST['address']."<br />
                                                Zip Code: ".$_POST['zip']."<br />
                                                Country: ".$_POST['country']."<br />
                                                Phone: ".$_POST['phone']."<br />
                                                <br />
                                                Message:<br /><br />
                                                ".$_POST['message']."
                                                </p>
                                                
                                                
                                                
                                                
                                                </body>
                                                </html>
                                                ";
                                                // Always set content-type when sending HTML email
                                                $headers = "MIME-Version: 1.0" . "\r\n";
                                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                                // More headers
                                                $headers .= 'From: admin@dev.siliconedynamics.net' . "\r\n";
                                                //$headers .= 'Cc: myboss@example.com' . "\r\n";
                                                $mail = mail($to,$subject,$message,$headers);
                                               if($mail){
                                                echo "<style>.alert-success{display:block;}</style>";
                                               }else{
                                               }
                    }
                }
            }
            public function displayCountry(){
                $this->create_connection();
                $qCountry = "SELECT * FROM country";
                $rCountry = mysql_query($qCountry);
                echo "<option value='' selected>-Select Country-</option>";
                while($cRow=mysql_fetch_array($rCountry)){
                    
                    echo "<option value='".$cRow['country_name']."'>".$cRow['country_name']."</option>";
                }
            }
            public function sendQuoteRequest(){
                if(isset($_POST['btn-quote-request'])){
                   if((empty($_POST['fname']) && (empty($_POST['lname'])) && (empty($_POST['comp_name'])) && (empty($_POST['email'])) && (empty($_POST['cemail'])))){
                    echo "<style>.alert-error{display:block;}#fname{display:block;}#lname{display:block;}#comp_name{display:block;}#email{display:block;}#cemail{display:block;}</style>";
                   }elseif($_POST['cemail'] != $_POST['email']){
                    echo "<style>.alert-error{display:block;}#cemail{display:block;}</style>";
                   }else{
                     $to = "bantugan.johnkenneth@gmail.com"; // send this to admin of the website
                                    $subject= "Silicone Dynamics Quote Request From ".ucwords($_POST['fname'])." ".ucwords($_POST['lname'])."";
                                    $todayis = date("l, F j, Y, g:i a") ;
                                    $message = "<html><head><title></title></head><body>
                                    <p><img src='http://dev.siliconedynamics.net/wp-content/uploads/2015/06/silicone-logo2-mobile.png' width='292' height='150'></p>
                                    <h2>Quote Request from - ".ucwords($_POST['fname'])." ".ucwords($_POST['lname'])."</h2>
                                    
                                    <table width='60%'>
                                        <tr>
                                            <td><strong>Name</strong></td><td>".ucwords($_POST['fname'])." ".ucwords($_POST['lname'])."</td>
                                        </tr>
                                         <tr>
                                            <td><strong>Email</strong></td><td>".$_POST['email']."</td>
                                        </tr>
                                         <tr>
                                            <td><strong>Company Name</strong></td><td>".$_POST['comp_name']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Title</strong></td><td>".$_POST['title']."</td>
                                        </tr>
                                        
                                         <tr>
                                            <td><strong>Phone</strong></td><td>".$_POST['phone']."</td>
                                        </tr>
                                         <tr>
                                            <td><strong>Quantities to Quote</strong></td><td>".$_POST['quantitiestoquote']."</td>
                                        </tr>
                                         <tr>
                                            <td><strong>Estimated Annual Usuage</strong></td><td>".$_POST['eau']."</td>
                                        </tr>
                                         <tr>
                                            <td><strong>Target Price Each</strong></td><td>".$_POST['targetprice']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Project Notes</strong></td>
                                        </tr>
                                         <tr>
                                            <td><p>".$_POST['comments']."</p></td>
                                        </tr>
                                        
                                    </table>
                                    
                                    </body></html>";
                                      $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
                                             $headers = "From: admin@dev.siliconedynamics.net\r\n" .
                                             "MIME-Version: 1.0\r\n" .
                                                "Content-Type: multipart/mixed;\r\n" .
                                                " boundary=\"{$mime_boundary}\"";
                                             $message = "This is a multi-part message in MIME format.\n\n" .
                                                "--{$mime_boundary}\n" .
                                                "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
                                                "Content-Transfer-Encoding: 7bit\n\n" .
                                             $message . "\n\n";
                                             foreach($_FILES as $userfile)
                                             {
                                                $tmp_name = $userfile['tmp_name'];
                                                $type = $userfile['type'];
                                                $name = $userfile['name'];
                                                $size = $userfile['size'];
                                                if (file_exists($tmp_name))
                                                {
                                                   if(is_uploaded_file($tmp_name))
                                                   {
                                                      $file = fopen($tmp_name,'rb');
                                                      $data = fread($file,filesize($tmp_name));
                                                      fclose($file);
                                                      $data = chunk_split(base64_encode($data));
                                                   }
                                                   $message .= "--{$mime_boundary}\n" .
                                                      "Content-Type: {$type};\n" .
                                                      " name=\"{$name}\"\n" .
                                                      "Content-Disposition: attachment;\n" .
                                                      " filename=\"{$fileatt_name}\"\n" .
                                                      "Content-Transfer-Encoding: base64\n\n" .
                                                   $data . "\n\n";
                                                }
                                             }
                                             $message.="--{$mime_boundary}--\n";
                                    if (mail($to, $subject, $message, $headers))
                                       echo "<style>.alert-success{display:block;}</style>";
                                    else
                                       echo "<script>alert('Error Sending!');</script>";
                                       }
                }
            }//EOF
            public function sendDesignGuide(){
                if(isset($_POST['btn-design-guide'])){
                   if((empty($_POST['fname']) && (empty($_POST['lname'])) && (empty($_POST['email'])) && (empty($_POST['cemail'])))){
                    echo "<style>.alert-error{display:block;}#fname{display:block;}#lname{display:block;}#email{display:block;}#cemail{display:block;}</style>";
                    
                   }elseif($_POST['cemail'] != $_POST['email']){
                    echo "<style>.alert-error{display:block;}#cemail{display:block;}</style>";
                   }else{
                    echo "<style>.alert-success{display:block;}</style>";
                   }
                }
            }//EOF
            public function sendRequestSample(){
                if(isset($_POST['btn-send'])){
                    if(empty($_POST['comp_name']) && empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['email']) && empty($_POST['cemail']) && empty($_POST['address']) && empty($_POST['state']) && empty($_POST['city']) && empty($_POST['zip'])){
                        echo "<style>.alert-error{display:block;}#comp_name{display:block;}#fname{display:block;}#lname{display:block;}#email{display:block;}#cemail{display:block;}#address{display:block;}#state{display:block;}#city{display:block;}#zip{display:block;}</style>";
                    }
                    elseif(empty($_POST['comp_name'])){
                        echo "<style>.alert-error{display:block;}#comp_name{display:block;}</style>";
                    }
                    elseif(empty($_POST['fname'])){
                        echo "<style>.alert-error{display:block;}#fname{display:block;}</style>";
                    }
                    elseif(empty($_POST['lname'])){
                        echo "<style>.alert-error{display:block;}#lname{display:block;}</style>";
                    }
                     elseif(empty($_POST['email'])){
                        echo "<style>.alert-error{display:block;}#email{display:block;}</style>";
                    }elseif(empty($_POST['address1'])){
                        echo "<style>.alert-error{display:block;}#address{display:block;}</style>";
                    }elseif(empty($_POST['state'])){
                        echo "<style>.alert-error{display:block;}#state{display:block;}</style>";
                    }elseif(empty($_POST['city'])){
                        echo "<style>.alert-error{display:block;}#city{display:block;}</style>";
                    }
                    elseif(empty($_POST['zip'])){
                        echo "<style>.alert-error{display:block;}#zip{display:block;}</style>";
                    }elseif($_POST['email'] != $_POST['cemail']){
                        echo "<style>.alert-error{display:block;}#cemail{display:block;}</style>";
                    }
                    else{
                        $to = "bantugan.johnkenneth@gmail.com";
                                                $subject = "".$_POST['email']." is requesting for sample of Silicone Rubber Keypad";
                                                
                                                $message = "
                                                <html>
                                                <head>
                                                <title>SiliconeDynamics</title>
                                                </head>
                                                <body>
                                                 <p><img src='http://dev.siliconedynamics.net/wp-content/uploads/2015/06/silicone-logo2-mobile.png' width='292' height='150'></p>
                                       
                                                <h4>Silicone Rubber Keypad Request Sample</h4>
                                                <table style='width:500px;'>
                                               
                                                <tr>
                                                <td>
                                                <p>Hello Admin,</p>
                                                <p>".$_POST['email']." is requesting for sample of Silicone Rubber Keypad</p>
                                                <p>
                                                <strong>Company Name: </strong>".$_POST['comp_name']." <br />
                                                <strong>Name: </strong>".ucwords($_POST['fname'])." ".ucwords($_POST['lname'])." <br />
                                                <strong>Email: </strong>".$_POST['email']." <br />
                                                <strong>Address: </strong>".$_POST['address1']." <br />
                                                <strong>State: </strong>".$_POST['state']." <br />
                                                <strong>City: </strong>".$_POST['city']." <br />
                                                <strong>Zip: </strong>".$_POST['zip']." 
                                                </p>
                                                </td>
                                               
                                                </table>
                                                </body>
                                                </html>
                                                ";
                                                // Always set content-type when sending HTML email
                                                $headers = "MIME-Version: 1.0" . "\r\n";
                                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                                // More headers
                                                $headers .= 'From: admin@dev.siliconedynamics.net' . "\r\n";
                                                //$headers .= 'Cc: myboss@example.com' . "\r\n";
                                                $mail = mail($to,$subject,$message,$headers);
                                               if($mail){
                                                echo "<style>.alert-success{display:block;}</style>";
                                               }else{
                                               }
                    }
                }
            }//EOF
}
?>