<?php
include "connection.php";

if(isset($_GET['nametag'])) {
    $searchTerm = $_GET['namtag'];

    // Query untuk mencari pertanyaan berdasarkan kata kunci
    $query = "SELECT questions.*, tags.* FROM questions
              INNER JOIN tags ON tags.tagid = questions.tagid
              WHERE qcontent LIKE '%$searchTerm%' OR nametag LIKE '%$searchTerm%'";

    $searchResult = mysqli_query($db_connection, $query);
} else {
    // Tampilkan semua pertanyaan jika tidak ada kata kunci pencarian
    $searchResult = mysqli_query($db_connection, "SELECT questions.*, tags.* FROM questions INNER JOIN tags ON tags.tagid = questions.tagid");
}
?>