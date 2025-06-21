<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use App\Traits\HandleImageUpload;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    use HandleImageUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = HeroSection::first();
        return view('admin.hero.index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:2048'],
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['required', 'string', 'max:255'],
            'counter_one' => ['nullable', 'string', 'max:255'],
            'counter_title_one' => ['nullable', 'string', 'max:255'],
            'counter_two' => ['nullable', 'string', 'max:255'],
            'counter_title_two' => ['nullable', 'string', 'max:255'],
            'counter_three' => ['nullable', 'string', 'max:255'],
            'counter_title_three' => ['nullable', 'string', 'max:255'],
            'counter_four' => ['nullable', 'string', 'max:255'],
            'counter_title_four' => ['nullable', 'string', 'max:255'],
        ]);

        $heroSection = HeroSection::first();

        if($request->hasFile('image')) {
            $imagePath = $this->uploadImage($request->file('image'));
        }else {
            $imagePath = $heroSection?->image ?? null;
        }

        HeroSection::updateOrCreate(
            ['id' => 1],
            [
                'image' => $imagePath,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'counter_one' => $request->counter_one,
                'counter_title_one' => $request->counter_title_one,
                'counter_two' => $request->counter_two,
                'counter_title_two' => $request->counter_title_two,
                'counter_three' => $request->counter_three,
                'counter_title_three' => $request->counter_title_three,
                'counter_four' => $request->counter_four,
                'counter_title_four' => $request->counter_title_four,
            ]

        );

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
