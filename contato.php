    <!DOCTYPE html>
    <html>  
        <head>
        <title> CONTATO | Página 3</title>
        <?php include 'include-site/head.php'; ?>


        </head>
        <body>
        <?php include 'include-site/header.php'; ?>

        <h2>Entre em Contato</h2>

        <form action="processa.php" method="POST">
        <table border="1" width="400">
    <div class="container">
        <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="name"><i class="fa fa-user-circle-o" style="font-size:14px">&ensp;Nome</i></label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label for="idade"><i class="fa fa-map-pin" style="font-size:14px">&ensp;Idade</i></label>
            <input type="number" class="form-control" id="idade" name="idade" placeholder="Idade">
        </div>
        <div class="form-group col-md-6">
            <label for="email"><i class="fa fa-envelope-o" style="font-size:14px">&ensp;Email</i></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        <div class="form-group">
            <label for="telefone"><i class='fa fa-phone' style='font-size:14px'>&ensp;Telefone</i></label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
        </div>
        <div class="form-group">
            <label for="mensagem"><i class="fa fa-commenting-o" style="font-size:14px">&ensp;Coloque sua mensagem aqui!</i></label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
        </div>
    </div>
        <div class="botoes">
                <button type="submit">Enviar</button>
                <button type="reset">Limpar</button>
                </div>
        </form>
        <?php include 'include-site/footer.php'; ?>
            </body>
        </html>




