<?php
include 'cfg.php';
$db=$con;
// fetch query
function fetch_data(){
 global $db;
  $query="SELECT * from appointment";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);
function show_data($fetchData){
 echo '<h2 class="pt-5">Reserved Appointments</h2>
 <table class="table m-5 border border-3">
     <thead>
         <tr>
         <th scope="col">First Name</th>
         <th scope="col">Last Name</th>
         <th scope="col">Gender</th>
         <th scope="col">Date</th>
         <th scope="col">Time</th>
         <th scope="col">Doctor</th>
         </tr>
     </thead>
     <tbody>';
 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 
  echo "<tr>
          <td>".$data['firstname']."</td>
          <td>".$data['lastname']."</td>
          <td>".$data['gender']."</td>
          <td>".$data['date']."</td>
          <td>".$data['time']."</td>
          <td>".$data['doctor']."</td>
        </tr>
        </tbody>";
  $sn++; 
     }
}else{
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}
?>
