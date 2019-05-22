<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\DataTables\AccountDataTables;
use App\Http\Requests\AccountRequest;
use Gate;
use App\User;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Account::class);
    }

    /**
     * Display a listing of the resource.
     * @throws \Exception
     * @param AccountDataTables $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(AccountDataTables $dataTable)
    {
        if (request()->ajax()) {
            return $dataTable->query();
        }

        return view('accounts.index', [
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
        $usersforname = User::pluck('name', 'id');

        return view('accounts.create', compact('usersforname'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request)
    {
        $data = $request->all();

        
        Account::create($data);

        if (request()->wantsJson()) {
            return response([], 200);
        }

        return redirect('/accounts');
    }

    /**
     * Display the specified resource.
     *
     * @param  Account $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        return view('accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        $usersforname = User::pluck('name', 'id');

        return view('accounts.edit', compact('account', 'usersforname'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AccountRequest  $request
     * @param  Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(AccountRequest $request, Account $account)
    {
        $data = $request->all();

        
        $account->fill($data)->save();

        if (request()->wantsJson()) {
            return response([], 200);
        }

        return redirect('/accounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Account $account
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Account $account)
    {
        $account->delete();

        return redirect('/accounts');
    }
}
