<?php

namespace App;

class Calculadora
{

  /**
   * Variável que mostra o resultado 
   *
   * @var float
   */
  protected float $resultado;

  /**
   * Variáveis para o cálculo
   */
  protected $num1;
  protected $num2;

  /**
   * Variável que recebe o sinal da operação
   *
   * @var string
   */
  protected string $operacao;

  /**
   * Array de simbolos/operações permitidas
   *
   * @var array
   */
  protected array $sinais = ['*', '/', '-', '+'];

  /**
   * Classe Construtora
   * Inicialização das variáveis e recebe os numeros na linha de comandos
   */
  public function __construct()
  {
    do {

      $this->num1 = readline('Introduza o num1: ');
    } while (!is_numeric($this->num1));

    do {

      $this->num2 = readline('Introduza o num2: ');
    } while (!is_numeric($this->num2));

    do {

      $this->operacao = readline('Escolha uma das Operações [ * | + | - | / ]: ');
    } while (!in_array($this->operacao, $this->sinais));
  }

  /**
   * Função que efectua o calculo entre os valores
   *
   */
  public function calcular()
  {
    if ($this->operacao == '*') {
      $this->resultado = $this->multiplicar($this->num1, $this->num2);
      echo 'O Resultado é: ' . $this->resultado;
    } else if ($this->operacao == '+') {
      $this->resultado = $this->somar($this->num1, $this->num2);
      echo 'O Resultado é: ' . $this->resultado;
    } else if ($this->operacao == '/') {
      $this->resultado = $this->dividir($this->num1, $this->num2);
      echo 'O Resultado é: ' . $this->resultado;
    } else if ($this->operacao == '-') {
      $this->resultado = $this->subtrair($this->num1, $this->num2);
      echo 'O Resultado é: ' . $this->resultado;
    }
  }

  /**
   * Função que permite multiplicar 
   * Recebe dois parametros e retorna um numero do tipo float
   *
   * @param  float $num1
   * @param  float $num2
   *
   * @return float
   */
  public function multiplicar($num1, $num2): float
  {
    return $num1 * $num2;
  }

  /**
   * Função que permite somar
   * Recebe dois parametros e retorna um numero do tipo float
   *
   * @param  float $num1
   * @param  float $num2
   *
   * @return float
   */
  public function somar($num1, $num2): float
  {
    return $num1 + $num2;
  }

  /**
   * Função que permite dividir
   * Recebe dois parametros e retorna um numero do tipo float
   *
   * @param  float $num1
   * @param  float $num2
   *
   * @return float
   */
  public function dividir($num1, $num2): float
  {
    return $num1 / $num2;
  }

  /**
   * Função que permite subtrair
   * Recebe dois parametros e retorna um numero do tipo float
   *
   * @param  float $num1
   * @param  float $num2
   *
   * @return float
   */
  public function subtrair($num1, $num2): float
  {
    return $num1 - $num2;
  }
}
