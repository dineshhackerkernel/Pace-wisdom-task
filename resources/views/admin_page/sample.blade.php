@extends('layouts.admin_design')
@section('title')
Transaction
@stop
@section('content')
<style type="text/css">
  @media (min-width: 576px)
{
    .modal-dialog {
        max-width: 650px !important;
        margin: 1.75rem auto;
    }
}
</style>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-inbox bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Transaction Report</h5>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">

                                    	<button type="button" class="btn btn-primary btn-outline-primary waves-effect md-trigger md-setperspective" style="margin-left: 370px;">Total Balance : {{$total_balance_amount}}</button>

                                    	<button type="button" class="btn btn-primary btn-outline-primary waves-effect md-trigger md-setperspective pull-right" data-toggle="modal" data-target="#add-model"><i class="fas fa-plus"></i>Add</button>
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Transaction Type</th>
                                                    <th>Amount</th>
                                                    <th>Created Date</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($getdata as $key=>$row)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$row->transaction_type}}</td>
                                                    <td>{{$row->amount}}</td>
                                                    <td>{{$row->createdDate}}</td>
                                                    <td>{{$row->description}}</td>
                                                    <td>
                                                     <button type="button" class="" data-toggle="modal" data-target="#add{{$row->id}}">
                                                        <i class="fas fa-edit"></i>
                                                     </button>
                                                      <div class="modal fade" id="add{{$row->id}}">
                                                        <div class="modal-dialog">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h4 class="modal-title">Edit Transaction</h4>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>
                                                            <div class="modal-body">
                                                               <form role="form" action="{{route('admin.update.transaction')}}" method="post">
                                                                @csrf
                                                               <input type="hidden" name="id" value="{{$row->id}}">
                                                                <div class="card-body">
                                                                   <div class="form-group">
												                    <label for="exampleInputEmail1">Select Transaction Type</label>
												                    <select name="transaction_type" class="form-control" required="">
												                    	<option value=""> Select One</option>
												                    	<option value="Income" {{$row->transaction_type == "Income"  ? 'selected' : ''}}>Income</option>
												                    	<option  value="Expense" {{$row->transaction_type == "Expense"  ? 'selected' : ''}} >Expense</option>
												                    </select>
												                  </div>
												                  <div class="form-group">
												                    <label for="exampleInputEmail1">Amount</label>
												                    <input type="number" name="amount" min="1" class="form-control" placeholder="Enter Amount" value="{{$row->amount}}" required="">
												                  </div>
												                  <div class="form-group">
												                    <label for="exampleInputEmail1">Date</label>
												                    <input type="date" name="createdDate" class="form-control" value="{{$row->createdDate}}" required="">
												                  </div>
												                  <div class="form-group">
												                    <label for="exampleInputEmail1">Description</label>
												                    <textarea type="text" name="description" class="form-control" style="height: 200px;width: 570px">{{$row->description}}</textarea> 
												                  </div>
                                                                </div>
                                                                 <div class="modal-footer justify-content-between">
                                                                  <button type="submit" class="btn btn-primary" style="padding: 13px 26px;">Update</button>
                                                                </div>
                                                              </form>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    	<a href="{{url('admin/delete/'.$row->id)}}" class="" title="Delete Program" onclick="return confirm('Are you sure you want to delete this?')"><i class="fa fa-trash" aria-hidden="true" style="color: red;margin-left: 11px;"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of page body -->
            </div>
        </div>
    </div>
      <div class="modal fade" id="add-model">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Transaction</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <form role="form" action="{{route('admin.add.transaction')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Transaction Type</label>
                    <select class="form-control" name="transaction_type" required="">
                    	<option value=""> Select One</option>
                    	<option value="Income">Income</option>
                    	<option value="Expense">Expense</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="number" name="amount" min="1" class="form-control" placeholder="Enter Amount" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" name="createdDate" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea type="text" name="description" class="form-control" style="height: 200px;width: 570px"></textarea> 
                  </div>
                </div>
                 <div class="modal-footer justify-content-between">
                  <button type="submit" class="btn btn-primary" style="padding: 13px 26px;">save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- end of pcoded-inner-content -->
</div>
<!-- end of pcodd-content -->
@endsection