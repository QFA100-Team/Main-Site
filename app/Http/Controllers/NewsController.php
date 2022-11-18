<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsType;
use App\Models\User;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return News::all();
        $news = News::orderBy('id', 'desc')->simplePaginate(5);
        return view('news.news-index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //User has Staff Permission Marketing>
        if (Auth()->user()) {
            if(Auth()->user()->staff_details->power > 1) 
            $newstype = NewsType::all();
            return view('news.news-create')->with('newstype', $newstype);
        } else {
            return redirect('/news')->with('error', 'Insufficient permissions to access page');
        }       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'type_id' => 'required',
            'author_id' => 'required',
        ]);

        //Create News Article
        $news = new News;
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->type_id = $request->input('type_id');
        $news->author_id = $request->input('author_id');
        $news->save();

        return redirect('/news')->with('success', 'News Article Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return News::with('author')->with('author_roles')->get();
        $news = News::find($id);
        if (is_null($news)) return redirect('/news')->with('error', 'News article could not be found.');

        return view('news.news-show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return News::with('author')->with('author_roles')->get();
        $news = News::find($id);
        $newstype = NewsType::all();
        if (is_null($news)) return redirect('/news')->with('error', 'News article could not be found.');

        return view('news.news-edit')->with('news', $news)->with('newstype', $newstype);
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
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'type_id' => 'required',
        ]);

        //Create News Article
        $news = News::find($id);
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->type_id = $request->input('type_id');
        $news->updated_at = $request->input('updated_at');
        $news->save();

        return redirect('/news')->with('success', 'News Article Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth()->user()) {
            if(Auth()->user()->staff_details->power > 1) 
            $news = News::find($id);
            $news->delete();
            return redirect('/news')->with('success', 'News Article Deleted');
        } else {
            return redirect('/news')->with('error', 'Insufficient permissions to access page');
        }                
    }
}
