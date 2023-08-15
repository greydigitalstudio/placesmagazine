<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Tag;
use App\Models\Category;
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
        $categories = Category::all();
        return view('admin.events.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'endtime' => 'required',
            'occasion' => 'required',
            'min_guests' => 'required',
            'max_guests' => 'required',
            'transfer' => 'required',
            'place' => 'required',
            'main_photo' => 'required|mimes:jpg,png,webp',
        ]);
        
        $datetime = "$request->event_date $request->event_time";
        $datetime2 = "$request->event_date $request->endtime";
        $event_date = new Carbon($datetime);
        $endtime = new Carbon($datetime2);

        $image = $request->file('main_photo');

        $fileName = rand() . '.' . $image->getClientOriginalExtension();
        $file = Storage::disk('public')->putFileAs('uploads', $image, $fileName);

        
        $event = new Event($request->all());
        $event->main_photo = $fileName;
        $event->popular = $request['popular'] == 'true' ? true : false;
        $event->recomended = $request['recomended'] == 'true' ? true : false;
        $event->checked = $request['checked'] == 'true' ? true : false;
        $event->pg = $request['pg'] == 'true' ? true : false;
        $event->event_datetime = $event_date;
        $event->endtime = $endtime;
        // dd($event);
        
        $event->save();

        if ($request->event_tags) {
            $event->tags()->sync($request->event_tags);
        }
        if ($request->event_categories && $request->event_categories[0] !== "Нет записей") {
            $event->categories()->sync($request->event_categories);
        }

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
        $categories = Category::all();
        return view('admin.events.edit', compact('event', 'tags', 'categories'));
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
            'endtime' => 'required',
            'occasion' => 'required',
            'min_guests' => 'required',
            'max_guests' => 'required',
            'transfer' => 'required',
            'place' => 'required',
        ]);

        $event = Event::where('id', $id)->firstOrFail();


        if (!empty($request->main_photo)) {
            
            $image = $request->file('main_photo');

            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $file = Storage::disk('public')->putFileAs('uploads', $image, $fileName);

            $event->main_photo = $fileName;
        }

        $datetime = "$request->event_date $request->event_time";
        $datetime2 = "$request->event_date $request->endtime";
        $event_date = new Carbon($datetime);
        $endtime = new Carbon($datetime2);

        
        $event->popular = $request['popular'] == 'true' ? true : false;
        $event->recomended = $request['recomended'] == 'true' ? true : false;
        $event->checked = $request['checked'] == 'true' ? true : false;
        $event->pg = $request['pg'] == 'true' ? true : false;
        $event->event_datetime = $event_date;
        $event->endtime = $endtime;

        $event->name = $request['name'];
        $event->price = $request['price'];
        $event->description = $request['description'];
        $event->content = $request['content'];
        $event->occasion = $request['occasion'];
        $event->min_guests = $request['min_guests'];
        $event->max_guests = $request['max_guests'];
        $event->transfer = $request['transfer'];
        $event->place = $request['place'];
        $event->address = $request['address'];

        // dd($request->event_categories);
        if ($request->event_tags) {
            $event->tags()->sync($request->event_tags);
        }
        if ($request->event_categories && $request->event_categories[0] !== "Нет записей") {
            $event->categories()->sync($request->event_categories);
        }
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
