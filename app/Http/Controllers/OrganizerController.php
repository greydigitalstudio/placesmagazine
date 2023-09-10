<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizers = Organizer::all();
        return view('admin.organizers.index', compact('organizers'));
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
        $validated = $request->validate([
            'name' => 'required|unique:organizers|max:255',
            'main_logo' => 'required|mimes:jpg,png,webp',
        ]);

        $image = $request->file('main_logo');
        $fileName = rand() . '.' . $image->getClientOriginalExtension();
        $file = Storage::disk('public')->putFileAs('uploads', $image, $fileName);


        $organizer = new Organizer($request->all());
        $organizer->main_logo = $fileName;

        $organizer->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function show(Organizer $organizer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizer $organizer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:organizers|max:255',
        ]);

        $organizer = Organizer::where('id', $id)->firstOrFail();
        
        if (!empty($request->main_logo)) {
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $file = Storage::disk('public')->putFileAs('uploads', $image, $fileName);
            $organizer->main_logo = $fileName;
        }

        $organizer->name = $request['name'];

        $organizer->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organizer = Organizer::where('id', $id)->firstOrFail();

        $organizer->delete();

        return redirect()->back();
    }
}
