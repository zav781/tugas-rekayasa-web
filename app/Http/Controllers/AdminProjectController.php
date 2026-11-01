<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'teknologi'   => 'required',
            'status'      => 'required',
            'image'       => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->hashName();
            $file->move(public_path('image'), $filename);
            $data['image'] = $filename;
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil ditambahkan');
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
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $project = Project::findOrFail($id);

        $data = $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'teknologi'   => 'required',
            'status'      => 'required',
            'image'       => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image && file_exists(public_path('image/' . $project->image))) {
                unlink(public_path('image/' . $project->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->hashName();
            $file->move(public_path('image'), $filename);
            $data['image'] = $filename;
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $project = Project::findOrFail($id);
        if ($project->image && file_exists(public_path('image/' . $project->image))) {
            unlink(public_path('image/' . $project->image));
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus');
    }
}
