<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        if ($request->file('image')) {
            $manager = new ImageManager(new Driver());
            $image_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(370, 246);

            $img->toJpeg(80)->save(base_path('public/uploads/images/categories/' . $image_name));
            $save_url = 'uploads/images/categories/' . $image_name;

            Category::create([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-', $request->name)),
                'image' => $save_url,
            ]);
        }

        $notification = [
            'message' => 'Category Added Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.categories.index')->with($notification);
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        if ($request->file('image')) {
            $manager = new ImageManager(new Driver());
            $image_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(370, 246);

            $img->toJpeg(80)->save(base_path('public/uploads/images/categories/' . $image_name));
            $save_url = 'uploads/images/categories/' . $image_name;

            $category->update([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-', $request->name)),
                'image' => $save_url,
            ]);
        } else {

            $category->update([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-', $request->name))
            ]);
        }

        $notification = [
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.categories.index')->with($notification);
    }

    public function destroy(Category $category)
    {
        unlink($category->image);
        $category->delete();
        $notification = [
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }
}
