<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\RemoveMoney;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RemoveController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Auth::user()->id;

        $orders = DB::table('users')
               ->where('user_id', '=' , $users)
               ->leftjoin('orders', 'users.id', '=', 'orders.user_id')
               ->select('name', 'email', 'status')
                ->paginate(5);
            //return response()->json($order);
           return view('create', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('remove');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = Auth::user()->id;

        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' => ['required', 'string', 'min:13',],
            'user_paypal' =>'required',


        ]);


        $remove = new RemoveMoney;
        $remove->name = $request->name;
        $remove->email = $request->email;
        $remove->phone = $request->phone;
        $remove->user_paypal = $request->user_paypal;
        $remove->status = 'In Review';
        $remove->user_id = $users;
        $remove->save();

        $success = "Formulario enviado con Exito";
       // return response()->json($remove);
        return redirect('/home')->with( compact('success') );;
    }


    public function getList()
    {

        $remove = DB::table('users')
                ->leftJoin('remove_money', 'users.id', '=', 'remove_money.user_id')
                ->select('users.id AS id_registered', 'users.name AS name_profile',
                         'users.email AS email_profile', 'remove_money.name AS name_form',
                         'remove_money.email AS email_form', 'user_paypal', 'phone',
                         'remove_money.status AS payment_status', 'remove_money.id AS id_remove')
                ->orderBy('remove_money.id','desc')
                ->paginate(8);
        // $remove = RemoveMoney::paginate();

        //return response()->json($remove);

        return view('list', compact('remove'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $remove = RemoveMoney::find($id);

        return view('edit', compact('remove'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $remove = RemoveMoney::find($id);

       // return response()->json($remove);

        return view('edit', compact('remove'));
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
        $users = Auth::user()->id;

        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' => ['required', 'string', 'min:13',],
            'user_paypal' =>'required',


        ]);

        $remove =  RemoveMoney::find($id);
        $remove->name = $request->get('name');
        $remove->email = $request->get('email');
        $remove->phone = $request->get('phone');
        $remove->user_paypal = $request->get('user_paypal');
        $remove->status = $request->get('status');
        $remove->user_id =  $request->get('user_id');
        $remove->save();

        $success = "Formulario enviado con Exito";
      // return response()->json($id);
        return redirect('/list')->with( compact('success') );
        //return view('edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
