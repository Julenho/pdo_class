<?php

declare(strict_typer=1);

class ContaBancaria

{

        private string $banco;
        private string $nomeTitular;
        private string $numeroAgencia;
        private string $numeroConta;
        private float $saldo;


        public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo)

        {
                $this->banco = $banco;
                $this->nomeTitular = $nomeTitular;
                $this->numeroAgencia = $numeroAgencia;
                $this->numeroConta = $numeroConta;
                $this->saldo = $saldo;

        }

        public function obterSaldo(): string

        {
                return 'seu saldo é: R$' . $this->saldo;
        }
         public function depositar(float $valor): string

        {
                $this->saldo += $valor;
                return 'Depósito de  R$' . $valor . ' realizado';
        }

        public function sacar(float $valor): string

        {
                $this->saldo -= $valor;
                return 'Saque de R$' . $valor . ' realizado';

        }


}

$conta = new ContaBancaria(

        'Original', //banco
        'Julio Almeida', //nomeTitular
        '222', //numeroAgencia
        '453-5', //numeroConta
        0 //saldo

);

echo $conta->obterSaldo();

echo '<br>';

echo $conta->depositar(300);

echo '<br>';
echo $conta->obterSaldo();

echo '<br>';

echo $conta->sacar(100);

echo '<br>';

echo $conta->obterSaldo();

echo '<br>';


