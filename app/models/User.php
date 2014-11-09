<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';

    protected $primaryKey = 'id';

	protected $hidden = array('password', 'remember_token');

    public static function login($input) {

        $credentials = [
            'email' => $input['email'],
            'password' => $input['password']
        ];

        if (Auth::attempt($credentials)) {
            return true;
        }
        else {
            return false;
        }

    }

    public static function init() {

        DB::table('users')->insert([
            'email'      => 'nikita1104@mail.ru',
            'password'   => Hash::make('11gornik04'),
            'tel' => '123-12-12',
            'firstname' => 'Nikita',
            'lastname'  => 'Gorshkov',
            'type' => 'admin',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

    }

}
