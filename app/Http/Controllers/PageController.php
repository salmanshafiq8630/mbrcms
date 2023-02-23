<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::latest()->paginate(5);
    
        return view('pages.index',compact('pages'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pages = Page::get();
        return view('pages.create')->with('pages',$pages);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'pageTitle' => 'required',
            'pageContent' => 'required',
        ]);

        $slug =  date('his').'-'.$this->slugify($request->input('pageTitle'));

        $data = array(
            'parent_id'=> $request->input('parent'),
            'slug'=> $slug,
            'title'=> $request->input('pageTitle'),
            'content'=> $request->input('pageContent'),
        );

        $result = Page::create($data);

        return redirect()->route('pages.index')->with('success','Page created successfully.');
        
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {   
        $page = Page::where('slug',$request->slug)->first();
        return view('pages.show')->with('page',$page);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $page = Page::where('id',$request->id)->first();
        $pages = Page::get();
        return view('pages.edit')->with('page',$page)->with('pages',$pages);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'pageTitle' => 'required',
            'pageContent' => 'required',
        ]);

        $slug =  date('his').'-'.$this->slugify($request->input('pageTitle'));

        $data = array(
            'parent_id'=> $request->input('parent'),
            'slug'=> $slug,
            'title'=> $request->input('pageTitle'),
            'content'=> $request->input('pageContent'),
        );

        $result = Page::where('id',$request->input('id'))->update($data);
       
        return redirect()->route('pages.index')->with('success','Page updated successfully');
       

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        
        $result = Page::where('id',$request->id)->delete();

        return redirect()->route('pages.index')
                        ->with('success','Page deleted successfully');
    
    }

    private function slugify($text, string $divider = '-')

    {
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
    return 'n-a';
    }

    return $text;
    }
    
    
}
