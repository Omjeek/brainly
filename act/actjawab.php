<?php
session_start();
if(isset($_POST['submit'])) {
    include "../connection.php";
    $qid = $_POST['qid'];
    $acontent = $_POST['acontent'];
    $userid = $_SESSION['user_id'];
    $query = $db_connection->prepare("INSERT INTO answers (qid, userid, acontent) VALUES (?, ?, ?)");
    $query->bind_param("iss", $qid, $userid, $acontent);
    if ($query->execute()) {
        header("Location: ../jawab.php?qid=" . $qid);
        exit();
    } else {
        error_log("Gagal menyimpan jawaban: " . $query->error);
        header("Location: ../jawab.php?qid=" . $qid . "&error=true");
        exit();
    }
}
?>
