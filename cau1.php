<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu 1 </title>
    <style>
        tr:nth-child(even){background-color: #f2f2f2;}
        table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
    }

    table#alter tr:nth-child(even) {
        background-color: #eee;
    }

    table#alter tr:nth-child(odd) {
        background-color: #fff;
    }

    table#alter th {
        color: white;
        background-color: gray;
    }
    </style>
</head>
<body>
    <?php
        // $TT_SV = array(
        //     array("ma_lop" => "61.CNTT-1","masv" => "6112341","ho_ten" => "Nguyễn Minh Anh","gt" => "Nữ","ngay_sinh" => "2001-12-03"),
        //     array("ma_lop" => "61.CNTT-1","masv" => "6110123","ho_ten" => "Trần Anh Tú","gt" => "Nam","ngay_sinh" => "2001-05-16"),
        //     array("ma_lop" => "61.CNTT-2","masv" => "6111012","ho_ten" => "Nguyễn Ngọc Thanh","gt" => "Nam","ngay_sinh" => "2001-10-20"),
        //     array("ma_lop" => "61.CNTT-1","masv" => "6234121","ho_ten" => "Trần Lệ Thu","gt" => "Nữ","ngay_sinh" => "2002-05-10"),
        // );
        $TT_SV = array(
            array( "61.CNTT-1", "6112341", "Nguyễn Minh Anh", "Nữ", "2001-12-03"),
            array( "61.CNTT-1", "6110123", "Trần Anh Tú", "Nam", "2001-05-16"),
            array( "61.CNTT-2", "6111012", "Nguyễn Ngọc Thanh", "Nam", "2001-10-20"),
            array( "61.CNTT-1", "6234121", "Trần Lệ Thu", "Nữ", "2002-05-10"),
        );
        echo "<table>";
        for ($row = 0; $row < 4; $row++) {
            // echo "Row number $row: ";
            echo "<tr>";
            for ($col = 0; $col < 5; $col++) {
                
                    echo "<td>";
                // echo "<td> $TT_SV[$row][$col]." " </td>";
                echo $TT_SV[$row][$col]." ";
                    echo "</td>";
            }
            echo "<br>";
            echo "</tr>";
        }
        echo "</table>";

        
    ?>
</body>
</html>