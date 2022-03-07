<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;public $rules =
    [
        'title' => 'required | max:255',
        'publish_date' => 'required',
    ];

    public function saveFormData($item, $request)
    {
        if (isset($request->title)) $item->title = $request->title;
        if (isset($request->publish_date)) $item->publish_date = $request->publish_date;
        if (isset($request->description)) $item->description = $request->description;
        if (isset($request->document)) $item->document = $request->document;
        $item->save();
        return $item;
    }
}
