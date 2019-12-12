<?php

namespace App\Http\Controllers;

use App\Client;
use App\Documentation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'doc' => 'required|mimes:pdf',
        ]);

        $client = Client::findOrFail($id);
        $user = User::findOrFail($client->user_id);
        $uploded_file = $request->file('doc');
        $name = $request->title;

        $doc_path = Storage::disk('upload_doc')->put($client->firstname . $client->lastname, $uploded_file);

        $documentation = new Documentation();
        $documentation->user()->associate($user);
        $documentation->client()->associate($client);
        $documentation->name = $name;
        $documentation->link = "/upload_doc/" . $doc_path;
        $documentation->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documents = Documentation::where('user_id', $id)->orderBy('name', 'desc')->paginate(5);
        /*dd($documents);*/
        return view('backend.client.documents',compact('documents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete the Row from the Documents table
        $doc = Documentation::findOrFail($id);
        $doc->delete();

        //delete the file from the folder
        $doc_path = $doc->link;
        $path_pieces = explode("/",$doc_path);
        $doc_path = "/$path_pieces[2]/$path_pieces[3]";
        /*dd($doc_path);*/
        Storage::disk('upload_doc')->delete($doc_path);
        $message = "Patient {$doc->name} wurde gelöscht.";
        session()->flash("message", $message);
        return redirect()->back();
    }
}
