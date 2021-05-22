<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = People::all();

        return view('people.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $people = new People();
        $data = $this->validation($request);
        $people->save($data);

        return view('peole.index');

        
       
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
    }


    protected function validation( Request $request)
    {
        $people = new People;
        $status_form = People::STATUS_FORM(1);
        $steps = [
            'step_1' =>[
                $request->input('name'),
               $request->input('birthday')
            ],
            'step_2' =>[
                $request->input('cep'),
                $request->input('address'),
                $request->input('number'),
                $request->input('city'),
                $request->input('state')
            ],
            'step_3' =>[
                $request->input('tel'),
                $request->input('cellphone')
            ]
            ];

            while($status_form == 1){
                foreach($steps as $step){
                    if(isset($step['step_1'])){ 
                        $people->STEP_FORM(1);
                    }
                    if(isset($step['step_2'])){
                        $people->STEP_FORM(2);
                    }
                    if(isset($step['step_3'])){
                        $people->STEP_FORM(3);
                        $status_form = 2;
                    }
                }
            }

            return $this->validation($request, $status_form);

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
        //
    }
}
