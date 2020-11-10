<?php include_once('includes/header.php') ?>
<?php include('includes/bdconnect.php'); ?>
<div class="container">
  <!--APPLICATION-->
  <div id="App" class="row pt-5">
    <div class="col-md-6 cont" style="text-align:center; margin: 0 auto">
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
      <div class="card box mt-4 card-child">
        <div class="card-header head">
          <h4 class="h4">New Note</h4>
        </div>
        <form action="save.php" method="POST" id="note-form" class="card-body">
          <div class="form-group">
            <input type="text" id="title" placeholder="Note Title" class="form-control descrip" name="title" />
          </div>
          <div class="form-group">
            <textarea id="description" name="descriptions" cols="30" rows="10" class="form-control descrip" placeholder="Add a Description"></textarea>
          </div>
          <input type="submit" value="Save" class="btn btn-primary btn-block button-submit" name="submit" />
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?php include_once('includes/footer.php') ?>