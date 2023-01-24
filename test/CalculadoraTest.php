<?php​

use PHPUnit \Framework\TestCase;​

include './src/Calculadora.php';​

final class CalculadoraTest extends TestCase { ​
    
    public function testSuma()​ {
        $calc = new Calculadora(3,4);​
        $this->assertEquals(8, $calc->suma());    ​
    }
}​

?>​
