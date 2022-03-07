<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $rules =
        [
            'title' => 'required | max:255',
        ];

    public function saveFormData($item, $request)
    {
        if (isset($request->title)) $item->title = $request->title;
        if (isset($request->description)) $item->description = $request->description;
        if (isset($request->document)) $item->document = $request->document;
        $item->save();
        return $item;
    }
}
