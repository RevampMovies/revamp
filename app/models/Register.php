<?php

use \Illuminate\Database\Eloquent\ModelNotFoundException;

class Register extends Eloquent {
        protected $guarded = array();
        protected $table = 'users'; // table name
        public $timestamps = 'false' ; // to disable default timestamp fields

        // model function to store form data to database
        public static function saveFormData($data)
        {
            DB::table('users')->insert($data);
        }

}
