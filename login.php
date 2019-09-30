<?php
    echo '<form method="POST" action="data-processing.php">
                <label for="Id">Identifiant : </label><br>
                <input type="text" id="Id" required placeholder="Ex: foufou32" name="id" ><br>

                <label for="mdp">Mot de passe :</label><br>
                <input  type="password" id="mdp" name="mdp"><br>           
                    
                <label for=soumettre><input id="soumettre" type="submit" name="action" value="mailer"></label>
            </form>';