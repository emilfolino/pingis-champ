<?php

// koppla mot databas hämta spelare
// sedan fixa spelschema i javascript
// Enable verbose output of error (or include from config.php)
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors

// Create a DSN for the database using its filename
$fileName = __DIR__ . "/db/matches.sqlite";
$dsn = "sqlite:$fileName";

// Open the database file and catch the exception if it fails.
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>$dsn<br>";
    throw $e;
}

// Prepare and execute the SQL statement
$stmt = $db->prepare("SELECT * FROM players");
$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<?php require_once "includes/header.php"; ?>

<div class="container">
    <label class="input-label">Välj spelare</label>
    <input type="text" id="select-players" class="input" />
    <p>Snabbval:</p>

    <?php
    foreach ($res as $row) {
        print "<button id='add-player' data-name='".$row["name"]."' class='button green-button add-player'>".$row["name"]."</button>";
    }
    ?>
    <div id="player-list"></div>
    <br><br>
    <button class="button blue-button" id="create-games">Skapa spelschema</button>

    <form method="post" action="single_processor.php" id="single-form">

    </form>
</div>

<script src="single.js"></script>

<?php require_once "includes/footer.php"; ?>
