<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 22.02.15
 * Time: 22:13
 */

class SummerGroundsController extends BaseController {

    public function getIndex($name = NULL) {

        $types = [
            'Летнее кафе (веранда)', 'Зонт', 'Ограждение', 'Маркиз'
        ];

        $types_of_work = NULL;

        if ($name != NULL) {
            $url = 'letnie-ploshadki.'.$name;
            return View::make($url)->with('types' , $types)->with('types_of_work', $types_of_work);
        }
        else {
            return View::make('letnie-ploshadki')->with('types' , $types)->with('types_of_work', $types_of_work);
        }

    }

} 