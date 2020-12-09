<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Middleware\EncryptCookies;
use App\Models\Projects;
use App\Providers\JetstreamServiceProvider;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Providers\FoundationServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProjectsResource;
use Jenssegers\Agent\Agent;
use Laravel\Jetstream\Features;
use Laravel\Jetstream\Http\Controllers\Inertia\CurrentUserController;
use Laravel\Jetstream\Jetstream;
use Symfony\Component\Console\Helper\Helper;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();
        return response([ 'projects' => ProjectsResource::collection($projects), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
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
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $project = Projects::create($data);

        return response(['project' => new ProjectsResource($project), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $project)
    {
        return response(['project' => new ProjectsResource($project), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $project)
    {
        $project->update($request->all());

        return response(['project' => new ProjectsResource($project), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $project)
    {
        $project->delete();

        return response(['message' => 'Deleted']);
    }
}
