<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 24.10.14
 * Time: 21:40
 */

class TentController extends BaseController {

    public function getIndex($name = NULL) {

        $types = [
            'Летние кафе', 'Зонты', 'Веранды', 'Маркизы', 'Козырьки'
        ];

        $types_of_work = NULL;

        if ($name != NULL) {
            $url = 'tentovie-konstrukcii.'.$name;
            return View::make($url)->with('types' , $types)->with('types_of_work', $types_of_work);
        }
        else {
            return View::make('tentovie-konstrukcii')->with('types' , $types)->with('types_of_work', $types_of_work);
        }

    }

} 