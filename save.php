<?php if (isset($_POST['submit'])) :
    $title = $_POST['title'];
    $descriptions = $_POST['descriptions'];
    try {
        require_once('includes/bdconnect.php');
        $stm = $conn->prepare("INSERT INTO notas (title, descriptions) VALUES (?, ?)");
        $stm->bind_param("ss", $title, $descriptions);
        $stm->execute();
        $stm->close();

        $_SESSION['message'] = 'Task Saved Succesfull';
        $_SESSION['message_type'] = 'success';
        //header("Refresh:0, url=index.php");
        header("Location: index.php");
        $conn->close();
    } catch (\Exception $e) {
        echo $e->getMessage();
    }


endif;
