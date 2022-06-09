<?php

require_once 'funcoes.php';

$contasCorrentes = [
    'acc1' => [
        'titular' => 'Thiago',
        'saldo' => 5000
    ],
    'acc2' => [
        'titular' => 'Pedro',
        'saldo' => 2000
    ],
    'acc3' => [
        'titular' => 'João',
        'saldo' => 300
    ]
];

$contasCorrentes['acc1'] = sacar($contasCorrentes['acc1'], 500);
$contasCorrentes['acc2'] = sacar($contasCorrentes['acc2'], 500);
$contasCorrentes['acc3'] = depositar($contasCorrentes['acc3'], 500);


unset($contasCorrentes['acc2']);

$acc = 'acc1';
titularUpper($contasCorrentes[$acc]);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php
            foreach($contasCorrentes as $conta) {?>
                <dt>
                    <h3>Titular: <?=$conta['titular'];?></h3>
                </dt>

                <dd>
                    Saldo: <?=$conta['saldo']?>
                </dd>
        <?php } ?>
    </dl>
</body>
</html>