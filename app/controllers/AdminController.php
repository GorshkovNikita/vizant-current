<?php

class AdminController extends BaseController {

    public function getIndex() {

        if (Auth::check()) {
            return Redirect::to('admin/panel');
        }
        else {
            return Redirect::to('admin/login');
        }

    }

    public function getLogin() {

        //User::init();
        if (Auth::check()) {
            return Redirect::to('admin/panel');
        }
        else {
            return View::make('admin.login');
        }

    }

    public function postLogin() {

        $input = Input::all();
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $v = Validator::make($input, $rules);

        if ($v->fails()) {
            return Redirect::to('/admin/login')->withErrors($v);
        }
        else {
            if (User::login($input)) {
                return Redirect::to('/admin/panel');
            }
            else {
                return Redirect::to('/admin/login')->withInput()->withErrors('That username/password combo does not exist.');
            }
        }

    }

    public function getPanel() {

        if (Auth::check()) {
            $orders = Order::getById(5);
            return View::make('admin.panel')->with('orders', $orders);
        }
        else {
            return Redirect::to('admin/login');
        }

    }

} 