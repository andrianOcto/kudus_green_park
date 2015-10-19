<?php
    class Jenis extends Eloquent {
        protected $table        = 's_jenis_rth';
        protected $primaryKey   = 'id';
        
        public $timestamps      = false;
    }