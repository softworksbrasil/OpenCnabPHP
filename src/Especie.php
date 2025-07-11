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

namespace CnabPHP;

class Especie {

    private $res = array();
    private $itau = array();
    private $caixa = array();
    private $bb = array();
    private $sicoob = array();
    private $sicredi = array();
    private $bradesco = array();
    private $santander = array();
    private $c6bank = array();
    private $bv = array();
    private $abc = array();
    private $cresol = array();
    private $banco;

    public function __construct($banco = null) {
        $this->caixa[1] = array('abr' => "CH", 'txt' => 'Cheque');
        $this->caixa[2] = array('abr' => "DM", 'txt' => 'Duplicata Mercantil');
        $this->caixa[3] = array('abr' => "DMI", 'txt' => 'Mercantil p/ Indicação');
        $this->caixa[4] = array('abr' => "DS", 'txt' => 'Duplicata de Serviço');
        $this->caixa[5] = array('abr' => "DSI", 'txt' => 'Duplicata de Serviço p/ Indicação');
        $this->caixa[6] = array('abr' => "DR", 'txt' => 'Duplicata Rural');
        $this->caixa[7] = array('abr' => "LC", 'txt' => 'Letra de Câmbio');
        $this->caixa[8] = array('abr' => "NCC", 'txt' => 'Nota de Crédito Comercial');
        $this->caixa[9] = array('abr' => "NCE", 'txt' => 'Nota de Crédito a Exportação');
        $this->caixa[10] = array('abr' => "NCI", 'txt' => 'Nota de Crédito a Exportação');
        $this->caixa[11] = array('abr' => "NCR", 'txt' => 'Nota de Crédito Rural');
        $this->caixa[12] = array('abr' => "NP", 'txt' => 'Nota Promissória');
        $this->caixa[13] = array('abr' => "NPR", 'txt' => 'Nota Promissória Rural');
        $this->caixa[14] = array('abr' => "TM", 'txt' => 'Triplicata Mercantil');
        $this->caixa[15] = array('abr' => "TS", 'txt' => 'Triplicata de Serviço');
        $this->caixa[16] = array('abr' => "NS", 'txt' => 'Nota de Seguro');
        $this->caixa[17] = array('abr' => "RC", 'txt' => 'Recibo');
        $this->caixa[18] = array('abr' => "FAT", 'txt' => 'Fatura');
        $this->caixa[19] = array('abr' => "ND", 'txt' => 'Nota de Débito');

        $this->bb[1] = array('abr' => "CH", 'txt' => 'Cheque');
        $this->bb[2] = array('abr' => "DM", 'txt' => 'Duplicata Mercantil');
        $this->bb[3] = array('abr' => "DMI", 'txt' => 'Mercantil p/ Indicação');
        $this->bb[4] = array('abr' => "DS", 'txt' => 'Duplicata de Serviço');
        $this->bb[5] = array('abr' => "DSI", 'txt' => 'Duplicata de Serviço p/ Indicação');
        $this->bb[6] = array('abr' => "DR", 'txt' => 'Duplicata Rural');
        $this->bb[7] = array('abr' => "LC", 'txt' => 'Letra de Câmbio');
        $this->bb[8] = array('abr' => "NCC", 'txt' => 'Nota de Crédito Comercial');
        $this->bb[9] = array('abr' => "NCE", 'txt' => 'Nota de Crédito a Exportação');
        $this->bb[10] = array('abr' => "NCI", 'txt' => 'Nota de Crédito a Exportação');
        $this->bb[11] = array('abr' => "NCR", 'txt' => 'Nota de Crédito Rural');
        $this->bb[12] = array('abr' => "NP", 'txt' => 'Nota Promissória');
        $this->bb[13] = array('abr' => "NPR", 'txt' => 'Nota Promissória Rural');
        $this->bb[14] = array('abr' => "TM", 'txt' => 'Triplicata Mercantil');
        $this->bb[15] = array('abr' => "TS", 'txt' => 'Triplicata de Serviço');
        $this->bb[16] = array('abr' => "NS", 'txt' => 'Nota de Seguro');
        $this->bb[17] = array('abr' => "RC", 'txt' => 'Recibo');
        $this->bb[18] = array('abr' => "FAT", 'txt' => 'Fatura');
        $this->bb[19] = array('abr' => "ND", 'txt' => 'Nota de Débito');

        $this->bradesco[1] = array('abr' => "DM", 'txt' => 'Duplicata');
        $this->bradesco[2] = array('abr' => "NP", 'txt' => 'Nota PromissÃ³ria');
        $this->bradesco[3] = array('abr' => "NS", 'txt' => 'Nota de Seguro');
        $this->bradesco[4] = array('abr' => "NS", 'txt' => 'Nota de Seguro');
        $this->bradesco[5] = array('abr' => "RC", 'txt' => 'Recibo');
        $this->bradesco[6] = array('abr' => "DR", 'txt' => 'Duplicata Rural');
        $this->bradesco[8] = array('abr' => "LC", 'txt' => 'Letra de CÃ¢mbio');
        $this->bradesco[9] = array('abr' => "WRT", 'txt' => 'Warrant');
        $this->bradesco[10] = array('abr' => "CH", 'txt' => 'Cheque');
        $this->bradesco[12] = array('abr' => "DS", 'txt' => 'Duplicata de ServiÃ£o');
        $this->bradesco[13] = array('abr' => "ND", 'txt' => 'Nota de DÃ©bito');
        $this->bradesco[14] = array('abr' => "TM", 'txt' => 'Triplicata Mercantil');
        $this->bradesco[15] = array('abr' => "TS", 'txt' => 'Triplicata de ServiÃ£o');
        $this->bradesco[18] = array('abr' => "FAT", 'txt' => 'Fatura');
        $this->bradesco[20] = array('abr' => "AP", 'txt' => 'ApÃ³lice de Seguros');
        $this->bradesco[21] = array('abr' => "ME", 'txt' => 'Mensalidade escolar');
        $this->bradesco[22] = array('abr' => "ME", 'txt' => 'Parcela de ConsÃ³rcio');
        $this->bradesco[99] = array('abr' => "DIV", 'txt' => 'Outros');

        $this->itau[1] = array('abr' => "DM", 'txt' => 'Duplicata Mercantil');
        $this->itau[2] = array('abr' => "NP", 'txt' => 'Nota Promissória');
        $this->itau[3] = array('abr' => "NS", 'txt' => 'Nota de Seguro');
        $this->itau[4] = array('abr' => "ME", 'txt' => 'Mensalidade escolar');
        $this->itau[5] = array('abr' => "RC", 'txt' => 'Recibo');
        $this->itau[6] = array('abr' => "CT", 'txt' => 'Contrato');
        $this->itau[7] = array('abr' => "CS", 'txt' => 'Cosseguros');
        $this->itau[8] = array('abr' => "DS", 'txt' => 'Duplicata de Serviço');
        $this->itau[9] = array('abr' => "LC", 'txt' => 'Letra de Câmbio');
        $this->itau[13] = array('abr' => "ND", 'txt' => 'Nota de Débito');
        $this->itau[15] = array('abr' => "DV", 'txt' => 'Documento de divida');
        $this->itau[16] = array('abr' => "EC", 'txt' => 'Encargos condominiais');
        $this->itau[17] = array('abr' => "CPS", 'txt' => 'Conta de prestação de serviço');
        $this->itau[18] = array('abr' => "DBP", 'txt' => 'Boleto de Proposta');
        $this->itau[99] = array('abr' => "DIV", 'txt' => 'Diversos');

        $this->sicoob[1] = array('abr' => "DM", 'txt' => 'Duplicata Mercantil');
        $this->sicoob[2] = array('abr' => "NP", 'txt' => 'Nota Promissória');
        $this->sicoob[3] = array('abr' => "NS", 'txt' => 'Nota de Seguro');
        $this->sicoob[5] = array('abr' => "RC", 'txt' => 'Recibo');
        $this->sicoob[6] = array('abr' => "DR", 'txt' => 'Duplicata Rural');
        $this->sicoob[8] = array('abr' => "LC", 'txt' => 'Letra de Câmbio');
        $this->sicoob[9] = array('abr' => "WRT", 'txt' => 'Warrant');
        $this->sicoob[10] = array('abr' => "CH", 'txt' => 'Cheque');
        $this->sicoob[12] = array('abr' => "DS", 'txt' => 'Duplicata de Serviço');
        $this->sicoob[13] = array('abr' => "ND", 'txt' => 'Nota de Débito');
        $this->sicoob[14] = array('abr' => "TM", 'txt' => 'Triplicata Mercantil');
        $this->sicoob[15] = array('abr' => "TS", 'txt' => 'Triplicata de Serviço');
        $this->sicoob[18] = array('abr' => "FAT", 'txt' => 'Fatura');
        $this->sicoob[20] = array('abr' => "AP", 'txt' => 'Apólice de Seguros');
        $this->sicoob[21] = array('abr' => "ME", 'txt' => 'Mensalidade escolar');
        $this->sicoob[22] = array('abr' => "ME", 'txt' => 'Parcela de ConsÃ³rcio');
        $this->sicoob[99] = array('abr' => "DIV", 'txt' => 'Outros');

        $this->sicredi['A'] = array('abr' => "DMI", 'txt' => 'Duplicata Mercantil por Indicação');
        $this->sicredi['B'] = array('abr' => "DR", 'txt' => 'Duplicata Rural');
        $this->sicredi['C'] = array('abr' => "NP", 'txt' => 'Nota Promissória');
        $this->sicredi['D'] = array('abr' => "NR", 'txt' => 'Nota Promissória Rural');
        $this->sicredi['E'] = array('abr' => "NS", 'txt' => 'Nota de Seguro');
        $this->sicredi['G'] = array('abr' => "RC", 'txt' => 'Recibo');
        $this->sicredi['H'] = array('abr' => "LC", 'txt' => 'Letra de Câmbio');
        $this->sicredi['I'] = array('abr' => "ND", 'txt' => 'Nota de Débito');
        $this->sicredi['J'] = array('abr' => "TS", 'txt' => 'Triplicata de Serviço');
        $this->sicredi['K'] = array('abr' => "DIV", 'txt' => 'Outros');

        $this->santander[2] = array('abr' => "DM", 'txt' => 'DUPLICATA MERCANTIL');
        $this->santander[4] = array('abr' => "DS", 'txt' => 'DUPLICATA DE SERVICO');
        $this->santander[7] = array('abr' => "LC", 'txt' => 'LETRA DE CÂMBIO (SOMENTE PARA BANCO 353)');
        $this->santander[30] = array('abr' => "LC", 'txt' => 'LETRA DE CÂMBIO (SOMENTE PARA BANCO 008)');
        $this->santander[12] = array('abr' => "NP", 'txt' => 'NOTA PROMISSORIA');
        $this->santander[13] = array('abr' => "NR", 'txt' => 'NOTA PROMISSORIA RURAL');
        $this->santander[17] = array('abr' => "RC", 'txt' => 'RECIBO');
        $this->santander[20] = array('abr' => "AP", 'txt' => 'APOLICE DE SEGURO');
        $this->santander[31] = array('abr' => "BCC", 'txt' => 'CARTÃO DE CRÉDITO');
        $this->santander[32] = array('abr' => "BDP", 'txt' => 'BOLETO DE PROPOSTA');
        $this->santander[33] = array('abr' => "BDA", 'txt' => 'BOLETO DE DEPOSITO E APORTE');
        $this->santander[97] = array('abr' => "CH", 'txt' => 'CHEQUE');
        $this->santander[98] = array('abr' => "ND", 'txt' => 'NOTA PROMISSORIA DIRETA');
        

        $this->abc[1] = array('abr' => "CH", 'txt' => 'Cheque');
        $this->abc[2] = array('abr' => "DM", 'txt' => 'Duplicata Mercantil');
        $this->abc[3] = array('abr' => "DMI", 'txt' => 'Mercantil p/ Indicação');
        $this->abc[4] = array('abr' => "DS", 'txt' => 'Duplicata de Serviço');
        $this->abc[5] = array('abr' => "DSI", 'txt' => 'Duplicata de Serviço p/ Indicação');
        $this->abc[6] = array('abr' => "DR", 'txt' => 'Duplicata Rural');
        $this->abc[7] = array('abr' => "LC", 'txt' => 'Letra de Câmbio');
        $this->abc[8] = array('abr' => "NCC", 'txt' => 'Nota de Crédito Comercial');
        $this->abc[9] = array('abr' => "NCE", 'txt' => 'Nota de Crédito a Exportação');
        $this->abc[10] = array('abr' => "NCI", 'txt' => 'Nota de Crédito a Exportação');
        $this->abc[11] = array('abr' => "NCR", 'txt' => 'Nota de Crédito Rural');
        $this->abc[12] = array('abr' => "NP", 'txt' => 'Nota Promissória');
        $this->abc[13] = array('abr' => "NPR", 'txt' => 'Nota Promissória Rural');
        $this->abc[14] = array('abr' => "TM", 'txt' => 'Triplicata Mercantil');
        $this->abc[15] = array('abr' => "TS", 'txt' => 'Triplicata de Serviço');
        $this->abc[16] = array('abr' => "NS", 'txt' => 'Nota de Seguro');
        $this->abc[17] = array('abr' => "RC", 'txt' => 'Recibo');
        $this->abc[18] = array('abr' => "FAT", 'txt' => 'Fatura');
        $this->abc[19] = array('abr' => "ND", 'txt' => 'Nota de Débito');
        
        $this->bv[1] = array('abr' => "CH", 'txt' => 'Cheque');
        $this->bv[2] = array('abr' => "DM", 'txt' => 'Duplicata Mercantil');
        $this->bv[4] = array('abr' => "DS", 'txt' => 'Duplicata de Serviço');
        $this->bv[31] = array('abr' => "CC", 'txt' => 'Cartão de Crédito');

        $this->cresol[1] = array('abr' => "CH", 'txt' => 'Cheque');
        $this->cresol[2] = array('abr' => "DM", 'txt' => 'Duplicata mercantil');
        $this->cresol[4] = array('abr' => "DS", 'txt' => 'Duplicata de serviço');
        $this->cresol[6] = array('abr' => "DR", 'txt' => 'Duplicata rural');
        $this->cresol[7] = array('abr' => "LC", 'txt' => 'Letra de câmbio');
        $this->cresol[12] = array('abr' => "NP", 'txt' => 'Nota promissória');
        $this->cresol[17] = array('abr' => "RC", 'txt' => 'Recibo');
        $this->cresol[19] = array('abr' => "ND", 'txt' => 'Nota de débito');
        $this->cresol[26] = array('abr' => "WRT", 'txt' => 'Warrant');
        $this->cresol[27] = array('abr' => "DAE", 'txt' => 'Dívida ativa de estado');
        $this->cresol[28] = array('abr' => "DAM", 'txt' => 'Dívida ativa de município');
        $this->cresol[29] = array('abr' => "DAU", 'txt' => 'Dívida ativa da união');
        $this->cresol[30] = array('abr' => "EC", 'txt' => 'Encargos condominiais');
        $this->cresol[99] = array('abr' => "DIV", 'txt' => 'Outros');


        $this->res['104'] = $this->caixa;
        $this->res['341'] = $this->itau;
        $this->res['001'] = $this->bb;
        $this->res['237'] = $this->bradesco;
        $this->res['336'] = $this->c6bank;
        $this->res['756'] = $this->sicoob;
        $this->res['748'] = $this->sicredi;
        $this->res['033'] = $this->santander;
        $this->res['084'] = $this->bradesco;
        $this->res['246'] = $this->abc;
        $this->res['655'] = $this->bv;
        $this->res['133'] = $this->cresol;

        $this->banco = $this->res[$banco];
    }

    public function getAbr($especie) {
        return $this->banco[$especie]['abr'];
    }

    public function getBanco() {
        return $this->banco;
    }

    public function getCodigo($abr) {
        foreach ($this->banco as $key => $especie) {
            if ($especie['abr'] == $abr) {
                return $key;
            }
        }
    }
}
