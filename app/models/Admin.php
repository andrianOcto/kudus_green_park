<?php
    class Admin extends Eloquent {
        protected $table        = 'user';
        protected $primaryKey   = 'iduser';
        
        public $timestamps      = false;
    }
?>