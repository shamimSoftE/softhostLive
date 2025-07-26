<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.category_list');
    }

    public function categoryGet()
    {
        $categories = Category::with(['subCategories'])
                        ->where('parent_id', 0)
                        // ->where('lang_status', session('lang'))
                        ->latest()->get();
        return response()->json(['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required|unique:categories'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->with('error', $validate->errors()->first());
        }

        try {
            $input = $request->all();
            // dd($input);
            $input['slug'] = Str::slug($request->name);

            if($request->file('image')){
                $imgName = date('YmdHis').'.'.$request->image->extension();
                $request->image->move(public_path('images/category'), $imgName);
                $input['image'] = $imgName;
            }else{
                unset($input['image']);
            }

            // set current language status
            $input['lang_status'] = session('lang') ?? 'EN';

            Category::create($input);
            // return redirect()->back()->with('success', 'Category Created Successfully');
            
             $notification = array(
                'messege' => 'Category Created Successfully!',
                'alert' => 'success'
            );
            return redirect()->back()->with('notification', $notification);
            
            
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Category Create Failed!'.$th->getMessage());
        }
    }

    public function edit(Request $request)
    {
        try {
           $category = Category::find($request->id);
            return response()->json(['category' => $category]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required|unique:categories,name,'.$request->id
        ]);

        if ($validate->fails()) {
            return redirect()->back()->with('error', $validate->errors()->first());
        }

        try {
            $input = $request->all();

            $input['slug'] = Str::slug($request->name);
            $blog = Category::find($request->id);

            if($request->file('image')){

                try { // delete old image
                    $image_path = 'images/category/'.$blog->image;
                    @unlink($image_path);
                } catch (\Throwable $th) {   }

                // upload new image
                $imgName = date('YmdHis').'.'.$request->image->extension();
                $request->image->move(public_path('images/category'), $imgName);
                $input['image'] = $imgName;

            }else{
                unset($input['image']);
            }
            
            // dd($input);

            $blog->update($input);
            // return redirect()->back()->with('success', 'Category Updated Successfully');
            $notification = array(
                'messege' => 'Category Update Successfully!',
                'alert' => 'success'
            );
            return redirect()->back()->with('notification', $notification);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Category Update Failed!');
        }
    }

    public function destroy(Request $request)
    {
        try {
            Category::find($request->id)->delete();
            return response()->json(['success' => 'Category Deleted Successfully']);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Category Delete Failed!']);
        }
    }
}
