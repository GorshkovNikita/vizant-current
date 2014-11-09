<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 24.10.14
 * Time: 22:09
 */

class InteriorController extends BaseController {

    public function getIndex($name = NULL) {

        $types = [
            'Вывеска', 'Световой короб', 'Объемные буквы', 'Стенд', 'Комплексное оформление'
        ];

        $types_of_work = NULL;

        if ($name != NULL) {
            $url = 'interernaya-reklama.'.$name;
            return View::make($url)->with('types', $types)->with('types_of_work', $types_of_work);
        }
        else {
            return View::make('interernaya-reklama')->with('types', $types)->with('types_of_work', $types_of_work);
        }

    }

} 