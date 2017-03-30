<?php
    include('connect.php');

    $search = $_GET['search'];
    //echo $picID;
    $queryAll = "SELECT * FROM tbl_myths_facts WHERE mf_myth, mf_fact, mf_keywords = '$search'";
    //echo $queryAll;
    $runAll = mysqli_query($link, $queryAll);
    $row = mysqli_fetch_assoc($runAll); 
    echo json_encode($row);
    //echo mysqli_num_rows($runAll);
?>