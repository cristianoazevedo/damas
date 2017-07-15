<?php
/**
 * Created by PhpStorm.
 * User: UniCesumar
 * Date: 15/07/2017
 * Time: 11:36
 */

include 'vendor/autoload.php';

$dama = new \Webdev\Entity\Dama();

$tabuleiro = new \Webdev\Entity\Tabuleiro();
$tabuleiro->criarTabuleiro();