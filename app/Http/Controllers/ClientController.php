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

    public function index()
    {
        $clients = Client::orderBy('id', 'desc')->paginate(10);
        /*dd($clients);*/
        return view('backend/clients',compact('clients'));
    }


    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'address' => 'required',
            'plz' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        $client = Client::findOrFail($id);
        $client->firstname = $request->firstname;
        $client->lastname = $request->lastname;
        $client->email = $request->email;
        $client->tel = $request->tel;
        $client->address = $request->address;
        $client->plz = $request->plz;
        $client->city = $request->city;
        $client->country = $request->country;
        $client->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        //delete the Row from the Documents table
        $user = Client::findOrFail($id)->user();
        $user->delete();
        return redirect()->back();
    }

    public function profile()
    {
        $client = Auth::user();

        return view('backend.client.single', compact('client'));
    }

    public function showNewClient(){
        return view('backend.newClient');
    }

    public function show(Client $client,$id)
    {
        $client = Client::findOrFail($id);
        $documents = $client->documentations()->orderBy('id', 'desc')->paginate(getenv('AIOT_PAGINATE_ROWS'));
        /*dd($documents);*/
        return view('backend.client',compact('id','documents','client'));
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

    public function showprofile($id){
        $user_id = auth()->user()->id;
        if ($user_id == $id){
            $client = User::findOrFail($id)->client;
            return view('backend.client.profile',compact('client'));
        }
    }
}
