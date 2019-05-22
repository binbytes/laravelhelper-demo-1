<?php

namespace App\Http\DataTables;

use App\Project;
use App\Core\Datatables\BaseDatatableScope;
use Gate;

class ProjectDataTables extends BaseDatatableScope
{
    /**
     * ProjectDataTables constructor.
     */
    public function __construct()
    {
        $this->setHtml([
                    [
                'data' => 'title',
                'name' => 'title',
                'title' => 'Title'
            ],
            [
                'data' => 'client_id',
                'name' => 'client_id',
                'title' => 'Client Id'
            ],
            [
                'data' => 'started_at',
                'name' => 'started_at',
                'title' => 'Started At'
            ],
            [
                'data' => 'is_completed',
                'name' => 'is_completed',
                'title' => 'Is Completed'
            ],

        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function query()
    {
        $query = Project::query();

        return datatables()->of($query)
            ->addColumn('actions', function (Project $project) {
                $data = [];
                if (Gate::allows('show', $project)) {
                    $data['showUrl'] = route('projects.show', $project);
                }

                if (Gate::allows('update', $project)) {
                    $data['editUrl'] = route('projects.edit', $project);
                }

                if (Gate::allows('delete', $project)) {
                    $data['deleteUrl'] = route('projects.destroy', $project);
                }
                return view('shared.dtAction', $data);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
