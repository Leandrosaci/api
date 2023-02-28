<?php

    include_once('conn.php');

    $sql = "SELECT * FROM controller WHERE service != 'null' ";
    $result = $conexao->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle</title>

    <style>
        body{
            background: linear-gradient(to right, rgb(147, 20, 220), rgb(54, 17, 71));
            color: white;
            
        }
      
        div {
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
       
        .tdd{
            text-align: left;
            font-weight: bold;           
        }
        select{
            position: absolute;
            top: 0%;
            left:50%;
            transform: translate(-50%,-50%);
            width: 150px;
        }
        .content-table{
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 600px;
            border-radius: 5px 5px 0 0;
            overflow:hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .content-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }
        .content-table tr,
        .content-table td{
            padding: 10px 15px;
        }
        .content-table tbody tr {
            border-bottom: 1px soid #dddddd;
        }
        .content-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
        .content-table tbody tr:nth-of-type(even) {
            background-color: #009879;
        }
        .content-table tbody tr:last-of-type {
            border-bottom: 2px soid #009879;
        }
        .combo{
            margin-bottom: 10%;
            
        }

    </style>
</head>
<body>
    
    <div>
      
            <select class="combo">
                <option>Janeiro</option>
                <option>Fevereiro</option>
                <option>Março</option>
                <option>Abril</option>
                <option>Maio</option>
                <option>Junho</option>
                <option>Julho</option>
                <option>Agosto</option>
                <option>Setembro</option>
                <option>Outubro</option>
                <option>Novembro</option>
                <option>Dezembro</option>
            </select>
        
        <table class="content-table">
            <thead>
                <tr >
                    <th>id</th>
                    <th>nome</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr class='tdd'>";
                        echo "<td class='tdd'>".$user_data['id']."</td>";
                        echo "<td class='tdd'>".$user_data['name']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
       
    </div>
    <div id="chart_div" class="chart"></div>
</body>
</html>
