<?php

namespace App\Http\DataTables;

use App\Client;
use App\Core\Datatables\BaseDatatableScope;
use Gate;

class ClientDataTables extends BaseDatatableScope
{
    /**
     * ClientDataTables constructor.
     */
    public function __construct()
    {
        $this->setHtml([
                    [
                'data' => 'name',
                'name' => 'name',
                'title' => 'Name'
            ],
            [
                'data' => 'email',
                'name' => 'email',
                'title' => 'Email'
            ],
            [
                'data' => 'company_name',
                'name' => 'company_name',
                'title' => 'Company Name'
            ],
            [
                'data' => 'dob',
                'name' => 'dob',
                'title' => 'Date Of Birth'
            ],
            [
                'data' => 'mobile_no',
                'name' => 'mobile_no',
                'title' => 'Mobile No'
            ],

        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function query()
    {
        $query = Client::query();

        return datatables()->of($query)
            ->addColumn('actions', function (Client $client) {
                $data = [];
                if (Gate::allows('show', $client)) {
                    $data['showUrl'] = route('clients.show', $client);
                }

                if (Gate::allows('update', $client)) {
                    $data['editUrl'] = route('clients.edit', $client);
                }

                if (Gate::allows('delete', $client)) {
                    $data['deleteUrl'] = route('clients.destroy', $client);
                }
                return view('shared.dtAction', $data);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
