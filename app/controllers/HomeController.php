<?php

class HomeController extends BaseController {

	
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

   
        $clients = Clients::all();

        // load the view and pass the nerds
        return View::make('clients.index')
            ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $client = Clients::find($id);

        // show the view and pass the nerd to it
        return View::make('clients.show')
            ->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

 

}
