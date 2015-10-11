<?php
    class Photo extends Eloquent {
        protected $table        = 'm_photo';
        protected $primaryKey   = 'idphoto';
        
        public $timestamps      = false;
    }
?>