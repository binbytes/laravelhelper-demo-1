<?php

namespace App\Http\DataTables;

use App\User;
use App\Core\Datatables\BaseDatatableScope;
use Gate;

class UserDataTables extends BaseDatatableScope
{
    /**
     * UserDataTables constructor.
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
                'data' => 'dob',
                'name' => 'dob',
                'title' => 'Date Of Birth'
            ],
            [
                'data' => 'mobile_no',
                'name' => 'mobile_no',
                'title' => 'Mobile No'
            ],
            [
                'data' => 'skype',
                'name' => 'skype',
                'title' => 'Skype'
            ],
            [
                'data' => 'slack',
                'name' => 'slack',
                'title' => 'Slack'
            ],

        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function query()
    {
        $query = User::query();

        return datatables()->of($query)
            ->addColumn('actions', function (User $user) {
                $data = [];
                if (Gate::allows('show', $user)) {
                    $data['showUrl'] = route('users.show', $user);
                }

//                if (Gate::allows('update', $user)) {
//                    $data['editUrl'] = route('users.edit', $user);
//                }

                if (Gate::allows('delete', $user)) {
                    $data['deleteUrl'] = route('users.destroy', $user);
                }
                return view('shared.dtAction', $data);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
