<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreLecture;
use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{


    protected $model ;

    public function __construct(Lecture $model){
        $this->model = $model;
    }

    public function index()
    {
        $this->setSessionDelete();
        return view('dashboard.lecture.index' ,[
            'data' => $this->model->latest()->paginate(60),
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.lecture.form' ,[
            'resource' => $this->model,
            'courses' => \App\Models\Course::get(),
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreLecture $request
     * @return Renderable
     */
    public function store(StoreLecture $request)
    {
        $inputs = $request->validated();
        // dd($inputs);
        $this->model->create($inputs);
        toast(__('created') , 'success');
        return redirect()->route('admin.lecture');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.lecture.form' ,[
            'resource' => $this->model->findOrFail($id),
        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreLectureUS $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreLecture $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SLIDER_PATH'),$inputs['en']['title'], $resource->image);
        }
        // dd($inputs);
        $resource->update($inputs);
        toast(__('updated'), 'success');
        return redirect()->route('admin.lecture');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $resource = $this->model->findOrFail($id);
        deleteImage($resource->image);
        $resource->delete();
        toast(__('deleted'), 'success');
        return redirect()->route('admin.lecture');
    }
}
