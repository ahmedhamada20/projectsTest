<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SerivesCourses;
use Illuminate\Http\Request;

class SerivesCoursesController extends Controller
{

    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\SerivesCourses',
        'route' => 'serivesCourses',
        'folderBlade' => 'serivesCourses',
        'folderImage' => 'serivesCourses',
        'fileName' => 'test'
    ];

    public function index()
    {
        //
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
        
        try {
            $data = $this->data['Models']::create([
                'name' => ['ar' => $request->name, 'en' => $request->name_en],
                'notes' => ['ar' => $request->notes, 'en' => $request->notes_en],
                'status' => $request->status,
                'course_id' => $request->course_id,
                'url' => $request->url,
                'time' => $request->time,
            ]);

            toastr()->success('تم الحفظ بنجاح');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
