<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 28.10.14
 * Time: 15:02
 */

class DesignController extends BaseController {

    public function getIndex($name = NULL) {

        $types = [
            'Наружная реклама', 'Интерьерная реклама', 'Тентовые конструкции'
        ];

        $types_of_work = [
            'Дизайн'
        ];

        if ($name != NULL) {
            $url = 'razrabotka-disayna.'.$name;
            return View::make($url)->with('types', $types)->with('types_of_work', $types_of_work);
        }
        else {
            return View::make('razrabotka-disayna')->with('types', $types)->with('types_of_work', $types_of_work);
        }

    }

} 