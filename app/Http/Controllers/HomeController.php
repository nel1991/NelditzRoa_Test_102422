<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Objcareer;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


   $dt =  Objcareer::all();

        return view('homepage', ['dt' => $dt]);

    }
    public function about()
    {
        return view('about');
    }

      public function login()
    {
        return view('newlogin');
    }

   public function edit($id){

          $dt = Objcareer::find($id);
          return view('edit', compact('dt'));
         /*   return view('edit')->with('dt', $dt);*/

   }

    public function update(Request $request, $id)
    {
       $dt = Objcareer::find($id);
     /*  $input = $request->all();
        $dt->update($input);*/

        $dt->objname = $request->input('objname');
        $dt->descrip = $request->input('descrip');
        $dt->targetdate = $request->input('targetdate');
        $dt->compldate = $request->input('compldate');
        $dt->update();

  return view('homepage')->with('flash_message', 'Saved');  

     /* return view('homepage', ['dt' => $dt]);
*/

        }

        public function store(Request $request)
    {
        $input = $request->all();
        Objcareer::create($input);
       return view('homepage')->with('flash_message', 'Saved');  
    }

}
