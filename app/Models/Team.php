<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public $rules =
        [
            'name' => 'required | max:255',
            'designation' => 'required | max:255',
            'email' => 'required | max:255',
            'whatsapp' => 'required | max:255',
            'twitter' => 'required | max:255',
        ];

    public function saveFormData($item, $request)
    {
        if (isset($request->name)) $item->name = $request->name;
        if (isset($request->designation)) $item->designation = $request->designation;
        if (isset($request->email)) $item->email = $request->email;
        if (isset($request->whatsapp)) $item->whatsapp = $request->whatsapp;
        if (isset($request->twitter)) $item->twitter = $request->twitter;
        if (isset($request->document)) $item->document = $request->document;
        $item->save();

        return $item;
    }
}
