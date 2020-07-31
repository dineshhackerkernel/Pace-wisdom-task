<?php

namespace App\Http\Controllers\AController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin_page.admin');
    }

    public function sample()
    {
        $getdata = Transaction::orderBy('id')->get();
        $income = Transaction::where('transaction_type','=','Income')->sum('amount');
        $expense = Transaction::where('transaction_type','=','Expense')->sum('amount');
        if($expense > $income){
            $total_balance_amount = strval($expense-$income);
        }elseif ($income-$expense == 0) {
            $total_balance_amount = strval($income-$expense);
        }elseif ($income > $expense) {
            $total_balance_amount = strval($income-$expense);
        }
        return view('admin_page.sample',compact('getdata','total_balance_amount'));
    }
}
