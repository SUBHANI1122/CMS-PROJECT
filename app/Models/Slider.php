<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    public $rules =
        [
            'title' => 'required | max:255',
        ];

    public function saveFormData($item, $request)
    {
        if (isset($request->title)) $item->title = $request->title;
        $item->document = $request->document ;
        $item->description = $request->description ;
        $item->save();

        return $item;
    }
}
