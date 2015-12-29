<?php
/**
* Sistema de contador de visitantes online
*
* @author Thiago Belem <contato@thiagobelem.net>
* @link http://thiagobelem.net/
*
* @version 1.0
* @package VisitantesOnline
*/
//  Configurações do Script
// ==============================

class VisitantesOnline{

  private $_VO;

  function __construct(){
    $this->_VO['registraAuto'] = true;       // Registra os visitantes automaticamente?
    $this->_VO['conectaMySQL'] = true;       // Abre uma conexão com o servidor MySQL?
    $this->_VO['cookieTempo'] = 20;          // Quantos minutos a visita dura
    $this->_VO['cookieNome'] = 'VisOnline';  // Nome do cookie usado para identificar o visitante
    $this->_VO['servidor'] = 'localhost';    // Servidor MySQL
    $this->_VO['usuario'] = 'root';          // Usuário MySQL
    $this->_VO['senha'] = '';                // Senha MySQL
    $this->_VO['banco'] = 'carto739_cartorio_net';            // Banco de dados MySQL
    $this->_VO['tabela_v'] = 'visitas_online'; // Tabela onde os visitantes online serão salvos
    $this->_VO['tabela_r'] = 'visitas_record'; // Tabela onde os recordes de visitas serão salvos

    // Verifica se precisa fazer a conexão com o MySQL
    if ($this->_VO['conectaMySQL'] == true) {
      $this->_VO['link'] = mysql_connect($this->_VO['servidor'], $this->_VO['usuario'], $this->_VO['senha']) or die("MySQL: Não foi possível conectar-se ao servidor [".$this->_VO['servidor']."].");
      mysql_select_db($this->_VO['banco'], $this->_VO['link']) or die("MySQL: Não foi possível conectar-se ao banco de dados [".$this->_VO['banco']."].");
    }

    if ($this->_VO['registraAuto'] == true) { $this->registraVisita(); }
  }

  /**
  * Gera o identificador do visitante baseado no IP e na hora
  */
  function geraIdentificador() {
    return sha1($this->_VO['cookieNome'].$_SERVER["REMOTE_ADDR"].microtime());
  }
  /**
  * Registra uma visita e/ou pageview para o visitante
  *  Esta funçaõ será chamada automaticamente dependendo de $this->_VO['registraAuto']
  */
  function registraVisita() {

    // Verifica se os headers já foram enviados. Caso tenham, é gerada uma mensagem de erro
    if (headers_sent()) {
      trigger_error("[VisitantesOnline] Por favor, insira o arquivo antes de qualquer HTML", E_USER_ERROR);
      return false;
    }
    // Verifica se é um visitante que já está no site (se o Cookie existe)
    if (isset($_COOKIE[$this->_VO['cookieNome']])) {
      $novo = false;
      $identificador = $_COOKIE[$this->_VO['cookieNome']];
    } else {
      $novo = true;
      $identificador = $this->geraIdentificador();
    }

     $atualizado = false; 
    // Se o visitante não é novo, tenta atualizar o registro dele na tabela
    if (!$novo) {
      $query = "UPDATE `".$this->_VO['tabela_v']."` SET `hora` = NOW() WHERE `identificador` = '".$identificador."' LIMIT 1";
      $resultado = mysql_query($query) or die(mysql_error());

      if ($resultado){
        $atualizado = (mysql_affected_rows() == 1);

      }
    }


    // Se o visitante é novo OU se o registro dele ele não foi atualizado, insere um novo registro na tabela
    if ($novo)  {
       
      $query = "INSERT INTO `".$this->_VO['tabela_v']."` VALUES (NULL, '".$_SERVER["REMOTE_ADDR"]."', '".$identificador."', NOW())";
      mysql_query($query) or die(mysql_error());
    }
    // Deleta todos os visitantes com mais de 20min no site, exceto o atual
    $query = "DELETE FROM `".$this->_VO['tabela_v']."` WHERE (`hora` <= (NOW() - INTERVAL ".$this->_VO['cookieTempo']." MINUTE)) AND `identificador` != '".$identificador."'";
    mysql_query($query);
    // Verifica se é preciso atualizar o recorde de visitas
    $recorde = $this->visitantesRecorde(); // Pega o recorde de visitantes
    $online = $this->visitantesOnline(); // Pega o n° de visitantes atual
    if ($recorde[1] < $online) {
      $query = "REPLACE INTO `".$this->_VO['tabela_r']."` SET `data` = NOW(), `visitantes` = ".$online;
      mysql_query($query);
    }
    // Atualiza o cookie com o identificador do visitante
    setcookie($this->_VO['cookieNome'], $identificador, time() + ($this->_VO['cookieTempo'] * 60), '/');
    return true;
  }
  /**
  * Função que retorna o total de visitantes online
  */
  function visitantesOnline() {

    try{
      // Faz a consulta no MySQL em função dos argumentos
      $sql = "SELECT COUNT(*) FROM `".$this->_VO['tabela_v']."`";
      $query = mysql_query($sql);

      $resultado = null;
      if ($query){
        $resultado = mysql_fetch_row($query);
      }
      
      // Retorna o valor encontrado ou zero
      return (!empty($resultado)) ? (int)$resultado[0] : 0;
    } catch(Exception $ex){

    }
  }
  /**
  * Função que retorna a data e o recorde de visitantes online
  */
  function visitantesRecorde($formato = 'd/m/Y') {
    // Faz a consulta no MySQL em função dos argumentos
    $sql = "SELECT `data`, `visitantes` FROM `".$this->_VO['tabela_r']."` LIMIT 1";
    $query = mysql_query($sql);

    $resultado = null;

    if ($resultado){
      $resultado = mysql_fetch_row($query);
    }
    // Retorna o valor encontrado ou zero
    return (!empty($resultado)) ? array(date($formato, strtotime($resultado[1])), (int)$resultado[1]) : array(date($formato), 0);
  }

}
