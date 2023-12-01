<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {

        $persons = [
            [
                'id'=> 1,
                'name' => 'Иван',
                'age' => 20,
                'job' => 'Учитель'

            ],
            [
                'id'=> 2,
                'name' => 'Юля',
                'age' => 23,
                'job' => 'Водитель'

            ],
            [
                'id'=> 3,
                'name' => 'Саня',
                'age' => 40,
                'job' => 'Доктор'

            ],
            [
                'id'=> 4,
                'name' => 'Алеха',
                'age' => 30,
                'job' => 'Военный'

            ]
        ];
        return $persons;

    }
}
