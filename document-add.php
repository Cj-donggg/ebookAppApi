<?php
    include("config/connectdb.php");

    $document_id = $_POST["document_id"];
    $document_name = $_POST["document_name"];
    $document_date = $_POST["document_date"];
    $doc_type_id = $_POST["doc_type_id"];
    $document_file = $_POST["document_file"];
    $staff_id = $_POST["staff_id"];
    $sql = "
        INSERT INTO document (
            document_id,
            document_name,
            document_date,
            doc_type_id,
            document_file,
            staff_id
        ) VALUES (
            '$document_id',
            '$document_name',
            '$document_date',
            '$doc_type_id',
            '$document_file',
            '$staff_id'
        )
    ";
    $result = $conn->query($sql);

    if($result) {
        echo json_encode([
            "status"=>"ok"
        ]);
    } else {
        echo json_encode([
            "status"=>"no"
        ]);
    }