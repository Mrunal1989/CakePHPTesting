<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Controller\Controller;


class LoginController extends AppController{
    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout("login");
    }
    public function index(){
        
    }
    
    public function userLogin(){
        
    }
}