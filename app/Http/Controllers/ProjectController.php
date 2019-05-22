<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\DataTables\ProjectDataTables;
use App\Http\Requests\ProjectRequest;
use Gate;
use App\Client;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Project::class);
    }

    /**
     * Display a listing of the resource.
     * @throws \Exception
     * @param ProjectDataTables $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(ProjectDataTables $dataTable)
    {
        if (request()->ajax()) {
            return $dataTable->query();
        }

        return view('projects.index', [
            'html' => $dataTable->html()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientsforname = Client::pluck('name', 'id');

        return view('projects.create', compact('clientsforname'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $data = $request->all();

        $data['is_completed'] = request()->has('is_completed');

        Project::create($data);

        if (request()->wantsJson()) {
            return response([], 200);
        }

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $clientsforname = Client::pluck('name', 'id');

        return view('projects.edit', compact('project', 'clientsforname'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProjectRequest  $request
     * @param  Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $data = $request->all();

        $data['is_completed'] = request()->has('is_completed');

        $project->fill($data)->save();

        if (request()->wantsJson()) {
            return response([], 200);
        }

        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
