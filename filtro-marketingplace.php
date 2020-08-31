<?php
/*
Plugin Name: FilterInOrder
Plugin URI: 
Description: 
Version: 1.0
Author: Gabriel Madeira
Author URI: https://github.com/Madeiira

*/
//Security
if(!defined('ABSPATH')){
    exit("Acesso Negado");
}

//DEFINIÇÃO DE CONSTANTE DE DIRETORIO ABOSULUTO
define('FILTER_DIRETORIO_ABSOLUTO_DO_PLUGIN',plugin_dir_path(__FILE__));

// INCLUDES

require_once(FILTER_DIRETORIO_ABSOLUTO_DO_PLUGIN.'/includes/plugin-add-metadado-functions.php');
require_once(FILTER_DIRETORIO_ABSOLUTO_DO_PLUGIN.'/includes/plugin-add-filter-functions.php');
require_once(FILTER_DIRETORIO_ABSOLUTO_DO_PLUGIN.'/includes/plugin-add-metabox.php');