<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }
}
