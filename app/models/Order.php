<?php

class Order extends Eloquent {

    public static function add($data) {

        $order = new Order();

        $order->username = $data['order-user-name'];
        $order->email = $data['order-user-email'];
        $order->tel = $data['order-user-tel'];
        $order->typeproduct = $data['order-type-product'];
        $order->typework = $data['order-type-work'];
        $order->comment = $data['order-text'];
        $order->status = 'Оформлен';

        return $order;

    }

    public static function getById($id) {

        return Order::where('id', '=', $id, NULL)->get();

    }

    public static function saveOrder($order) {

        $order->save();

    }

}