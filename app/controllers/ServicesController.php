<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 28.10.14
 * Time: 15:38
 */

class ServicesController extends BaseController {

    public function getIndex($name = NULL) {

        $types = [
            'Наружная реклама', 'Интерьерная реклама', 'Тентовые конструкции'
        ];

        $types_of_work = [
            'Ремонт', 'Монтаж', 'Демонтаж'
        ];

        if ($name != NULL) {
            $url = 'uslugi.'.$name;
            return View::make($url)->with('types' , $types)->with('types_of_work', $types_of_work);
        }
        else {
            return View::make('uslugi')->with('types' , $types)->with('types_of_work', $types_of_work);
        }

    }

} 