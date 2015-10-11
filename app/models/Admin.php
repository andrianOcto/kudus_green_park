<?php
    class Admin extends Eloquent {
        protected $table        = 's_user';
        protected $primaryKey   = 'iduser';
        
        public $timestamps      = false;
    }
?>