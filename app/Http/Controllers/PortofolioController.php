<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PortofolioResource;

use App\Portofolio;


class PortofolioController extends Controller
{

    public function index(Request $request)
    {
        if($request->admin){
            return PortofolioResource::collection(Portofolio::paginate(10));
        }
        // return Portofolio::with('imageFitst')->get();
        return PortofolioResource::collection(Portofolio::get());
    }

    public function store(Request $request)
    {
        $input = $request->only('title', 'desc', 'user_id');
        $portofolio = Portofolio::create($input);

        $response = [
            'data' => $this->show($portofolio->id),
            'message' => $portofolio->title . 'Has been created'
        ];

        return response()->json($response, 200);
    }


    public function show($id)
    {
        return new PortofolioResource(Portofolio::find($id));
    }

    public function edit($id)
    {
        $response = [
            'data' => $this->show($id),
        ];

        return response()->json($response, 200);
    }

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
        // $file = ProjectFile::where('TableId', $id)->firstOrFail();
        // if ($file->NmFile){
        //     Storage::disk('project')->delete($file->NmFile);
        // }
    }
}
