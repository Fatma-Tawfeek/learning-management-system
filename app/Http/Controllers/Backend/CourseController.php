<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;

use App\Models\Course;
use App\Models\Category;
use App\Models\CourseGoal;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('instructor', 'category', 'subcategory')
            ->where('instructor_id', auth()->user()->id)
            ->latest()
            ->get();

        return view('instructor.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('instructor.courses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required',
            'video' => 'required|mimes:mp4|max:10000',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:subcategories,id',
            'duration' => 'required',
            'resources' => 'required',
            'prerequisites' => 'required',
            // 'description' => 'required',
            'selling_price' => 'required',
        ]);

        $manager = new ImageManager(new Driver());
        $image_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
        $img = $manager->read($request->file('image'));
        $img = $img->resize(370, 246);

        $img->toJpeg(80)->save(base_path('public/uploads/images/courses/thumbnails/' . $image_name));
        $img_save_url = 'uploads/images/courses/thumbnails/' . $image_name;

        $video = $request->file('video');
        $video_name = hexdec(uniqid()) . '.' . $request->file('video')->getClientOriginalExtension();
        $video->move(public_path('uploads/videos/courses/'), $video_name);
        $video_save_url = 'uploads/videos/courses/' . $video_name;

        $course_id = Course::insertGetID([
            'name' => $request->name,
            'title' => $request->title,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'video' => $video_save_url,
            'image' => $img_save_url,
            'label' => $request->label,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'instructor_id' => auth()->user()->id,
            'duration' => $request->duration,
            'resources' => $request->resources,
            'prerequisites' => $request->prerequisites,
            'description' => $request->description,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'certificate' => $request->have_certificate,
            'bestseller' => $request->best_seller,
            'featured' => $request->featured,
            'highestrated' => $request->highestrated,
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);

        $goals = Count($request->course_goals);
        if ($goals !== NULL) {
            for ($i = 0; $i < $goals; $i++) {
                CourseGoal::create([
                    'course_id' => $course_id,
                    'goal' => $request->course_goals[$i]
                ]);
            }
        }

        $notification = [
            'message' => 'Course Added Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('instructor.courses.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function GetSubCategory($category_id)
    {
        $subcategories = SubCategory::where('category_id', $category_id)->orderBy('name', 'asc')->get();
        return json_encode($subcategories);
    }
}
