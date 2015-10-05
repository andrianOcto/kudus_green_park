<?php
    class User extends Eloquent {
        protected $table        = 'user';
        protected $primaryKey   = 'username';
        
        public $timestamps      = false;
    }
?>