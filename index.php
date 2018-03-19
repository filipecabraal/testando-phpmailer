<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <title>Php Mailer</title>
    <style>
        form {
            width: 10%;
            margin: 0 auto;
        }

        label, button {
            display: block;
        }
    </style>
</head>
<body>
    <form action="obrigado.php" method="post">
        <fieldset>
            <label for="name">Nome:</label>
            <input type="text" name="name">

            <label for="phone">Telefone:</label>
            <input type="tel" name="phone">

            <label for="email">E-mail:</label>
            <input type="email" name="email">

            <label for="message">Mensagem:</label>
            <textarea name="message" cols="30" rows="10"></textarea>

            <button type="submit">Enviar</button>
            <div class="alert">
                <?php echo @$_GET['msg']; ?>        
            </div>
        </fieldset>  
    </form>
</body>
</html>