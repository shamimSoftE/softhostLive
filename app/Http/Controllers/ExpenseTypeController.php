<?php

namespace App\Http\Controllers;

use App\Models\ExpenseType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpenseTypeController extends Controller
{
    public function index()
    {
        $expensetypes = ExpenseType::where('created_by', '=', Auth::user()->id)->get();
        return view('admin.account.account_category', compact('expensetypes'));
    }

    public function categoryGet()
    {
        $categories = ExpenseType::latest()->get();
        return response()->json(['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make( $request->all(), [
            'name' => 'required',
        ]);

        if($validator->fails())
        {
            $notification = array(
                'messege' => $validator->errors()->first(),
                'alert' => 'error'
            );
            return redirect()->back()->with('notification', $notification);
        }

        $expensetype             = new ExpenseType();
        $expensetype->name       = $request->name;
        $expensetype->created_by = Auth::user()->id;
        $expensetype->save();

        $notification = array(
            'messege' => 'Account category successfully created!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function edit(Request $request)
    {
        try {
           $category = ExpenseType::find($request->id);
            return response()->json(['category' => $category]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()]);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make( $request->all(), [
            'name' => 'required',
        ]);

        if($validator->fails())
        {
            $notification = array(
                'messege' => $validator->errors()->first(),
                'alert' => 'error'
            );
            return redirect()->back()->with('notification', $notification);
        }

        ExpenseType::find($request->id)->update($request->all());

        $notification = array(
            'messege' => 'Account category successfully updated!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function destroy(Request $request)
    {
        ExpenseType::find($request->id)->delete();
        return response()->json(['success' => 'Account category deleted']);
    }
}
