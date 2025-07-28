<?php

namespace App\Http\Controllers;

use App\Exports\ExpenseExport;
use App\Models\AccountList;
use App\Models\Expense;
use App\Models\ExpenseType;
use App\Models\Payees;
use App\Models\PaymentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::latest()->get();
        $categories = ExpenseType::latest()->get();
        return view('admin.account.expense', compact('expenses','categories'));
    }
     
    public function filter(Request $request)
    {
        $request->validate([
            'start_month' => 'required|date',
            'end_month' => 'required|date|after_or_equal:start_month',
        ]);
    
        $from = $request->start_month;
        $to = $request->end_month;
        
        $query = Expense::with(['accounts', 'payees', 'expense_categorys', 'payment_types'])
            ->orderBy('id', 'DESC');
        
        if ($from && $to) {
            $query->whereBetween('date', [$from, $to]);
        }
        
        $expenses = $query->get();
        
        return view('expense.index', compact('expenses'));

    }

    public function store(Request $request)
    {
        $validator = Validator::make( $request->all(),[
            // 'account_id' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'expense_category_id' => 'required',
            // 'payee_id' => 'required',
            // 'payment_type_id'=>'required',
        ]);
        if($validator->fails())
        {
            $notification = array(
                'messege' => $validator->errors()->first(),
                'alert' => 'error'
            );
            return redirect()->back()->with('notification', $notification);
        }

        $input = $request->all();
        $input['created_by'] = Auth::user()->id;
        Expense::create($input);

        $notification = array(
            'messege' => 'Expense successfully created!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function edit(Request $request) {
        $expense = Expense::with('expenseCategory')->find($request->id);
        return response()->json($expense);
    }

    public function update(Request $request, Expense $expense)
    {
       $validator = Validator::make( $request->all(),[
            'amount' => 'required',
            'date' => 'required',
            'expense_category_id' => 'required',
        ]);
        if($validator->fails())
        {
            $notification = array(
                'messege' => $validator->errors()->first(),
                'alert' => 'error'
            );
            return redirect()->back()->with('notification', $notification);
        }

        Expense::find($request->id)->update($request->all());
        $notification = array(
            'messege' => 'Expense successfully Updated!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function destroy($id)
    {
        Expense::find($id)->delete();
        $notification = array(
            'messege' => 'Expense successfully deleted!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // public function export(Request $request)
    // {
    //     $name = 'Expense_' . date('Y-m-d i:h:s');
    //     $data = Excel::download(new ExpenseExport(), $name . '.xlsx');
    //     return $data;
    // }
}
