<?php
defined('BASEPATH') or exit('No direct script access allowed');
$autoload['packages'] = array();
$autoload['libraries'] = array('form_validation', 'session', 'database');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'form', 'latihanci3_helper');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('ModelUser', 'ModelBuku', 'Sepatu_model');
