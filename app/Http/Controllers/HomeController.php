<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profile = auth()->user()->profile;
        return view('pages.admin.home', compact('profile'));
    }

    public function updateData(ProfileRequest $request)
    {
        $request->validated();
        $user = auth()->user();

        $user->profile()->updateOrCreate(
            ['user_id' => $user->id],
            $request->all()
        );

        return redirect()->route('home')->withSuccess('Updated Successfully!');
    }
}
