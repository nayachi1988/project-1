<?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: doteur.olfa.amdouni@gmail.com' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Clinique Dentaire Dr Olfa Amdouni</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('destinataire@free.fr', 'Envoi depuis page Clinique Dentaire Dr Olfa Amdouni', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
