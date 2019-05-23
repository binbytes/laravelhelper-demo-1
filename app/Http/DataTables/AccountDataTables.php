<?php

namespace App\Http\DataTables;

use App\Account;
use App\Core\Datatables\BaseDatatableScope;
use Gate;

class AccountDataTables extends BaseDatatableScope
{
    /**
     * AccountDataTables constructor.
     */
    public function __construct()
    {
        $this->setHtml([
                    [
                'data' => 'user_id',
                'name' => 'user_id',
                'title' => 'User Id'
            ],
            [
                'data' => 'name',
                'name' => 'name',
                'title' => 'Name'
            ],
            [
                'data' => 'bank_name',
                'name' => 'bank_name',
                'title' => 'Bank Name'
            ],
            [
                'data' => 'account_number',
                'name' => 'account_number',
                'title' => 'Account Number'
            ],
            [
                'data' => 'name_on_account',
                'name' => 'name_on_account',
                'title' => 'Name On Account'
            ],
            [
                'data' => 'branch_of',
                'name' => 'branch_of',
                'title' => 'Branch Of'
            ],
            [
                'data' => 'ifsc_code',
                'name' => 'ifsc_code',
                'title' => 'IFSC Code'
            ],

        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function query()
    {
        $query = Account::query();

        return datatables()->of($query)
            ->addColumn('actions', function (Account $account) {
                $data = [];
                if (Gate::allows('show', $account)) {
                    $data['showUrl'] = route('accounts.show', $account);
                }

                if (Gate::allows('update', $account)) {
                    $data['editUrl'] = route('accounts.edit', $account);
                }

                if (Gate::allows('delete', $account)) {
                    $data['deleteUrl'] = route('accounts.destroy', $account);
                }
                return view('shared.dtAction', $data);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
