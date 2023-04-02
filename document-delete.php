<?php
    $sql = "SELECT * FROM document;";
    $result = $conn->query($sql);
    $counter = 1;
    while($row = $result->fetch_assoc()) {
        echo '
            <tr>
                <td>'.$row["document_id"].' </td>
                <td>'.$row["document_name"].'</td> 
                <td>'.$row["document_date"].' </td>
                <td>'.$row["document_file"].'</td>
                <td>
                    <a href="./?page=document'.$row["document_file"].'" download="file" class="btn btn-warning"></i> ดาวน์โหลด </a>
                    <form action="" method="post" class="d-inline">
                        <button type="submit" 
                            name="btn-del" 
                            value="'.$row["document_id"].'" 
                            class="btn" style="background-color:#FF9999";
                            onclick="return confirm(\'ต้องการลบข้อมูลใช่หรือไม่ ?\')">
                            <i class="fa-solid fa-trash"></i> ลบข้อมูล
                        </button>
                    </form>
                </td>
            </tr>
        ';
        $counter = $counter + 1;
    }              
?>