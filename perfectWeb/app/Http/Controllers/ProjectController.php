<?php

namespace App\Http\Controllers;


use App\Http\Resources\ProjectsResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Project;




class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('wedboards.index', compact('projects'));
    }

    public function create()
    {
        return view('wedboards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|max:255',
            'title_project' => 'required|max:255',
            'wed_date' => 'required|date',
            'wed_city' => 'nullable',
            'wed_postal_code' => 'nullable',
            'wed_address' => 'nullable',
            'budget' => 'nullable',
            'menu' => 'nullable',
            'hair' => 'nullable',
            'ring' => 'nullable',
            'makeup' => 'nullable',
            'decoration' => 'nullable',
            'wine' => 'nullable',
            'transport' => 'nullable',
            'animation' => 'nullable',
            'place_price' => 'nullable',
            'photo' => 'nullable',
            'costume' => 'nullable',
            'announcement' => 'nullable',
            'nb_guest' => 'nullable',
            'ceremony' => 'nullable',
            'flower' => 'nullable',
            'other' => 'nullable',
            'activated' => 'required',
        ]);
        $project = new Project([
            'user_id' => $request->get('user_id'),
            'title_project' => $request->get('title_project'),
            'wed_date' => $request->get('wed_date'),
            'wed_city' => $request->get('wed_city'),
            'wed_postal_code' => $request->get('wed_postal_code'),
            'wed_address' => $request->get('wed_address'),
            'budget' => $request->get('budget'),
            'menu' => $request->get('menu'),
            'hair' => $request->get('hair'),
            'ring' => $request->get('ring'),
            'makeup' => $request->get('makeup'),
            'decoration' => $request->get('decoration'),
            'wine' => $request->get('wine'),
            'transport' => $request->get('transport'),
            'animation' => $request->get('animation'),
            'place_price' => $request->get('place_price'),
            'photo' => $request->get('photo'),
            'costume' => $request->get('costume'),
            'announcement' => $request->get('announcement'),
            'nb_guest' => $request->get('nb_guest'),
            'ceremony' => $request->get('ceremony'),
            'flower' => $request->get('flower'),
            'other' => $request->get('other'),
            'activated' => $request->get('activated'),
        ]);

        $project->save();
        return redirect('/wedboards')->with('success', 'WedBoard saved!');

    }

    public function edit($id) {
        $project = Project::find($id);
        return view('wedboards.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|max:255',
            'title_project' => 'required|max:255',
            'wed_date' => 'required|date',
            'wed_city' => 'nullable',
            'wed_postal_code' => 'nullable',
            'wed_address' => 'nullable',
            'budget' => 'nullable',
            'menu' => 'nullable',
            'hair' => 'nullable',
            'ring' => 'nullable',
            'makeup' => 'nullable',
            'decoration' => 'nullable',
            'wine' => 'nullable',
            'transport' => 'nullable',
            'animation' => 'nullable',
            'place_price' => 'nullable',
            'photo' => 'nullable',
            'costume' => 'nullable',
            'announcement' => 'nullable',
            'nb_guest' => 'nullable',
            'ceremony' => 'nullable',
            'flower' => 'nullable',
            'other' => 'nullable',
            'activated' => 'required',
        ]);
        $project = Project::find($id);
        $project->user_id = $request->get('user_id');
        $project->title_project = $request->get('title_project');
        $project->wed_date = $request->get('wed_date');
        $project->wed_city = $request->get('wed_city');
        $project->wed_postal_code = $request->get('wed_postal_code');
        $project->wed_address = $request->get('wed_address');
        $project->budget = $request->get('budget');
        $project->menu = $request->get('menu');
        $project->hair = $request->get('hair');
        $project->ring = $request->get('ring');
        $project->makeup = $request->get('makeup');
        $project->decoration = $request->get('decoration');
        $project->wine = $request->get('wine');
        $project->transport = $request->get('transport');
        $project->animation = $request->get('animation');
        $project->place_price = $request->get('place_price');
        $project->photo = $request->get('photo');
        $project->costume = $request->get('costume');
        $project->announcement = $request->get('announcement');
        $project->nb_guest = $request->get('nb_guest');
        $project->ceremony = $request->get('ceremony');
        $project->flower = $request->get('flower');
        $project->other = $request->get('other');
        $project->activated = $request->get('activated');
        $project->save();
        return redirect('/wedboards')->with('success', 'WedBoard updated!');
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/wedboards')->with('success', 'Wedboard deleted!');
    }
}
