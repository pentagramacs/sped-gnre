<?php

namespace Sped\Gnre\Webservice\Result;

use Sped\Gnre\Parser\SefazRetorno;

/**
 * @TODO Comentar Classe
 * @author Victor Simonetti <victor.moura@pentagrama.com.br>
 */
class ConsultaResult extends ConnectionResult 
{
	protected $ambiente;

	protected $codigo;

	protected $descricao;

	protected $numeroRecibo;

	protected $resultado;

	public function __construct($soapResponse)
	{
		parent::__construct($soapResponse);

		$ambienteArr = $this->parsedResponse->xpath('//ns1:ambiente');
		$ambiente = array_shift($ambienteArr);
		$this->ambiente = (int)$ambiente;

		$numeroReciboArr = $this->parsedResponse->xpath('//ns1:numeroRecibo');
		$numeroRecibo = array_shift($numeroReciboArr);
		$this->numeroRecibo = (int)$numeroRecibo;

		$situacaoProcessArr = $this->parsedResponse->xpath('//ns1:situacaoProcess');
		$situacaoProcess = array_shift($situacaoProcessArr);
		$situacaoProcess = $situacaoProcess->children('ns1', true);
		$this->codigo = (int)$situacaoProcess->codigo;
		$this->descricao = (string)$situacaoProcess->descricao;

		$resultadoArr = $this->parsedResponse->xpath('//ns1:resultado');
		$resultado = array_shift($resultadoArr);
		$this->resultado = (string)$resultado;

		$sefazRetorno = new SefazRetorno($this->resultado);
		$this->lote = $sefazRetorno->getLote();
	}

	public function getAmbiente() {
		return $this->ambiente;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function getCodigo() {
		return $this->codigo;
	}

	public function getNumero() {
		return $this->numeroRecibo;
	}

	public function getRecibo() {
		return $this->getNumero();
	}

	public function getResultado() {
		return $this->resultado;
	}

	public function getLote() {
		return $this->lote;
	}
}