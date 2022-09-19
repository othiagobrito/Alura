<?php

function a(): int
{
    try {
        echo 'Code';
        return 0;
    } catch (\Throwable $th) {
        echo 'Problem';
        return 1;
    } finally {
        echo 'Finally';
    }
}

echo a();
