<?php
/**
 * Interface TabuleiroInterface
 *
 * PHP version 5.6.8
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category Game
 * @package  Webdev\TabuleiroInterface
 * @author   Cristiano Azevedo <cristianodasilva.azevedo@gmail.com>
 * @author   Márcio Augusto Reis <augustoreis36@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://www.unicesumar.edu.br/
 *
 */

namespace Webdev\TabuleiroInterface;

/**
 * Interface TabuleiroInterface
 *
 * PHP version 5.6.8
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category Game
 * @package  Webdev\TabuleiroInterface
 * @author   Cristiano Azevedo <cristianodasilva.azevedo@gmail.com>
 * @author   Márcio Augusto Reis <augustoreis36@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://www.unicesumar.edu.br/
 *
 */
interface TabuleiroInterface
{
    /**
     * function criarTabuleiro
     *
     * @return void
     */
    public function criarTabuleiro();

    /**
     * @param array $tabuleiro
     *
     * @return void
     */
    public function salvarTabuleiro($tabuleiro);

    /**
     * @return boolean
     */
    public function existeTabuleiro();
}