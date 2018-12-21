(function () {
    "use strict";

    var firstPress = true;
    var playerList = document.getElementById("player-list");
    var addPlayerButtons = document.getElementsByClassName("add-player");

    for (var i = 0; i < addPlayerButtons.length; i++) {
        addPlayerButtons[i].addEventListener("click", addPlayer);
    }

    var createGamesButton = document.getElementById("create-games");

    createGamesButton.addEventListener("click", createGames)

    function addPlayer() {
        if (firstPress) {
            var playerListLabel = document.createElement("p");

            playerListLabel.className = "player-list-label";
            playerListLabel.textContent = "Spelare:";
            playerList.appendChild(playerListLabel);

            firstPress = false;
        }

        var playerLabel = document.createElement("p");

        playerLabel.className = "player";
        playerLabel.textContent = this.dataset.name;
        playerList.appendChild(playerLabel);
    }

    function createGames() {
        
    }
})();
