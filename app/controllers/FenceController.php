<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 28.01.15
 * Time: 19:29
 */

class FenceController extends BaseController {

    public function getIndex() {

        $types = [
            'Ограждение'
        ];

        $types_of_work = NULL;
        $type_gallery = 'zonti';

        return View::make('dekorativnie-ograzhdenia')->with('types', $types)
            ->with('types_of_work', $types_of_work)
            ->with('type_gallery', $type_gallery);

    }

} 