

 <?php   
          
           $connect = mysqli_connect("localhost", "root", "", "escuela");  
           $sql = "SELECT * FROM maestros";  
           mysqli_set_charset($connect, 'utf8');
           $result = mysqli_query($connect, $sql);

           $rows = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $rows[] = $row;  
           }  
            
          $json_string = json_encode($rows);
          $file = 'maestros.json';
          file_put_contents($file, $json_string);


          header("Location:RegistrarMaestro.php");

  ?> 
