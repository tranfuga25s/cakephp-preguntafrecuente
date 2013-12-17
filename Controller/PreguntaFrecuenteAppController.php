<?php

class PreguntaFrecuenteAppController extends AppController {

    public function beforeFilter() {
        $this->Auth->allow( '*' );
        parent::beforeFilter();
    }
    
    public function isAuthorized( $user )  {
        return true;
    }
    
}

?>