<?php

namespace App\Http\Controllers;
use App\Models\Objcareer;
use Illuminate\Http\Request;



class ObjcareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dt =  Objcareer::all();
        return view('homepage', ['dt' => $dt]);

      
    /*    $objcareer = Objcareer:all();
        return view('home')->with('objcareer', $objcareer);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
/*    public function create()
    {
        return view('career');
    }
*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Objcareer::create($input);
 
       return redirect('home')->with('flash_message', 'Saved');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dt = Objcareer::find($id);

        return view('edit')->with('dt', $dt);
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
       $dt = Objcareer::find($id);
        $input = $request->all();
        $dt->update($input);

/*  return view('edit')->with('dt', $dt); */

     return redirect('home');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Objcareer::destroy($id);
        return redirect('home')->with('flash_message', 'Contact deleted!');  
    }
}
