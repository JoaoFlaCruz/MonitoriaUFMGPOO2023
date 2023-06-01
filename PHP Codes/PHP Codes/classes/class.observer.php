<?php    
    include_once('../global.php');
    abstract class observer {

        abstract public function update( subject $p_subject );
        
    }