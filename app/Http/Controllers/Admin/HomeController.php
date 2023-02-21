<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\BestSeller;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Number;
use App\Models\Photo;
use App\Models\PreviousWork;
use App\Models\Product;
use App\Models\sendQuesCustomer;
use App\Models\SubcripeCorses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    //    function __construct()
    //    {
    //        $this->middleware('permission:dashboard', ['only' => ['index']]);
    //    }

    public function deletedgetSubcrationsexam(Request $request)
    {
        sendQuesCustomer::destroy($request->id);
        toastr()->success('تم الحذف بنجاح');
        return redirect()->back();
    }


    public function photoExamCousrs(Request $request)
    {
       
        if ($file = $request->file('cover')) {
            File::delete(public_path('admin/pictures/SubcripeCorses/' . '/' . $request->id . '/' . $request->oldfile));
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('cover')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;
            if ($file->move('admin/pictures/SubcripeCorses' . '/' . $request->id, $file_to_store)) {
                Photo::updateOrCreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => "App\Models\SubcripeCorses",
                ], [
                    'Filename' => $file_to_store,
                    'photoable_id' => $request->id,
                    'photoable_type' => "App\Models\SubcripeCorses",
                ]);
            }
        }

        toastr()->success('تم الحفظ بنجاح');
        return redirect()->back();
    }
    public function editExamCousrs(Request $request)
    {
        SubcripeCorses::findorfail($request->id)->update([
            'exam' => $request->exam,
        ]);

        toastr()->success('تم الحفظ بنجاح');
        return redirect()->back();
    }

    public function getSubcrations()
    {
        $data = SubcripeCorses::paginate(20);
        return view('admin.subcrations.index', compact('data'));
    }

    public function getSubcrationsexam($customer_id,$cousrs_id)
    {
        $data = sendQuesCustomer::where('course_id',$cousrs_id)->where('customer_id',$customer_id)->paginate(50);
        return view('admin.subcrations.exam', compact('data'));
    }

    public function index()
    {
        $aboutUs = AboutUs::whereStatus(true)->count();
        $product = Product::whereStatus(true)->count();
        $previousWork = PreviousWork::whereStatus(true)->count();
        $gallery = Gallery::whereStatus(true)->count();
        $blog = Blog::whereStatus(true)->count();
        $question = Blog::whereStatus(true)->count();
        $number = Number::whereStatus(true)->count();
        $bestSeller = BestSeller::whereStatus(true)->count();
        $event = BestSeller::whereStatus(true)->count();
        $chartjs = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 400, 'height' => 150])
            ->labels(['aboutUs', 'product', 'previousWork', 'gallery', 'blog', 'question', 'number', 'bestSeller', 'event'])
            ->datasets([
                [
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#B0CF56', '#14F1D9', '#1453F1', '#CF14F1', '#F114AE', '#F1146B', '#5BC0F2'],
                    'hoverBackgroundColor' => ['#FF6384', '#36A2EB', '#B0CF56', '#14F1D9', '#1453F1', '#CF14F1', '#F114AE', '#F1146B', '#5BC0F2'],
                    'data' => [$aboutUs, $product, $previousWork, $gallery, $blog, $question, $number, $bestSeller, $event, 0]
                ]
            ])
            ->options([]);


        return view('admin.index', compact('chartjs'));
    }

    public function information()
    {
        return view('admin.Setting.register');
    }
}
