<?php
    class User extends Eloquent {
        protected $table        = 's_user';
        protected $primaryKey   = 'username';
        
        public $timestamps      = false;
    }
?>