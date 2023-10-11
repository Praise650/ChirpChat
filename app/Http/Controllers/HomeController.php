<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Home;
use App\Models\Idea;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ideas = new Idea();
        // $idea->post = 'Hello, World! this is Praise voice echoing from the kitchen he nearly burnt because of bug';
        // $ideas->post = "Sorry love, Hope you didn't get injured";
        // $ideas->likes = 1;
        // $ideas->save();
        // dump(Idea::all());
        $users = [
            [
                'name'=> "Praise Afuwape",
                'age'=> 22,
            ],
            [
                'name'=> "Sanmi Afuwape",
                'age'=> 17,
            ],
        ];
        return view(
            'home',
            [
                'users' =>$users,
                'ideas' => Idea::orderBy('created_at','DESC')->get(),
            ],
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
