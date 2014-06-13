<?php
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        // !!! Cancella prima tutti gli utenti (se Presenti) !!!
        DB::table('users')->delete();
 
        User::create(array(
            'id'        => '1',
            'username'  => 'admin',
            'password'  => Hash::make('revamp'),
            'role'  => 'Administrator',
            'email' => 'admin@localhost' )); 
    }   
}
