<?php


namespace App\Http\Controllers;
use App\Models\Diary;
use Illuminate\Http\Request;
use Auth;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('error', 'You need to register before you can access this page.');
        }
        $user = Auth::user();
        $diaries = Diary::orderBy('created_at', 'desc')->where('user_id', $user->id)->get();
        return view('diary.index')->with('diaries', $diaries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('error', 'You need to register before you can access this page.');
        }
        return view('diary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('error', 'You need to register before you can access this page.');
        }
        $user = Auth::user();
        $data = $request->toArray();
        $data['user_id'] = $user->id;
        Diary::create($data);
        return redirect('/diary');
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
    public function destroy(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('error', 'You need to register before you can access this page.');
        }

        Diary::where('id', $request->id)->delete();
        return redirect('/diary');
    }

    public function updateDiary(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('error', 'You need to register before you can access this page.');
        }
        $data = $request->only(['msg']);
        Diary::where('id', $request->id)->update($data);
        return redirect('/diary');
    }


    public function updateView($id)
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('error', 'You need to register before you can access this page.');
        }
        $diary = Diary::where('id', $id)->first();
        return view('diary.edit')->with('diary', $diary);
    }
}
