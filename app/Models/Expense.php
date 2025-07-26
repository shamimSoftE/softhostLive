<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'account_id',
        'amount',
        'date',
        'expense_category_id',
        'payee_id',
        'payment_type_id',
        'transaction_id',
        'referal_id',
        'description',
        'created_by',
    ];
    
    public function expenseCategory()
    {
        return $this->belongsTo(ExpenseType::class, 'expense_category_id');
    }

    public function employee_payees()
    {
        return $this->hasOne('App\Models\Employee', 'id', 'payee_id');
    }

    public function expense_categorys()
    {
        return $this->hasOne('App\Models\ExpenseType', 'id', 'expense_category_id');
    }
   
}
