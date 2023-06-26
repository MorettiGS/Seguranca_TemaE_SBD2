<?php

ini_set("display_erros", 1);

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $link = mysqli_connect('127.0.0.1', 'root', '', 'login');
    $email = $_GET['email'];
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $query = "SELECT * FROM login_details WHERE email = '$email' AND username = '$user' AND password = '$pass'";
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
            <th>Email</th>
            <th>Usuário</th>
        </tr>
        <tr>

        <?php
            foreach($result as $user){
                $dataex = $user;
        ?>
            <td class="table-item"><?=$dataex?></td>
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