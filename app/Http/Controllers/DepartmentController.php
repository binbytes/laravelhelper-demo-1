<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\DataTables\DepartmentDataTables;
use App\Http\Requests\DepartmentRequest;
use Gate;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Department::class);
    }

    /**
     * Display a listing of the resource.
     * @throws \Exception
     * @param DepartmentDataTables $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(DepartmentDataTables $dataTable)
    {
        if (request()->ajax()) {
            return $dataTable->query();
        }

        return view('departments.index', [
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
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  DepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentRequest $request)
    {
        $data = $request->all();

        
        Department::create($data);

        if (request()->wantsJson()) {
            return response([], 200);
        }

        return redirect('/departments');
    }

    /**
     * Display the specified resource.
     *
     * @param  Department $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  DepartmentRequest  $request
     * @param  Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentRequest $request, Department $department)
    {
        $data = $request->all();

        
        $department->fill($data)->save();

        if (request()->wantsJson()) {
            return response([], 200);
        }

        return redirect('/departments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Department $department
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return redirect('/departments');
    }
}
