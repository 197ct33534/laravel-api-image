<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\AblumRequest;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Album::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AblumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AblumRequest $request)
    {
        $data = $request->all();

        return Album::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Album $album)
    {
        return $album;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\AblumRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AblumRequest $request,  Album $album)
    {
        $album->update($request->all());
        return $album;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return response('', 204);
    }
}
