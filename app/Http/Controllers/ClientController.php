<?php

namespace App\Http\Controllers;

use App\Client;
use App\Documentation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('id', 'desc')->paginate(10);
        /*dd($clients);*/
        return view('backend/clients',compact('clients'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client,$id)
    {
        $client = Client::findOrFail($id);
        $documents = $client->documentations()->orderBy('id', 'desc')->paginate(getenv('AIOT_PAGINATE_ROWS'));
        /*dd($documents);*/
        return view('backend.client',compact('id','documents','client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete the Row from the Documents table
        $user = Client::findOrFail($id)->user();
        $user->delete();
        return redirect()->back();
    }

    //
    // for single Auth Client
    //
    public function profile()
    {
        $client = Auth::user();

        return view('backend.client.single', compact('client'));
    }
    public function showNewClient(){
        return view('backend.newClient');
    }

    public function addClient(Request $request){
        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
            'tel' => 'required',
            'address' => 'required',
            'plz' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        /*dd($data);*/
        $user = new User();
        $user->name = $request->firstname;
        $user->email = $request->email;
        $pass =  $request->password;
        $hashed = Hash::make('pass', [
            'rounds' => 12
        ]);
        $user->password = $hashed;
        $user->save();

        $client = new Client();
        $client->user()->associate($user);
        $client->firstname = $request->firstname;
        $client->lastname = $request->lastname;
        $client->email = $request->email;
        $client->tel = $request->tel;
        $client->address = $request->address;
        $client->plz = $request->plz;
        $client->city = $request->city;
        $client->country = $request->country;
        $client->save();

        return redirect('/clients');
    }
}
