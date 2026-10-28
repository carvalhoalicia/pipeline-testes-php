
<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Validador.php';

class ValidadorTest extends TestCase
{
    public function testAceitaNomeValido(): void
    {
        $this->assertTrue(validarNome('Ana'));
    }

    public function testRejeitaNomeVazio(): void
    {
        $this->assertFalse(validarNome(''));
    }
}
