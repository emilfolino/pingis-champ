<?php

// koppla mot databas hämta spelare
// sedan fixa spelschema i javascript

?>


<?php require_once "includes/header.php"; ?>

<div class="container">
    <label class="input-label">Välj spelare</label>
    <input type="text" id="select-players" class="input" />
    <button class="button blue-button" id="create-games">Skapa spelschema</button>

    <form method="post" action="single_processor.php" id="single-form">
        
    </form>
</div>

<?php require_once "includes/footer.php"; ?>
