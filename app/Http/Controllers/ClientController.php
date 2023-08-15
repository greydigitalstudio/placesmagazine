<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Tag;
use App\Models\Category;

class ClientController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $tags = Tag::all();
        $categories = Category::all();

        return view('client.index', compact('events', 'tags', 'categories'));
    }

    public function events()
    {
        $events = Event::all();
        $tags = Tag::all();
        $categories = Category::all();

        return view('client.events', compact('events', 'tags', 'categories'));
    }

    public function journal()
    {
        $events = Event::all();
        $tags = Tag::all();
        $categories = Category::all();

        return view('client.journal', compact('events', 'tags', 'categories'));
    }

    public function search()
    {
        $events = Event::all();
        $tags = Tag::all();
        $categories = Category::all();

        return view('client.search', compact('events', 'tags', 'categories'));
    }

    public function favorites()
    {
        $events = Event::all();
        $tags = Tag::all();
        $categories = Category::all();

        return view('client.favorites', compact('events', 'tags', 'categories'));
    }
}
