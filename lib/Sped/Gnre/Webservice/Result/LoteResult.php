<?php

namespace Sped\Gnre\Webservice\Result;

/**
 * @TODO Comentar Classe
 * @author Victor Simonetti <victor.moura@pentagrama.com.br>
 */
class LoteResult extends ConnectionResult 
{
	protected $ambiente;

	protected $codigo;

	protected $descricao;

	protected $numero;

	protected $dataHora;

	protected $tempoEstimado;

	public function __construct($soapResponse)
	{
		parent::__construct($soapResponse);

		$tmpArr = $this->parsedResponse->xpath('//ns1:situacaoRecepcao');
		$tmpArr = array_shift($tmpArr);
		$recibo = $tmpArr->children('ns1', true);
		$this->ambiente = (string)$recibo->ambiente;
		$this->codigo = (int)$recibo->codigo;
		$this->descricao = (string)$recibo->descricao;

		$tmpArr = $this->parsedResponse->xpath('//ns1:recibo');
		$tmpArr = array_shift($tmpArr);
		$recibo = $tmpArr->children('ns1', true);
		$this->numero = (string)$recibo->numero;
		$this->tempoEstimado = (int)$recibo->tempoEstimadoProc;
		$this->dataHora = new \DateTime((string)$recibo->dataHoraRecibo);
	}

	public function getAmbiente() {
		return $this->ambiente;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function getCodigo() {
		return $this->codigo;
	}

	public function getRecibo() {
		return $this->getNumero();
	}

	public function getDataHora() {
		return $this->dataHora;
	}

	public function getTempoEstimado() {
		return $this->tempoEstimado;
	}
}