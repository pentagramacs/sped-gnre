<?php

/**
 * Este arquivo é parte do programa GNRE PHP
 * GNRE PHP é um software livre; você pode redistribuí-lo e/ou 
 * modificá-lo dentro dos termos da Licença Pública Geral GNU como 
 * publicada pela Fundação do Software Livre (FSF); na versão 2 da 
 * Licença, ou (na sua opinião) qualquer versão.
 * Este programa é distribuído na esperança de que possa ser  útil, 
 * mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO a qualquer
 * MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
 * Licença Pública Geral GNU para maiores detalhes.
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU
 * junto com este programa, se não, escreva para a Fundação do Software
 * Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

namespace Sped\Gnre\Exception;

/**
 * Lança uma exceção caso o valor esteja errado
 * @package     gnre
 * @subpackage  exception
 * @author      Victor Simonetti <victor.moura@pentagrama.com.br>
 * @license     http://www.gnu.org/licenses/gpl-howto.html GPL
 * @version     1.0.0
 */
class IncorrectValue extends \Exception
{

    /**
     * Define uma mensagem padrão caso a exceção seja lançada
     * @param  string  $property Nome da propriedade
     * @since  1.0.0
     */
    public function __construct($property)
    {
        parent::__construct('O valor da propriedade "' . $property '" está incorreto.', NULL, NULL);
    }

}
