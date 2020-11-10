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


<div class="container cont mt-3">
  <?php
  if (isset($_SESSION['message'])) {
  ?>

    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
      <?= $_SESSION['message'] ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php session_unset();
  } //clear data session
  ?>
  <!--APPLICATION-->
  <div id="App" class="row pt-5">
    <?php while ($task = $result->fetch_assoc()) { ?>
      <div class="col-md-6 mb-5">

        <?php $theDate = new DateTime($task['created_At']);
        $date = $theDate->format('Y-m-d');
        $hour = $theDate->format('H:i:s');
        ?>
        <div class="card box-notes">
          <div class="card-header card-h">
            <h5><?php echo $task['title']; ?></h5>
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="form-control descrip min"><?php
                                                    echo $task['descriptions'];
                                                    ?></div>
            </div>
            <div class="form-group">
              <p> <i class="fas fa-calendar-times"></i> <?php echo $date  ?></p>
              <p> <i class="fas fa-clock"></i> <?php echo $hour  ?></p>
            </div>
            <div class="form-group float-right">
              <a href="edit.php?id=<?php echo $task['id'] ?>" class="btn btn-success button-edit mr-3">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete.php?id=<?php echo $task['id'] ?>" class="btn btn-danger button-delete" name="delete">
                <i class="far fa-trash-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <?php include_once('includes/footer.php') ?>