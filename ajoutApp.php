<?PHP
    
    $config = parse_ini_file("appli.ini");
    $server  = $config["server"];
    $username = $config["username"];
    $password = $config["password"];
    $dbname   = $config["dbname"];

    $mysqli = new mysqli($server, $username, $password, $dbname);
    $stmt= $mysqli->prepare("Insert into applicant (nom, prenom, courriel, pays, motDePasse) values (?,?,?,?,?)");
    $stmt->bind_param('sssss', $nom, $prenom, $courriel, $ville, $motDePasse);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $courriel = $_POST["courriel"];
    $ville = $_POST["pays"];
    $motDePasse = $_POST["motDePasse"];
    $stmt->execute();
    //$msg="Requête ajout. Adresse employeur: $adresse";
    //log_message($msg);
    $stmt->close();
    header("location: index.php");
?>