<?php
    class Photo extends Eloquent {
        protected $table        = 'photo';
        protected $primaryKey   = 'idphoto';
        
        public $timestamps      = false;
    }
?>