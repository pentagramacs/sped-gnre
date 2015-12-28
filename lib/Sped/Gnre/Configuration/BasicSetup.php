<?php

/**
 * Este arquivo é parte do programa GNRE PHP
 * GNRE PHP é um software livre; você pode redistribuí-lo e/ou 
 * modificá-lo dentro dos termos da Licença Pública Geral GNU como 
 * abstractada pela Fundação do Software Livre (FSF); na versão 2 da 
 * Licença, ou (na sua opinião) qualquer versão.
 * Este programa é distribuído na esperança de que possa ser  útil, 
 * mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO a qualquer
 * MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
 * Licença Pública Geral GNU para maiores detalhes.
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU
 * junto com este programa, se não, escreva para a Fundação do Software
 * Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

namespace Sped\Gnre\Configuration;

/**
 * Classe Básica de Setup
 * 
 * @package     gnre
 * @subpackage  configuration
 * @abstract
 * @author      Victor Simonetti <victor.moura@pentagrama.com.br>
 * @license     http://www.gnu.org/licenses/gpl-howto.html GPL
 * @version     1.0.0
 */
class BasicSetup extends Setup
{

    /**
     * Ambiente que será executado
     * @var integer
     */
    protected $enviroment = 1;

    /**
     * Caminho absoluto para o certificado.pem
     * @var string
     */
    protected $certificatePem;

    /**
     * Caminho absoluto para a chave privada
     * @var string
     */
    protected $certificatePrivateKey;

    /**
     * IP do Proxy
     * @var string
     */
    protected $proxyIp = '';

    /**
     * Porta do Proxy
     * @var integer
     */
    protected $proxyPort = 3128;

    /**
     * Usuário do Proxy
     * @var string
     */
    protected $proxyUser = '';

    /**
     * Senha do Proxy
     * @var string
     */
    protected $proxyPass = '';

    // not used for now
    protected $certificateDirectory;
    protected $certificateName;
    protected $certificatePassword;
    protected $certificateCnpj;
    protected $baseUrl;

    public function getEnvironment() {
        return (int)$this->enviroment;
    }

    public function getPrivateKey() {
        return $this->certificatePrivateKey;
    }

    public function getCertificatePemFile() {
        return $this->certificatePem;
    }

    public function getProxyIp() {
        return $this->proxyIp;
    }

    public function getProxyPort() {
        return $this->proxyPort;
    }

    public function getProxyUser() {
        return $this->proxyPort;
    }

    public function getProxyPass() {
        return $this->proxyPort;
    }

    public function setEnvironment($value) {
        (int)$this->enviroment = $value;
        return $this;
    }

    public function setPrivateKey($value) {
        $this->certificatePrivateKey = $value;
        return $this;
    }

    public function setCertificatePemFile($value) {
        $this->certificatePem = $value;
        return $this;
    }

    public function setProxyIp($value) {
        $this->proxyIp = $value;
        return $this;
    }

    public function setProxyPort($value) {
        $this->proxyPort = $value;
        return $this;
    }

    public function setProxyUser($value) {
        $this->proxyPort = $value;
        return $this;
    }

    public function setProxyPass($value) {
        $this->proxyPort = $value;
        return $this;
    }

    public function getCertificateDirectory() {
        // nothing
    }

    public function getCertificateName() {
        // nothing
    }

    public function getCertificatePassword() {
        // nothing
    }

    public function getBaseUrl() {
        // nothing
    }

    public function getCertificateCnpj() {
        // nothing
    }
}
