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

class Registro3P extends Generico3
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
            'default'=>'P',
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
        // Os campos abaixo devem ser ajustados conforme o layout do PDF Cresol
        'agencia'=>array(
            'tamanho'=>5,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'filler2'=>array( //digito_agencia
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'conta'=>array(
            'tamanho'=>12,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'conta_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'filler3'=>array( //digito_agencia_conta
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'filler4'=>array( //identificacao_produto
            'tamanho'=>3,
            'default'=>'000',
            'tipo'=>'alfa',
            'required'=>true),
        'filler5'=>array( 
            'tamanho'=>5,
            'default'=>'00000',
            'tipo'=>'alfa',
            'required'=>true),
        'nosso_numero'=>array(
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'nosso_numero_dv'=>array(
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'filler6'=>array( //cod_carteira
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'alfa',
            'required'=>true),
        'filler6'=>array( //forma_cadastramento
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'filler7'=>array( //tipo_documento
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'alfa',
            'required'=>true),
        'emissao_boleto'=>array(
            'tamanho'=>1,
            'default'=>'2', //"1" = Banco Emitente; "2" = Cliente Emitente
            'tipo'=>'int',
            'required'=>true),
        'entrega_boleto'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'numero_inscricao'=>array(
            'tamanho'=>15,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'data_vencimento'=>array(
            'tamanho'=>8,
            'default'=>'0',
            'tipo'=>'date',
            'required'=>true),
        'valor'=>array(
            'tamanho'=>15,
            'default'=>'0', 
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'filler8'=>array( //agencia_cobradora
            'tamanho'=>5,
            'default'=>'00000',
            'tipo'=>'int',
            'required'=>true),
        'filler9'=>array( //digito_agencia_cobradora
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'especie_titulo'=>array(
             /* 01 = Cheque
                02 = Duplicata mercantil
                04 = Duplicata de serviço
                06 = Duplicata rural
                07 = Letra de câmbio
                12 = Nota promissória
                17 = Recibo
                19 = Nota de débito
                26 = Warrant
                27 = Dívida ativa de estado
                28 = Dívida ativa de município
                29 = Dívida ativa da união
                30 = Encargos condominiais
                99 = Outros
            */
            'tamanho'=>2,
            'default'=>'02',
            'tipo'=>'int',
            'required'=>true),
        'aceite'=>array(
            'tamanho'=>1,
            'default'=>'N',
            'tipo'=>'alfa',
            'required'=>true),
        'data_emissao'=>array(
            'tamanho'=>8,
            'default'=>'0',
            'tipo'=>'date',
            'required'=>true),
        'codigo_juros'=>array(
            'tamanho'=>1,
            'default'=>'1', // (real ao dia)
            'tipo'=>'int',
            'required'=>true),
        'data_juros'=>array(            
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'date',
			'required'=>true),
        'vlr_juros'=>array(
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'codigo_desconto'=>array(
            'tamanho'=>1,
            'default'=>'0', // 0=Sem desconto; 1=Com desconto;
            'tipo'=>'int',
            'required'=>true),
        'data_desconto'=>array(
            'tamanho'=>8,
            'default'=>'0',
            'tipo'=>'date',
            'required'=>true),
        'vlr_desconto'=>array(
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_IOF'=>array(
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_abatimento'=>array(
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'identificacao_titulo_empresa'=>array(
            'tamanho'=>25,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'protestar'=>array(
            'tamanho'=>1,
            'default'=>'3', // 1=protestar em x dias corridos; 3=não protestar
            'tipo'=>'int',
            'required'=>true),
        'prazo_protesto'=>array(
            'tamanho'=>2,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'baixar'=>array(
            'tamanho'=>1,
            'default'=>'1', 
            'tipo'=>'int',
            'required'=>true),
        'prazo_baixa'=>array(
            'tamanho'=>3,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_moeda'=>array(
            'tamanho'=>2,
            'default'=>'09',
            'tipo'=>'int',
            'required'=>true),
        'filler5'=>array(
            'tamanho'=>11,
            'default'=>'00000000000',
            'tipo'=>'alfa',
            'required'=>true)
    );

    protected function set_nosso_numero_dv($value) {       
        $this->data['nosso_numero_dv'] = self::digitoVerificadorNossoNumero( str_pad($this->entryData['carteira_banco'], 2, 0, STR_PAD_LEFT), str_pad($this->data['nosso_numero'], 11, 0, STR_PAD_LEFT) );
    }

    protected static function digitoVerificadorNossoNumero($carteira, $numero)
    {
        $base = $carteira . $numero; // Concatena carteira (2) + número (11) = 13 dígitos
        $soma = 0;
        $peso = 2;

        // Percorre da direita para a esquerda
        for ($i = strlen($base) - 1; $i >= 0; $i--) {
            $soma += $base[$i] * $peso;
            $peso = $peso == 7 ? 2 : $peso + 1;
        }

        $resto = $soma % 11;
        $digito = $resto == 0 ? 0 : 11 - $resto;
        
        // Se o dígito for maior que 9, retorna 0 (conforme laravel-boleto)
        if ($digito > 9) {
            $digito = "P";
        }

        // Retorna como 1 dígito
        return $digito;
    }
}
?> 