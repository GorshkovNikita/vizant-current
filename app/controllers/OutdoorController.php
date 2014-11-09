<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 24.10.14
 * Time: 21:40
 */

class OutdoorController extends BaseController {

    public function getIndex($name = NULL) {

        $types = [
            'Вывеска', 'Световой короб', 'Объемные буквы', 'Стенд', 'Оформление фасада'
        ];

        $types_of_work = NULL;

        if ($name != NULL) {

            $url = 'naruzhnaya-reklama.'.$name;
            return View::make($url)->with('types', $types)->with('types_of_work', $types_of_work);
        }
        else {
            return View::make('naruzhnaya-reklama')->with('types' , $types)->with('types_of_work', $types_of_work);
        }

    }

} 