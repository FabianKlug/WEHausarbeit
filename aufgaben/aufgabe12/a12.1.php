<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="../css/a12.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="" method="post" >

    <h1>Registrierung</h1>

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

    <button id="reg" class="button" name="registrieren"> Registrieren </button>

</form>
    <?php

    ob_start();

    if(isset($_POST['registrieren'])) {
        $nutzername = $_POST['nutzername'];
        $passwort = $_POST['passwort'];

        if(!empty($nutzername) && !empty($passwort)) {
            /*
            // Öffnet die Datei, um den vorhandenen Inhalt zu laden

            // Fügt eine neue Person zur Datei hinzu
            $current .= "$nutzername $passwort\n";
            // Schreibt den Inhalt in die Datei zurück*/

            $file = 'user.txt';
            $current = file_get_contents($file);
            array_push($current, array ('Nutzername' => $nutzername,
                'Passwort' => $passwort));


            file_put_contents($file, print_r($current, true));

            //file_put_contents($file, $current);
            echo  $nutzername, " erfolgreich registiert.";

        } else {
            echo 'Nicht alle Felder sind ausgefüllt worden';
            die();
        }
    }

    ob_end_clean();
    ?>


<script>
    const user = document.getElementById("username");
    const passwort = document.getElementById("pw");
    const button = document.getElementById("reg");

    button.addEventListener("click", ()=>{
        //console.dir(user.value);
        //console.log(user.value);
    })

</script>
</body>
</html>