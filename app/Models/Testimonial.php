<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    public $rules =
        [
            'name' => 'required | max:255',
            'company' => 'required | max:255',
            'description' => 'required | max:255',
            'document' => 'required | max:255',
        ];

    public function saveFormData($item, $request)
    {
        if (isset($request->name)) $item->name = $request->name;
        if (isset($request->company)) $item->company = $request->company;
        if (isset($request->description)) $item->description = $request->description;
        if (isset($request->document)) $item->document = $request->document;
        $item->save();

        return $item;
    }
}
