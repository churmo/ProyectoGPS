 <?php   
          
          // $nombre = $_GET['FiltrarNombre'];
          // $Grado=$_GET['FiltrarGrado'];
          // $Grupo=$_GET['FiltrarGrupo'];
          $temp = "ef";
           $connect = mysqli_connect("localhost", "root", "", "escuela");  
           $sql = "SELECT * FROM alumnos where nombre like '%$temp%' ";  
           mysqli_set_charset($connect, 'utf8');
           $result = mysqli_query($connect, $sql);

           $rows = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $rows[] = $row;  
           }  
            
          $json_string = json_encode($rows);
          $file = 'JsonTemp.json';
          file_put_contents($file, $json_string);
  ?> 