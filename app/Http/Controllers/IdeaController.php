<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class IdeaController extends Controller
{
    public function store(){
        $idea = new Idea();
        $idea->post = request()->get('idea','');
        // $ideas->post = "Sorry love, Hope you didn't get injured";
        // $ideas->likes = 1;
        $idea->save();
        // dump(Idea::all());
        return redirect()->route('dashboard');
    }
}
