# Aladdin

Als het goed is leest Stijn dit; zoja, de stabiele versie zit in de release branch.
Have fun:)


Hoe smarty gebruiken:

Ik heb een nieuwe map "Smarty" gemaakt binnen de map "Controller". Daar staat een file "header.php" in. Hier zit de configuratie van smarty in die je elke keer kan gebruiken.

Als je dus smarty wil gebruiken in een controller, moet je die header.php includen. Vanuit een controller in de Controller map doe je dat zo:

include ('../Smarty/header.php');


"$smarty" is de variable die je moet gebruiken om smarty the gebruiken.

Bijv.: $smarty->display("filepath");

Files waar je in kan kijken voor voorbeelden:

RegisterController (gebruikt om de registreer pagina te laten zien)
InsertController (gebruikt om de gebruiker echt naar de database te schrijven)


Wat nog te doen:

- Zet je .php files om naar .tpl files. Kopieer de code in je .php file en plak het gewoon in je .tpl file.

- Maak een controller aan die je acties gaat afhandelen.

- Verander alle links die momenteel naar jouw pagina's leiden naar de controller.
      Voorbeeld:

                -<a class="color-green" href="page_registration.php">Klik hier</a>

                  WORDT:

                -<a class="color-green" href="../Controller/RegisterController.php">Klik hier</a>

                Waarin je vervolgens je view laat zien doormiddel van: $smarty-display("Jouw filenaam");
