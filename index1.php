<?php
include "../config.php";
//hello
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
</head>

<body>
<div class="container">
	<div class="row">
	   <div class="col-md-12"></div>
			<div class="panel panel-default" style="margin-top: 10px;">
    	       <div class="panel-body">
                <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                              <th style="text-align:center;" width="5%">#</th>
                              <th style="text-align:center;" width="5%">Roll No.</th>
                              <th style="text-align:center;" width="25%">Name</th>
                              <th style="text-align:center;" width="10%">Action</th>
                            </tr>
                             </thead>
                            
                                <!-- <td style="text-align:center;">1</td> -->
                                <?php
                

                    $sql_stud=$conn->query("SELECT * from students");
                    $result_stud=$sql_stud->fetchAll(); 
                    //print_r($result_que);
                    //echo $result_que[0]["que"];
                    for($i=0;$i<count($result_stud);$i++)
                    {
                        ?>
                             
                                <tr>
                                  <td style="text-align:center;"> <?=$i+1 ?></td>
                                <td style="text-align:center;"> <?=$result_stud[$i]['stud_rno']?></td>
                                <td style="text-align:center;"> <?=$result_stud[$i]['stud_name']?></td>
                                <td style="text-align:center;">
                          
                                       <a href="<?=URL?>data/viewdetail.php?id=<?=$result_stud[$i]['stud_id']?> " title="View"><span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                        
                                </td>
                                 </tr>

                        <?php

                    }
                ?>




                         </table>
    	       </div>
		  </div>
	</div>
</div>
<script>
    $(document).ready(function() {
    $('#example1').DataTable();
} );
</script>
</body>
</html>