<?php
    class Video extends Eloquent {
        protected $table        = 's_video';
        protected $primaryKey   = 'url';
        
        public $timestamps      = false;
    }