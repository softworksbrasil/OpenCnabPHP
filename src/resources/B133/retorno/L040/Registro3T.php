<?php
/*
 * CnabPHP - Geração de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2013 Ciatec.net
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace CnabPHP\resources\B133\retorno\L040;
use CnabPHP\resources\generico\retorno\L040\Generico3;
use CnabPHP\RetornoAbstract;

class Registro3T extends Generico3
{
    protected $meta = array(
        'codigo_banco'=>array(
            'tamanho'=>3,
            'default'=>'133',
            'tipo'=>'int',
            'required'=>true),
        'codigo_lote'=>array(
            'tamanho'=>4,
            'default'=>1,
            'tipo'=>'int',
            'required'=>true),
        'tipo_registro'=>array(
            'tamanho'=>1,
            'default'=>'3',
            'tipo'=>'int',
            'required'=>true),
        'numero_registro'=>array(
            'tamanho'=>5,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'segmento'=>array(
            'tamanho'=>1,
            'default'=>'T',
            'tipo'=>'alfa',
            'required'=>true),
        'filler1'=>array(
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_movimento'=>array(
            /*  02 = Entrada Confirmada
                03 = Entrada Rejeitada
                04 = Transferência de Carteira/Entrada (NÃO TRATADO PELO BANCO)
                05 = Transferência de Carteira/Baixa (NÃO TRATADO PELO BANCO)
                06 = Liquidação
                07 = Confirmação do Recebimento da Instrução de Desconto (NÃO TRATADO PELO BANCO)
                08 = Confirmação do Recebimento do Cancelamento do Desconto (NÃO TRATADO PELO BANCO)
                09 = Baixa
                11 = Títulos em Carteira (Em Ser) (NÃO TRATADO PELO BANCO)
                12 = Confirmação Recebimento Instrução de Abatimento
                13 = Confirmação Recebimento Instrução de Cancelamento Abatimento
                14 = Confirmação Recebimento Instrução Alteração de Vencimento
                15 = Franco de Pagamento (NÃO TRATADO PELO BANCO)
                17 = Liquidação Após Baixa ou Liquidação Título Não Registrado b/c
                19 = Confirmação Recebimento Instrução de Protesto
                20 = Confirmação Recebimento Instrução de Sustação de Protesto
                23 = Remessa a Cartório (Aponte em Cartório)
                24 = Retirada de Cartório e Manutenção em Carteira
                25 = Protestado e Baixado (Baixa por Ter Sido Protestado)
                26 = Instrução Rejeitada (utilizar serviço Negativação)
                27 = Confirmação do Pedido de Alteração de Outros Dados
                28 = Débito de Tarifas/Custas
                29 = Ocorrências do Pagador (Não Tratar DDA)
                30 = Alteração de Dados Rejeitada
                33 = Confirmação da Alteração dos Dados do Rateio de Crédito
                34 = Confirmação do Cancelamento dos Dados do Rateio de Crédito
                35 = Confirmação do Desagendamento do Débito Automático
                36 = Confirmação de envio de e-mail/SMS (Não Tratar) 
                37 = Envio de e-mail/SMS rejeitado (Não tratar)
                38 = Confirmação de alteração do Prazo Limite de Recebimento (a data deve ser informada no campo 28.3.p) (NÃO TRATADO PELO BANCO)
                39 = Confirmação de Dispensa de Prazo Limite de Recebimento (NÃO TRATADO PELO BANCO)
                40 = Confirmação da alteração do número do título dado pelo beneficiario
                41 = Confirmação da alteração do número controle do Participante
                42 = Confirmação da alteração dos dados do Pagador
                43 = Confirmação da alteração dos dados do Sacador/Avalista
                44 = Título pago com cheque devolvido
                45 = Título pago com cheque compensado
                46 = Instrução para cancelar protesto confirmada (NÃO TRATADO PELO BANCO)
                47 = Instrução para protesto para fins falimentares confirmada
                48 = Confirmação de instrução de transferência de carteira/modalidade de cobrança (NÃO TRATADOPELO BANCO)
                49 = Alteração de contrato de cobrança (NÃO TRATADO PELO BANCO)
                50 = Título pago com cheque pendente de liquidação
                51 = Título DDA reconhecido pelo pagador (NÃO TRATADO PELO BANCO)
                52 = Título DDA não reconhecido pelo pagador (NÃO TRATADO PELO BANCO)
                53 = Título DDA recusado pela CIP (NÃO TRATADO PELO BANCO)
                54 = Confirmação da Instrução de Baixa de Título Negativado sem Protesto
                73 = Confirmação recebimento pedido de negativação
            */
            'tamanho'=>2,
            'default'=>'01',
            'tipo'=>'int',
            'required'=>true),
        // Os campos abaixo devem ser ajustados conforme o layout do PDF Cresol
        'agencia'=>array(
            'tamanho'=>5,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'digito_agencia'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'conta'=>array(
            'tamanho'=>12,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'digito_conta'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'digito_agencia_conta'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'nosso_numero'=>array(
            'tamanho'=>20,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'carteira'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'numero_documento'=>array(
            'tamanho'=>15,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'data_vencimento'=>array(
            'tamanho'=>8,
            'default'=>'00000000',
            'tipo'=>'int',
            'required'=>true),
        'valor_titulo'=>array(
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'numero_banco_cobrador'=>array(
            'tamanho'=>3,
            'default'=>'000',
            'tipo'=>'int',
            'required'=>true),
        'agencia_cobradora'=>array(
            'tamanho'=>5,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'digito_agencia_cobradora'=>array(
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'identificacao_titulo_empresa'=>array(
            'tamanho'=>25,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_moeda'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'tipo_inscricao_empresa'=>array(
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'inscricao_empresa'=>array(
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'nome_empresa'=>array(
            'tamanho'=>40,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'numero_contrato'=>array(
            'tamanho'=>10,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'vlr_tarifa'=>array(
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'identificacao_rejeicao'=>array(
            'tamanho'=>10,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'filler2'=>array(
            'tamanho'=>17,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true)
    );
}
?> 