<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Anmeldung</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="../css/a12.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="" method="get" > <!-- method="post"-->

    <h1>Anmeldung</h1>

    <ul>
        <li>
            <label> Nutzername:
            </label>
        </li>
        <li>
            <input type="text" id="nutzername" name="nutzername" required title="Bitte geben Sie einen Nutzernamen ein. Muster...">
        </li>
        <li>
            <label> Passwort:
            </label>
        </li>
        <li>
            <input type="password" id="passwort" name="passwort" required title="Bitte geben Sie ein Passwort ein. Muster...">

        </li>
    </ul>

    <button id="reg" class="button" name="anmelden"> Anmelden </button>

    <?php
    //anfällig für <script>...</script>-Eingaben
    if(isset($_GET['anmelden'])) {
        $nutzername = $_GET['nutzername'];
        $passwort = $_GET['passwort'];

        echo $nutzername, ' Login erfolgreich';

    }
    //nicht so anfällig
    if(isset($_POST['anmelden'])) {
        $nutzername = $_POST['nutzername'];
        $passwort = $_POST['passwort'];

        if(strpos($nutzername, '<script>') || strpos($passwort , '<script>')){
            echo 'nene';
        } else {
            echo $nutzername, ' Login erfolgreich';
        }
    }

    ?>
</form>
<script>
    const user = document.getElementById("username");
    const passwort = document.getElementById("pw");
    const button = document.getElementById("reg");

    button.addEventListener("click", ()=>{
        console.log(user.value);
    })

</script>
</body>
</html>