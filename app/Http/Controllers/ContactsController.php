<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contact::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Email' => 'required',
        ]);
  
        Contact::create($request->all());
   
        return redirect()->route('index')
                        ->with('success','Contact information created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $data)
    {
        $data = Contact::findOrFail($id);
        return view('show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $data)
    {
        $data = Contact::findOrFail($id);
        return view('edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $data)
    {
        $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Email' => 'required',
        ]);
  
       $data->update($request->all());
  
        return redirect('/contact')->route('index')
                        ->with('success','Contact information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $data)
    {
       $data = Contact::findOrFail($id);
       $data->delete();
  
        return redirect('/contact')->route('index')
                        ->with('success','data information deleted successfully');
    }
}
