<?php

namespace App\Http\Controllers;

use App\Business\ReuniaoBusiness;

use App\Http\Requests\ReuniaoRequest;
use App\Reuniao;
use Illuminate\Http\Request;

class ReuniaoController extends Controller
{

    public function __construct()
    {
        $this->reuniaoBusiness = new  ReuniaoBusiness();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = [ ['title' => 'Event1', 'start' => '2017-09-12'], ['title' => 'Event2', 'start' => '2017-09-22']];
        return response()->json($eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reuniao.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReuniaoRequest $request)
    {
        $data = $request->all();

        $reuniao = $this->reuniaoBusiness->adicionar($data);

        return response()->json($reuniao);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reuniao = $this->reuniaoBusiness->encontrar($id);
        return response()->json($reuniao);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('reuniao.alterar', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReuniaoRequest $request, $id)
    {
        $data = $request->all();

        $reuniao = $this->reuniaoBusiness->editar($id, $data);

        return response()->json($reuniao);
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
