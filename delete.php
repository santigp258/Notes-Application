<?php  
require_once('includes/bdconnect.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM notas WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task removed Successfully';
    $_SESSION['message_type'] = 'danger';
    header("Location: notes.php");
}

?>