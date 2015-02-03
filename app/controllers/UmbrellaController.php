<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 01.02.15
 * Time: 23:57
 */

class UmbrellaController extends BaseController {

    public function getIndex() {

        $types = [
            'Зонт'
        ];

        $types_of_work = NULL;

        return View::make('zonti')->with('types', $types)->with('types_of_work', $types_of_work);

    }

} 