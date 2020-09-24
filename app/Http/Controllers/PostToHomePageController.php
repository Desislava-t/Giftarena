<?php

namespace App\Http\Controllers;

use App\PostToHomePage;
use Illuminate\Http\Request;

class PostToHomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.postToHomePage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:20',
            'content' => 'required|string|max:255',
        ]);

        PostToHomePage::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostToHomePage  $postToHomePage
     * @return \Illuminate\Http\Response
     */
    public function show(PostToHomePage $postToHomePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostToHomePage  $postToHomePage
     * @return \Illuminate\Http\Response
     */
    public function edit(PostToHomePage $postToHomePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostToHomePage  $postToHomePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostToHomePage $postToHomePage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostToHomePage  $postToHomePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostToHomePage $postToHomePage)
    {
        //
    }
}
