<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show_table</title>
    <style>
        
        body {
            background-color: lightcoral;
            font-family: 'Courier New', Courier, monospace white;
        }
        table {
            width: 100%;
        }
        th, td {
            padding: 10px;
            border: 1px solid #dddddd;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>내용</th>
                <th>작성자</th>
                <th>작성일</th>
                <th>수정일</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once("db_info.php");

                $conn = mysqli_connect($SERV, $USER, $PASSWORD, $DBNM);
                // echo "접속 ok!<br>";
                $statement = "select * from tb1_board";
                $res = mysqli_query($conn, $statement);
                while($result=mysqli_fetch_array($res)) {
                    print "<tr>";
                    print "<td>";
                    print $result['board_list'];
                    print "<td>";
                    print $result['board_title'];
                    print "<td>";
                    print $result['board_content'];
                    print "<td>";
                    print $result['board_writer'];
                    print "<td>";
                    print $result['board_regdate'];
                    print "<td>";
                    print $result['board_updatedate'];
                    print "</tr>";
                }

                mysqli_close($conn);

            ?>
        </tbody>
    </table>
    <br>
    <a href='simple.html'>메인화면으로</a>
</body>
</html>