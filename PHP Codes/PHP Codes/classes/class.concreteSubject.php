<?php    
    include_once('../global.php');
    class concreteSubject extends subject {
        protected int $subjectState;  

        public function getState() {
            return $this->subjectState;
        }

        public function setState( $p_state ) {
            $this->subjectState = $p_state;
            $this->notify();
        }
        
    }