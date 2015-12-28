<?php

namespace Sped\Gnre\Webservice\Result;

/**
 * @TODO Comentar Classe
 * @author Victor Simonetti <victor.moura@pentagrama.com.br>
 */
class ConnectionResult 
{
	private $soapResponse;

	protected $alias = 'ns1';
	protected $namespace = 'http://www.gnre.pe.gov.br';

	public function __construct($soapResponse)
	{
		$this->soapResponse = $soapResponse;
		$this->parsedResponse = simplexml_load_string($this->soapResponse);
		$this->parsedResponse->registerXPathNamespace($this->alias, $this->namespace);
	}

	public function __toString()
	{
		return $this->soapResponse;
	}
}