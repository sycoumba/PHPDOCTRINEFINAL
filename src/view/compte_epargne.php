<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> </title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<!-- onload="masquerDiv();" -->
<body>
<header>
        <div class="main">
            <img src="../public/logo.jpeg">
            <h1> BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
        </div>
        <h2> compte epargne </h2>
    </header>
<form id="compte_epargne" action="../controller/insert_compte_epargne.php" method="POST">
        <fieldset id="compte_epargne">
<div>
                <label>numero_Agence:</label>
                        <input type="text" name="numero_Agence" id="numero_Agence" placeholder="Entrer le numero de l'agence"></p>
                </div>
                <div>
                <label> numero_compte:</label>
                        <input type="text" name="numero_compte" id="numero_compte" placeholder="Entrer le numero_compte"></p>
                </div>
                <div>
                <label>cle_rib:</label>
                        <input type="text" name="cle_rib" id="cle_rib" placeholder="Entrer la cle_rib"></p>
                </div>
                <div>
                <label> date_ouverture:</label>
                        <input type="date" name="date_ouverture" id="date_ouverture"></p>
                </div>
                <div>
                <label> frais_ouverture:</label>
                        <input type="text" name="frais_ouverture" id="frais_ouverture" placeholder="Entrer le frais_ouverture"></p>
                </div>
                <div>
                <label> montant_remuneration:</label>
                        <input type="text" name="montant_remuneration" id="montant_remuneration+" placeholder="Entrer le montant_remuneration"></p>
                </div>
                <input type="submit" name="valider" value="valider" id="valider" /> <input type="reset" value="retour" id="retour"></p>
        </fieldset>
    </form>
    <script src="../public/control.js"></script>
</body>
</html>
© 2020 GitHub, Inc.