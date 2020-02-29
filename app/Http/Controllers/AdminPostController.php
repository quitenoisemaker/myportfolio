<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\PostsCreateRequest;

use Illuminate\Http\Request;
use App\post;
use App\User;
use App\photo;
use App\category;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $posts=post::all();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         $categories=category::pluck('name', 'id')->all();
        return view('admin.posts.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request)
    {
        //

        $input = $request->all();

         $user= Auth::user(); 

         if($file = $request->file('photo_id')) {

            $name =time() . $file->getClientOriginalName();
            // $request->file('photo_id')->storeAs('images', '$name');
            request()->file('photo_id')->move(public_path('images'), $name);
            $photo=photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }

        $user->posts()->create($input);

        return redirect('/admin/posts');
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

        
        $post=post::findOrFail($id);

         $categories=category::pluck('name', 'id')->all();

        return view('admin.posts.edit', compact('post', 'categories'));


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

        $input = $request->all();

         

         if($file = $request->file('photo_id')) {

            $name =time() . $file->getClientOriginalName();
            // $request->file('photo_id')->storeAs('images', '$name');
            request()->file('photo_id')->move(public_path('images'), $name);
            $photo=photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }

         Auth::user()->posts()->whereId($id)->first()->update($input);

        return redirect('/admin/posts');
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

        $post=post::findOrFail($id);

        unlink(public_path() . $post->photo->file);

        $post->delete();

        // Session::flash('deleted_user', 'The user has been deleted');

        return redirect('/admin/posts');


    }
}
