<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $data = [
            'comics' => $comics
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('comics.create');
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
        
        $formData = $request->all();
        $this->validation($formData);
        $newComic = new Comic;
        $newComic->title = $formData['title'];
        $newComic->description = $formData['description'];
        $newComic->thumb = $formData['thumb'];
        $newComic->price = $formData['price'];
        $newComic->series = $formData['series'];
        $newComic->sale_date = $formData['sale_date'];
        $newComic->type = $formData['type'];
        $newComic->save();
        return redirect()->route('comics.show', ['comic' => $newComic->id]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $findComic = Comic::findOrFail($id);
        $data=[
            'comic' => $findComic
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $findComic = Comic::findOrFail($id);
        $data=[
            'comic'=> $findComic
        ];
        return view('comics.edit', $data);
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
        $findComic= Comic::findOrFail($id);
        $formData = $request->all();
        $this->validation($formData);
        $findComic->update($formData);
        return redirect()->route('comics.show', ['comic' => $findComic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findComic = Comic::findOrFail($id);
        $findComic->delete();
        return redirect()->route('comics.index');
    }
    private function validation($data){
        $validator= Validator::make(
            $data, [
                'title'=>'required|min:5|max:90',
                'description'=>'min:5|max:1000',
                'price'=> 'required| max:6',
                'thumb'=> 'max:200',
                'series'=> 'max:50',
                'type'=> 'required'
            ]
            
        )->validate();
        return $validator;
    }
}
