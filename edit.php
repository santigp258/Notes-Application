<?php include('includes/bdconnect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM notas WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $task = mysqli_fetch_array($result);
        $title = $task['title'];
        $description = $task['descriptions'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['descriptions'];
    $query = "UPDATE notas set title = '$title', descriptions = '$description' WHERE id = $id ";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Note updated Successfully';
    $_SESSION['message_type'] = 'info';
    header("Location: index.php");
}

?>
<?php include_once('includes/header.php') ?>

<div class="container">
  <!--APPLICATION-->
  <div id="App" class="row pt-5">
    <div class="col-md-6 cont" style="text-align:center; margin: 0 auto">
      <div  class="card box mt-4 card-child">
        <div class="card-header head-edit">
          <h4 class="h4-edit">Edit Note</h4>
        </div>
        <form action="edit.php?id=<?php echo $id ?>" method="POST" id="note-form" class="card-body">
          <div class="form-group">
            <input type="text" id="title" placeholder="Note Title" class="form-control descrip" name="title"  value="<?php echo $task['title']; ?>" />
          </div>
          <div class="form-group">
            <textarea id="description" name="descriptions" cols="30" rows="10" class="form-control descrip" placeholder="Add a Description"><?php echo $task['descriptions']; ?></textarea>
          </div>
          <input type="submit" value="Update" class="btn btn-primary btn-block update" name="update" />
        </form>
      </div>
    </div>
    </div>
  </div>
</div>

<?php include_once('includes/footer.php') ?>