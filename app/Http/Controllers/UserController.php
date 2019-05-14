<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::All();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'type' => 'required',
        ]);
        $input=$request->all();
        $input['password']=bcrypt($input['password']);
        User::create($input);
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::find($id);
        if($user &&  \Auth::user()->type=='admin'  ){
            return view('users.edit',compact('user'));
        }
        else{
            flash('User Not Found ')->error();
            return back();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'type' => 'required',
        ]);
        $user = User::find($id);
        $input=$request->all();
        if ($user &&  \Auth::user()->type=='admin' ) {
            if($input['password']){
                $input['password']=bcrypt($input['password']);
            }
            else{
                $input['password']=bcrypt($user->password);
            }
            $user->update($input);
        }
        else{
            flash('User Not Found ')->error();
            return back();
        }
        flash('User Updated successfully')->success();

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        if($user &&  \Auth::user()->type=='admin'  ){
            $user->delete();
            flash('User Deleted successfully')->success();
            return back();
        }
        else{
            flash('User Not Found ')->error();
            return back();
        }
    }

    public function myorders(){
        $orders=\Auth::user()->orders;
        return view('products.myorders',compact('orders'));
    }
}
