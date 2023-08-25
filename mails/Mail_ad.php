<!DOCTYPE html>
<!--
mail_ad.php
Ce script est stocké sur AD
http://gollou.alwaysdata.net/ProjetMamzelleOuiOui/mails/mail_ad.php
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>mail_ad</title>
    </head>
    <body>
        <h1>Mail AlwaysData</h1>
        <?php
        $message = "";
        $btValider = filter_input(INPUT_POST, "btValider");
        if ($btValider != null) {
            // ini_set("SMTP", "smtp.bbox.fr");
            ini_set("SMTP", "gollou.alwaysdata.net");
            ini_set("sendmail_from", "caroline.boucau59@gmail.com");

            $destinataire = "golloumette59@gmail.com";
            // filter_input(INPUT_POST, "destinataire");
            $objet = "test";
            // filter_input(INPUT_POST, "objet");
            $texte = "lien url";
            filter_input(INPUT_POST, "texte");

            $entetes = "Content-Type: text/plain;\r\n";

            $bOk = mail($destinataire, $objet, $texte, $entetes);
            if ($bOk) {
                $message = "Mail 1 envoy&eacute; avec succ&egrave;s";
            } else {
                $message = "Erreur d'envoi du mail 1";
            }
        }
        ?>

        <form method="POST">
            <table border="0" cellpadding="3">
                <tr>
                    <td>Destinataire : </td>
                    <td><input type="text" name="destinataire" value="courspascalbuguet@gmail.com" size="50" /></td>
                </tr>
                <tr>
                    <td>Objet : </td>
                    <td><input type="text" name="objet" value="Premier exo" /></td>
                </tr>
                <tr>
                    <td>Message : </td>
                    <td><input type="text" name="texte" value="Est-ce que ça va passer?" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="btValider" /></td>
                </tr>
            </table>
        </form>

        <label>
            <?php echo $message;
            ?>
        </label>
    </body>
</html>
