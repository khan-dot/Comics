<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.index');
    }
     public function about()
    {
        return view('Pages.about');
    }
     public function comicsList()
    {
        return view('Pages.comicsList');
    }
    
     public function contact()
    {
        return view('Pages.contact');
    }
     public function register()
    {
        return view('Pages.register');
    }
      public function titles(request $request, string $name)
    {
        $data=[];
        $data['comic'] = Comic::where('comic', '=', $name)->first();
        $data['name']=$name;
        return view('pages.titles', $data);
    }
      public function chapter(request $request, string $name,string $no)
    {
         $data['name']=$name;
        $data['no']=$no;
        return view('pages.chapter', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
