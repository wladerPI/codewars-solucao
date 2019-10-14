<?php
// Solution:
function find_average($array) {
  return array_sum($array) / count($array);
}
 
// Sample Tests:
// PHPUnit Test Examples:
// Escreva a função avg, que calcula a média de números na lista fornecida.
// Write function avg which calculates average of numbers in given list.

class CalculateAverageTest extends TestCase {
  public function testExamples() {
    $this->assertEquals(1, find_average([1, 1, 1]));
    $this->assertEquals(2, find_average([1, 2, 3]));
    $this->assertEquals(2.5, find_average([1, 2, 3, 4]));
  }
}
?> 
