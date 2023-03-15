<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImageTrait;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
        return view('backend.cordinator.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.cordinator.videos.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->hasFile('image');
        if ($file) {
            $path =  $this->uploadImage($request, 'videos');
            if ($path) {
                try {
                    $video = Video::create([
                        'name' => $request->name,
                        'description' => $request->description,
                        'number' => $request->number,
                        'path' => $path,
                        'category_id' => $request->category_id,
                    ]);
                    return redirect()->route('videos.index')->with('success', 'Video Added Successfuly');
                } catch (\Exception $th) {
                    return back()->with('error', 'Added Faild');
                }
            }
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('backend.cordinator.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $file = $request->hasFile('image');
        if ($file) {
            $path =  $this->uploadImage($request, 'videos');
            if ($path) {

                try {
                    $video = Video::findOrFail($id);

                    $video->update([
                        'name' => $request->name,
                        'description' => $request->description,
                        'number' => $request->number,
                        'path' => $path,
                        'category_id' => $request->category_id,
                    ]);
                    return redirect()->route('videos.index')->with('success', 'Video Updated Successfuly');
                } catch (\Exception $th) {
                    return redirect()->route('video.index');
                }
            }
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return $id;
        try {
            $video = Video::findOrFail($id);
            $video->delete();
            return redirect()->route('videos.index')->with('success', 'Video deleted success');
        } catch (\Exception $th) {
            return redirect()->route('videos.index')->with('success', 'Video deleted failed');
        }
    }
}


