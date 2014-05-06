<?php
App::uses('AppController', 'Controller');

class WelcomeController extends AppController {
    public function beforeFilter(){
        $this->Auth->allow('index');
    }

    public function index(){
        $headerText = 'Welcome';
        $this->set('headerText', $headerText);
    }

}