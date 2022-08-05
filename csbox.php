
<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
            <h1>Suggestion Box </h1>
               
          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <style>
tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
                                <thead>
                                    <tr>
                                        <th>Rollnumber</th>
                                        <th>Subject</th>
                                        <th>Suggestion</th>
                                        <th>Clear</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM csbox';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['Rollnumber'].'</td>';
                            echo '<td>'. $row['Subject'].'</td>';
                            echo '<td>'. $row['Suggestion'].'</td>';
                            echo '<td> <a  type="button" class="btn btn-xs btn-danger"
                             href="csboxdel.php?type=csbox&delete & id='.$row['id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>


 
 