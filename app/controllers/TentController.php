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
            'Летние кафе', 'Маркизы'
        ];

        $types_of_work = NULL;
        $type_gallery = 'kafe';

        if ($name != NULL) {
            $url = 'tentovie-konstrukcii.'.$name;
            return View::make($url)->with('types' , $types)->with('types_of_work', $types_of_work)
                ->with('type_gallery', $type_gallery);
        }
        else {
            return View::make('tentovie-konstrukcii')->with('types' , $types)
                ->with('types_of_work', $types_of_work)
                ->with('type_gallery', $type_gallery);
        }

    }

} 