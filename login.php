<?php

ini_set("display_erros", 1);

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $link = mysqli_connect('relational.fit.cvut.cz', 'guest', 'relational', 'legalActs');
    $hash = $_GET['hash'];
    $query = "SELECT * FROM `legalacts` WHERE `hash` = '$hash' OFFSET 0 ROWS FETCH NEXT 15 ROWS ONLY";
    $result = mysqli_query($link, $query);
}

?>


<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <h2 class="title-resultado">Resultados</h2>
    </head>
    <body>
    <button type="submit" onclick="redirectToLocalhost()">Back</button>
    <table>
        <tr>
            <th>Caso</th>
            <th>Tribunal</th>
            <th>Data de início</th>
            <th>Data legal</th>
            <th>Status</th>
            <th>Juiz</th>
            <th>Resolução</th>
        </tr>
        <tr>

        <?php
            foreach ($result as $actData) {
                $case = isset($actData['CaseNumber']) ? $actData['CaseNumber'] : '-';
                $court = isset($actData['Court']) ? $actData['Court'] : '-';
                $sdate = isset($actData['StartDate']) ? $actData['StartDate'] : '-';
                $ldate = isset($actData['LegalDate']) ? $actData['LegalDate'] : '-';
                $status = isset($actData['Status']) ? $actData['Status'] : '-';
                $judge = isset($actData['Judge']) ? $actData['Judge'] : '-';
                $appealResult = isset($actData['ResultOfAppeal']) ? $actData['ResultOfAppeal'] : '-';   
        ?>
            <td class="table-item"><?=$case?></td>
            <td class="table-item"><?=$court?></td>
            <td class="table-item"><?=$sdate?></td>
            <td class="table-item"><?=$ldate?></td>
            <td class="table-item"><?=$status?></td>
            <td class="table-item"><?=$judge?></td>
            <td class="table-item"><?=$appealResult?></td>
        </tr>
        <?php } ?>
        </table>
        <script>
            function redirectToLocalhost() {
                window.location.href = 'http://localhost:8080/';
            }
        </script>
    </body>
</html>

<style>
    
    body {
        min-height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-family: 'Poppins';
        background-color: #F8F8FF;
    }

    .title-resultado{
        color: #26a9e0;
        font-size: 2rem;
    }

    table {
        border-collapse: collapse;
        width: 50%;
        background-color: white;
    }

    table, th, td {
        border: 0.1px solid #A9A9A9;
    }

    th, td {
        padding: 15px;
        text-align: left;
    }

    th {
        height: 50px;
        background-color: #1c87c9;
        color: white;
    }

    button {
      width: 30%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #26a9e0;
      }

</style>