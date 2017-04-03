<?php
    include('config.php');

    //$search = $_GET['search'];
    //$queryAll = "SELECT * FROM tbl_myths_facts WHERE mf_keywords OR mf_fact OR mf_myth LIKE '%{$search}%'";
    $queryAll = "SELECT * FROM tbl_myths_facts";
    $runAll = mysqli_query($link, $queryAll);
    //echo $queryAll;

    if(empty($runAll) || $runAll == 'null'){
    	$result = "No search results found.";
    	echo $result;
    } else if(!empty($runAll)){
        while ($row = mysqli_fetch_array($runAll)) {
            $data[] = $row;
    }
    echo json_encode($data);
	    //$row = mysqli_fetch_all($runAll);
	   	//echo json_encode($row);
	    //echo mysqli_num_rows($runAll);
	}
?>