<?php

/**
 * Clase Calculadora
 * 
 * Esta clase realiza las operaciones de aritmética básicas de suma, resta, multiplicación y división.
 * 
 * @author Alexelgt
 * @version 0.2
 */
class Calculadora {
    /**
    * Realiza la suma de 2 números
    * 
    * @param int $a Valor que representa el primer operando
    * @param int $b Valor que representa el segundo operando
    * @return int Resultado de la operación
    */
   public function suma($a, $b) {
       return $a + $b;
   }
   
   /**
    * Realiza la resta de 2 números
    * 
    * @param int $a Valor que representa el primer operando
    * @param int $b Valor que representa el segundo operando
    * @return int Resultado de la operación
    */
   public function resta($a, $b) {
       return $a - $b;
   }
}

