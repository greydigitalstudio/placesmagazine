<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Journal;

use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals = Journal::all();
        return view('admin.journals.index', compact('journals'));
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
        return view('admin.journals.create', compact('tags', 'categories'));
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
        $journal_date = new Carbon($datetime);
        $endtime = new Carbon($datetime2);

        $image = $request->file('main_photo');

        $fileName = rand() . '.' . $image->getClientOriginalExtension();
        $file = Storage::disk('public')->putFileAs('uploads', $image, $fileName);

        
        $journal = new Journal($request->all());
        $journal->main_photo = $fileName;
        $journal->popular = $request['popular'] == 'true' ? true : false;
        $journal->recomended = $request['recomended'] == 'true' ? true : false;
        $journal->checked = $request['checked'] == 'true' ? true : false;
        $journal->pg = $request['pg'] == 'true' ? true : false;
        $journal->event_datetime = $journal_date;
        $journal->endtime = $endtime;
        // dd($journal);
        
        $journal->save();

        if ($request->event_tags) {
            $journal->tags()->sync($request->event_tags);
        }
        if ($request->event_categories && $request->event_categories[0] !== "Нет записей") {
            $journal->categories()->sync($request->event_categories);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $journal = Journal::where('id', $id)->firstOrFail();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.journals.edit', compact('journal', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Journal  $journal
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

        $journal = Journal::where('id', $id)->firstOrFail();


        if (!empty($request->main_photo)) {
            
            $image = $request->file('main_photo');

            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $file = Storage::disk('public')->putFileAs('uploads', $image, $fileName);

            $journal->main_photo = $fileName;
        }

        $datetime = "$request->event_date $request->event_time";
        $datetime2 = "$request->event_date $request->endtime";
        $journal_date = new Carbon($datetime);
        $endtime = new Carbon($datetime2);

        
        $journal->popular = $request['popular'] == 'true' ? true : false;
        $journal->recomended = $request['recomended'] == 'true' ? true : false;
        $journal->checked = $request['checked'] == 'true' ? true : false;
        $journal->pg = $request['pg'] == 'true' ? true : false;
        $journal->event_datetime = $journal_date;
        $journal->endtime = $endtime;

        $journal->name = $request['name'];
        $journal->price = $request['price'];
        $journal->description = $request['description'];
        $journal->content = $request['content'];
        $journal->occasion = $request['occasion'];
        $journal->min_guests = $request['min_guests'];
        $journal->max_guests = $request['max_guests'];
        $journal->transfer = $request['transfer'];
        $journal->place = $request['place'];
        $journal->address = $request['address'];

        // dd($request->event_categories);
        if ($request->event_tags) {
            $journal->tags()->sync($request->event_tags);
        }
        if ($request->event_categories && $request->event_categories[0] !== "Нет записей") {
            $journal->categories()->sync($request->event_categories);
        }
        $journal->save();

        // dd($journal->tags->toArray());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journal = Journal::where('id', $id)->firstOrFail();
        $journal->tags()->sync([]);
        $journal->categories()->sync([]);
        $journal->delete();

        return redirect()->back();
    }
}
