<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Registrierung</title>
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
            $SALT = '#khaszi398fhlkvkhjewoiu+';
            $file = "./etc/daten.csv";
            $zeile = $nutzername.','.hash("sha384",$passwort . $SALT)."\n";

            if ( file_put_contents( $file, $zeile, FILE_APPEND | LOCK_EX ) ){
                echo "$nutzername, erfolgreich registiert. <script>alert('Registered successfully!')</script>";
            }

        } else {
            echo 'Nicht alle Felder sind ausgefüllt worden';
            die();
        }
    }


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