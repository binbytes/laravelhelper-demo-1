<?php

namespace App\Http\DataTables;

use App\Department;
use App\Core\Datatables\BaseDatatableScope;
use Gate;

class DepartmentDataTables extends BaseDatatableScope
{
    /**
     * DepartmentDataTables constructor.
     */
    public function __construct()
    {
        $this->setHtml([
                    [
                'data' => 'title',
                'name' => 'title',
                'title' => 'Title'
            ],

        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function query()
    {
        $query = Department::query();

        return datatables()->of($query)
            ->addColumn('actions', function (Department $department) {
                $data = [];
                if (Gate::allows('show', $department)) {
                    $data['showUrl'] = route('departments.show', $department);
                }

                if (Gate::allows('update', $department)) {
                    $data['editUrl'] = route('departments.edit', $department);
                }

                if (Gate::allows('delete', $department)) {
                    $data['deleteUrl'] = route('departments.destroy', $department);
                }
                return view('shared.dtAction', $data);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
