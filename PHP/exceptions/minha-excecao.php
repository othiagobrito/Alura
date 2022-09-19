<?php

class MinhaExcecao extends DomainException
{
    public function exibeVinicius()
    {
        echo "Vinicius";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $th) {
    $th->exibeVinicius();
}
