<?php

namespace Moovin\Job\Backend;

/**
 * Classe de exemplo
 *
 * @author Matheus Gonzaga <matheus.gonzaga@moovin.com.br>
 */
class Exemplo
{
    /*$contaCorrente = 1;
    $contaPoupanca = 2;
    $taxaCC = 2.5;
    $taxaCP = 0.80;
    $deposito = 0;
    $saque = 0;
    $tranferencia = 0;
    $saldo = 0;*/
    /**
     * M�todo de exemplo
     *
     * @return string
     */
    public function exemplo()
    {
        // saque
        $taxaCC = 2.5;
        $taxaCP = 0.80;
        //  1: conta corrente | 2: conta poupança
        $tipoConta = 1;
        $saldo = 502.5;
        $saque = 500;
        if($tipoConta==1){
            $saque+=$taxaCC;
            if($saque<=$saldo){
                $saldo = $saldo-$saque;
                return "\nSaque aprovado\nSaldo: ".$saldo."\n\n";
            }else{
                return "\nSaque reprovado\n\n";
            }
        }elseif($tipoConta==2){
            $saque+=$taxaCP;
            if($saque<=$saldo){
                return "\nSaque aprovado\n\n";
            }else{
                return "\nSaque reprovado\n\n";
            }
        }
        //return "\nExemplo\n\n";
    }


}