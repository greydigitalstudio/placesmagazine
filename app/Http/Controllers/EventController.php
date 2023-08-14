<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Tag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.events.create', compact('tags'));
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
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'main_photo' => 'required|mimes:jpg,png,webp',
        ]);
        
        $datetime = "$request->event_date $request->event_time";
        $event_date = new Carbon($datetime);

        $image = $request->file('main_photo');

        $fileName = rand() . '.' . $image->getClientOriginalExtension();
        $file = Storage::disk('public')->putFileAs('uploads', $image, $fileName);

        
        $event = new Event($request->all());
        $event->main_photo = $fileName;
        $event->popular = $request['popular'] == 'true' ? true : false;
        $event->recomended = $request['recomended'] == 'true' ? true : false;
        $event->event_datetime = $event_date;
        $event->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::where('id', $id)->firstOrFail();
        $tags = Tag::all();
        return view('admin.events.edit', compact('event', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
        ]);

        $event = Event::where('id', $id)->firstOrFail();


        if (!empty($request->main_photo)) {
            
            $image = $request->file('main_photo');

            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $file = Storage::disk('public')->putFileAs('uploads', $image, $fileName);

            $event->main_photo = $fileName;
        }

        $datetime = "$request->event_date $request->event_time";
        $event_date = new Carbon($datetime);

        
        $event->popular = $request['popular'] == 'true' ? true : false;
        $event->recomended = $request['recomended'] == 'true' ? true : false;
        $event->event_datetime = $event_date;

        $event->name = $request['name'];
        $event->price = $request['price'];
        $event->description = $request['description'];
        $event->content = $request['content'];

        $event->tags()->sync($request->event_tags);
        $event->save();

        // dd($event->tags->toArray());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        dd($event);
    }
}
