<?php

require_once 'mensagens.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiperligações</title>
    <link rel="shortcut icon" href="../../imagens/icon_phone.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header>
        <h1>
            Hiperligações
        </h1>
    </header>
    
    <section>
        <h2>
            E-mail
        </h2>

        <p>
            Enviar e-mail: 
            <a href="mailto:erick_ferreira@outlook.com">Enviar e-mail</a>
        </p>
        <p>
            Enviar e-mail com assunto: 
            <a href="mailto:erick_ferreira@outlook.com?subject=<?= $tituloEmail ?>">Enviar e-mail</a>
        </p>
        <p>
            Enviar e-mail com assunto e mensagem: 
            <!-- <a href="mailto:erick_ferreira@outlook.com?subject=Reunião da próxima semana&body=Na próxima semana, a reunião será virtual.">Enviar</a> -->
            <a href="mailto:erick_ferreira@outlook.com?subject=<?= $tituloEmail ?>&body=<?= $mensagemEmail ?>">Enviar e-mail</a>
        </p>
    </section>

    <section>
        <h2>
            Chamadas Telefônicas e <img src="../../imagens/logo_whatsapp_inline_Green.png" alt="logo_whatsapp_inline_Green" class="logo-whatsapp">
        </h2>
        <p>
            ■ Ligar para Contato: 
            <a href="tel:+5587981346719">Contato</a>
        </p>

        <!-- https://faq.whatsapp.com/5913398998672934 -->
        <p>
            ● Ligar via WhatsApp: 
            <a href="https://wa.me/5587981346719" target="_blank">Contato WhatsApp</a>
        </p>
        <p>
            ◑ Mensagem pronta via WhatsApp: 
            <a href="https://wa.me/5587981346719?text=Olá, Erick!" target="_blank">Contato WhatsApp com mensagem</a>
        </p>
        <p>
            ◆ Mensagem pronta via WhatsApp escolhendo o contato: 
            <a href="https://wa.me/?text=<?= $mensagemZapp ?>" target="_blank">WhatsApp com mensagem</a>
        </p>
    </section>
    
</body>

</html>