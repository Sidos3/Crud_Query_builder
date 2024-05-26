<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\CrudePostRequest;

use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cruds = DB::table('cruds')->get();
        return view('Article.show', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CrudePostRequest $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'firstname' => 'required',
        // ]);
        DB::table('cruds')->insert([
            'name' => $request->name,
            'firstname' => $request->firstname
        ]);
        return redirect()->route('article.index')->with('success', '. تم الانشاء بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        DB::table('cruds')->where('id', $id)->delete();
        return redirect()->route('article.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $crud = DB::table('cruds')->where('id', $id)->first();
        return view('Article.edit', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        DB::table('cruds')->where('id', $id)->update([
            'name' => $request->name,
            'firstname' => $request->firstname
        ]);
        return redirect()->route('article.index')->with('success', '. تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //    DB::table('cruds')->where('id', $id)->delete();
        //     return redirect()->route('article.index');
    }
}
