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
namespace CnabPHP\resources\B133\remessa\cnab240;
use CnabPHP\resources\generico\remessa\cnab240\Generico3;

class Registro3Q extends Generico3
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
            'default'=>'1',
            'tipo'=>'int',
            'required'=>true),
        'segmento'=>array(
            'tamanho'=>1,
            'default'=>'Q',
            'tipo'=>'alfa',
            'required'=>true),
        'filler1'=>array(
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_movimento'=>array(
            'tamanho'=>2,
            'default'=>'01', // 01 = Remessa; 02 = Pedido de Baixa; 04 = Concessão de Abatimento; 
                             // 05 = Cancelamento de Abatimento; 06 = Alteração de Vencimento; 09 = Protestar
                             // 10 = Cancela/Sustação da instrução de protesto; 11 = Sustar Protesto e Manter em Carteira
            'tipo'=>'int',
            'required'=>true),
        'tipo_inscricao'=>array(
            'tamanho'=>1,
            'default'=>'1', // 1=CPF, 2=CNPJ
            'tipo'=>'int',
            'required'=>true),
        'numero_inscricao'=>array(
            'tamanho'=>15,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'nome_pagador'=>array(
            'tamanho'=>40,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'endereco_pagador'=>array(
            'tamanho'=>40,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'bairro_pagador'=>array(
            'tamanho'=>15,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'cep_pagador'=>array(
            'tamanho'=>8,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'cidade_pagador'=>array(
            'tamanho'=>15,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'uf_pagador'=>array(
            'tamanho'=>2,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'tipo_inscricao_avalista'=>array(
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'numero_inscricao_avalista'=>array(
            'tamanho'=>15,
            'default'=>'000000000000000',
            'tipo'=>'alfa',
            'required'=>true),
        'nome_avalista'=>array(
            'tamanho'=>40,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'filler2'=>array(
            'tamanho'=>3,
            'default'=>'000',
            'tipo'=>'alfa',
            'required'=>true),
        'filler3'=>array(
            'tamanho'=>20,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),  
        'filler4'=>array(
            'tamanho'=>8,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true)
    );
}
?> 