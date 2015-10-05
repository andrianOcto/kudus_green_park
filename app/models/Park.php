<?php
    class Park extends Eloquent {
        protected $table        = 'park';
        protected $primaryKey   = 'idpark';
        
        public $timestamps      = false;
    }
?>