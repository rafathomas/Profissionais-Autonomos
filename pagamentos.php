<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pagamento.css">

    <title>Pagamentos aceitos</title>
</head>

<body>
    <div class="container">
        <h1>Formas de pagamento aceitas</h1>
        <form class="form cf">
            <section class="plan cf">
                <h2>Marque as opções:</h2>
                <input type="checkbox" name="radio1" id="cartao" value="cartao"><label class="free-label four col" for="cartao">Cartão</label>
                <input type="checkbox" name="radio2" id="boleto" value="boleto" checked><label class="basic-label four col" for="boleto">Boleto</label>
                <input type="checkbox" name="radio3" id="dinheiro" value="dinheiro"><label class="premium-label four col" for="dinheiro">Dinheiro</label>
            </section>
            <input class="submit" type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>