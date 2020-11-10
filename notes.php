<?php include_once('includes/header.php') ?>

<?php
// Si hay un error de conexión a la base de datos, permitir que la página siga funcionando
try {
    require_once('includes/bdconnect.php');
    $sql = "SELECT * FROM `notas` ";
    $result = $conn->query($sql);
} catch (\Exception $e) {
    echo $e->getMessage();
}
?>


 <div class="container cont">
      <!--APPLICATION-->
      <div id="App" class="row pt-5">
      <?php   while($task = $result->fetch_assoc()){ ?>
        <div class="col-md-6 mb-5">
        
            <?php $theDate = new DateTime($task['created_At']);
                $date = $theDate->format('Y-m-d');
                $hour = $theDate->format('H:i:s');
            ?>
          <div class="card">
            <div class="card-header card-h" >
              <h5 style="color: #fff; text-align:center"><?php echo $task['title'];?></h5> 
            </div>
            <div class="card-body">
          <div class="form-group">
            <div class="form-control" style="min-height: 200px;"><?php 
            echo $task['descriptions'];
            ?></div>
          </div>
          <div class="form-group">
          <p> <i class="fas fa-calendar-times"></i> <?php echo $date  ?></p> 
          <p> <i class="fas fa-clock"></i> <?php echo $hour  ?></p> 
          </div>
          <div class="row justify-content-center ">
              <input type="button" value="Edit" class="btn btn-success  col-4 mr-3" name="edit" >
              <input type="button" value="Delete" class="btn btn-danger col-4" name="delete">
          </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>

<?php include_once('includes/footer.php') ?>