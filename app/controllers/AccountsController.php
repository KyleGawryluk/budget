<?php

class AccountsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $user=Sentry::getUser();
       $accounts=User::find($user->id);

       return View::make('account.index',compact('accounts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    return View::make('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $user=Sentry::getUser();
        $account = new Account;
        $account->user_id = $user->id;
        $account->name = Input::get('name');
        $account->amount_due = Input::get('amount_due');
        $account->website = Input::get('website');
        $account->balance = Input::get('balance');
        
        if ($account->save()) {
            return Redirect::to('accounts')->with('success',$account->name.' has been created.');
        }else{
            return Redirect::to('accounts')->with('error','We could not create your account');
        }


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}