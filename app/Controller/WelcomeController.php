<?php
App::uses('AppController', 'Controller');

class WelcomeController extends AppController {

    public function index(){
        $headerText = 'Welcome';
        $this->set('headerText', $headerText);
    }

}