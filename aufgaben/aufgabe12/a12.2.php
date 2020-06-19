<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Anmeldung</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="../css/a12.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action=" " method="post" >

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

    if(isset($_POST['anmelden'])) {
        $nutzername = $_POST['nutzername'];
        $passwort = $_POST['passwort'];

        $lines = file( './etc/daten.csv' );
        foreach ($lines as $line_num => $line) {
            list($datei_nutzername, $datei_passwort) = explode(",", $line);

            $datei_passwort = substr($datei_passwort, 0, strlen($datei_passwort)-1);

            if ($datei_nutzername == $nutzername && $datei_passwort == hash("sha384", $passwort . '#khaszi398fhlkvkhjewoiu+')) {
                echo 'Login war erfolgreich! Willkommen zurück ' , $nutzername;
                break;
            } else {
                echo 'Login war nicht erfolgreich!';
                break;
            }

        }
    }

    ?>
</form>
<script>
    const user = document.getElementById("username");
    const passwort = document.getElementById("pw");
    const button = document.getElementById("reg");

    button.addEventListener("click", ()=>{
        console.dir(user.value);
        console.log(user.value);
    })

</script>
</body>
</html>