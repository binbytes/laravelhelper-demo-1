<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\DataTables\ClientDataTables;
use App\Http\Requests\ClientRequest;
use Gate;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Client::class);
    }

    /**
     * Display a listing of the resource.
     * @throws \Exception
     * @param ClientDataTables $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(ClientDataTables $dataTable)
    {
        if (request()->ajax()) {
            return $dataTable->query();
        }

        return view('clients.index', [
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
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $data = $request->all();

        
        Client::create($data);

        if (request()->wantsJson()) {
            return response([], 200);
        }

        return redirect('/clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  Client $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ClientRequest  $request
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, Client $client)
    {
        $data = $request->all();

        
        $client->fill($data)->save();

        if (request()->wantsJson()) {
            return response([], 200);
        }

        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('/clients');
    }
}
