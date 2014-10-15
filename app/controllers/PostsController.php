<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::guest()){
			return  View::make('posts.notlogin')->with('error', 'You have logged in successfully');
		}else{
			$posts = Post::where('user_id', Auth::user()->id )->get();
			return View::make('posts.index', compact('posts'));
		}
	}

	/**
	 * Show the form for creating a new post
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::guest()){
			return  View::make('posts.notlogin')->with('error', 'You have logged in successfully');
		}else{
			return View::make('posts.create');
		}
	}

	/**
	 * Show the form for creating a new post
	 *
	 * @return Response
	 */
	public function search()
	{
		$posts = Post::join('users', function($join)
		        {
		            $join->on('users.id', '=', 'posts.user_id')
		                 ->where('users.name', 'LIKE', '%'.Input::get('search').'%')
		                 ->orwhere('body', 'LIKE', '%'.Input::get('search').'%')
		                 ->orwhere('title', 'LIKE', '%'.Input::get('search').'%');
		        })->groupBy('posts.id')->get();
		$term = Input::get('search');
		return View::make('posts.search', compact('posts', 'term'));
	}

	/**
	 * Store a newly created post in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Post::$rules);
		$post = new Post;
        $post->title = Input::get('title');
        $post->body = Input::get('body');
        $post->user_id = Auth::user()->id;

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post->save();

		return Redirect::route('posts.index');
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		return View::make('posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit', compact('post'));
	}

	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post->update($data);

		return Redirect::route('posts.index');
	}

	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		return Redirect::route('posts.index');
	}

}
