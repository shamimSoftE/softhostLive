<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class subCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', 0)
            // ->where('lang_status', session('lang'))
            ->latest()->get();
        return view('admin.category.sub_category_list', compact('categories'));
    }
    public function subCategoryGet()
    {
        $categories = Category::with(['parent'])
                                ->where('parent_id', '!=', 0)
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
            return response()->json(['error' => $validate->errors()->first()]);
        }

        try {
            $input = $request->all();
            $input['slug'] = Str::slug($request->name);

            // set current language status
            $input['lang_status'] = session('lang') ?? 'EN';

            Category::create($input);
            return redirect()->back()->with('success', 'Sub Category Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Sub Category Create Failed!'.$th->getMessage());
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
            return response()->json(['error' => $validate->errors()->first()]);
        }

        try {
            $input = $request->all();

            $input['slug'] = Str::slug($request->name);
            $blog = Category::find($request->id);

            $blog->update($input);
            return redirect()->back()->with('success', 'Sub Category Updated Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Sub Category Update Failed!');
        }
    }

    public function destroy(Request $request)
    {
        try {
            Category::find($request->id)->delete();
            return response()->json(['success' => 'Sub Category Deleted Successfully']);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Sub Category Delete Failed!']);
        }
    }
}
