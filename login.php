<?php

ini_set("display_erros", 1);

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $link = mysqli_connect('relational.fit.cvut.cz', 'guest', 'relational', 'legalActs');
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $query = "SELECT * FROM `legalacts`";
    $result = mysqli_query($link, $query);
}

?>


<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <h2 class="title-resultado">Resultado</h2>
    </head>
    <body>
    <table>
        <tr>
            <th>Usuário</th>
            <th>Email</th>
        </tr>
        <tr>

        <?php
            foreach($result as $userdata){
                $user = $userdata['username'];
                $email = $userdata['email'];
        ?>
            <td class="table-item"><?=$user?></td>
            <td class="table-item"><?=$email?></td>
        </tr>
        <?php } ?>
        </table>
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
        color: #D2691E;
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
        background-color: #20B2AA;
        color: white;
    }

</style>