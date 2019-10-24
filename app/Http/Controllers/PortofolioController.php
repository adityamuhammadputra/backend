<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Portofolio as PortofolioResource;

use App\Portofolio;


class PortofolioController extends Controller
{

    public function index()
    {
        return PortofolioResource::collection(Portofolio::paginate(10));
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
