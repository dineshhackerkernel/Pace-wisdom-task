<?php

namespace App\Http\Controllers\AController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;
use Brian2694\Toastr\Facades\Toastr;
class TransactionController extends Controller
{
    public function addTransaction(Request $request){
    	$validatedData = $request->validate([
	      'transaction_type' => 'required|max:255',
	      'createdDate' => 'required',
	      'description' => 'required',
	      'amount' => 'required|numeric',
		]);
		$insert = new Transaction();
		$insert->transaction_type = $request->transaction_type;
		$insert->amount = $request->amount;
		$insert->createdDate = $request->createdDate;
		$insert->description = $request->description;
		$insert->save();
		Toastr::success('Data Inserted successfully','Success', ["positionClass" => "toast-bottom-right","progressBar"=> true, "closeButton"=> true]);
		return redirect()->back();
    }
    public function updateTransaction(Request $request){
    	//return $request->all();
    	$validatedData = $request->validate([
	      'transaction_type' => 'required|max:255',
	      'createdDate' => 'required',
	      'description' => 'required',
	      'amount' => 'required|numeric',
		]);
		$update = Transaction::find($request->id);
		$update->transaction_type = $request->transaction_type;
		$update->amount = $request->amount;
		$update->createdDate = $request->createdDate;
		$update->description = $request->description;
		$update->save();
		Toastr::success('Data Updated successfully','Success', ["positionClass" => "toast-bottom-right","progressBar"=> true, "closeButton"=> true]);
		return redirect()->back();
    }

    public function delete($id){
    	$delete = Transaction::find($id);
    	$delete->delete();
    	Toastr::success('Deleted successfully','Success', ["positionClass" => "toast-bottom-right","progressBar"=> true, "closeButton"=> true]);
		return redirect()->back();
    }
}
