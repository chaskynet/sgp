<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH."/third_party/PHPepeExcel/PHPepeExcel.php"; 
 
class Excel extends PHPepeExcel { 
    public function __construct() { 
        parent::__construct(); 
    } 
}