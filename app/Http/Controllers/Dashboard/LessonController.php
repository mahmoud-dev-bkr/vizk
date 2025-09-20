<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreLesson;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{


    protected $model ;

    public function __construct(Lesson $model){
        $this->model = $model;
    }

    public function index()
    {
        $this->setSessionDelete();
        return view('dashboard.lesson.index' ,[
            'data' => $this->model->latest()->paginate(60),
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.lesson.form' ,[
            'resource' => $this->model,
            'courses' => \App\Models\Course::get(),
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreLessonUS $request
     * @return Renderable
     */
    public function store(StoreLesson $request)
    {
        $inputs = $request->validated();
        // dd($inputs);
        $this->model->create($inputs);
        toast(__('created') , 'success');
        return redirect()->route('admin.lesson');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.lesson.form' ,[
            'resource' => $this->model->findOrFail($id),
        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreLessonUS $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreLesson $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SLIDER_PATH'),$inputs['en']['title'], $resource->image);
        }
        // dd($inputs);
        $resource->update($inputs);
        toast(__('updated'), 'success');
        return redirect()->route('admin.Lesson');
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
        return redirect()->route('admin.lesson');
    }
}
