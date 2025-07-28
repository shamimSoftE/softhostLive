@extends('admin.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Expense') }}</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('admin/dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Dashboard') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Expense') }}</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('Expense List:') }}</h3>
                            <div class="card-tools d-flex">

                                <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#expenseEntry">
                                    <i class="fas fa-plus"></i> {{ __('Add Expense') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        {{-- <th><input type="checkbox" data-target="product-bulk-delete" class="bulk_all_delete"></th>
                                        <th>{{ __('Account') }}</th>
                                        <th>{{ __('Payee') }}</th> --}}
                                        <th>{{ __('Ref#') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>{{ __('Amount') }}</th>
                                        {{-- <th>{{ __('Payment') }}</th> --}}
                                        <th>{{ __('Date') }}</th>
                                        <th>{{ __('Note') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($expenses as $item)
                                        <tr id="product-bulk-delete">
                                            {{-- <td>
                                                <input type="checkbox" class="bulk-item" value="{{ $item->id}} ">
                                            </td> --}}

                                            <td>
                                                {{ $item->referal_id }}
                                            </td>

                                            <td>
                                                {{ isset($item->expenseCategory) ? $item->expenseCategory->name : '-' }}
                                            </td>
                                            <td> {{ $item->amount }} </td>
                                            <td> {{ $item->date }} </td>

                                            <td>
                                                {{ $item->description }}
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" onclick="editExpense({{ $item->id }})" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    {{ __('Edit') }}
                                                </a>
                                                <form id="deleteform" class="d-inline-block" action="{{ url('admin/expense_delete', $item->id) }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                        <i class="fas fa-trash"></i>{{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Modal -->
        <div class="modal fade" id="expenseEntry" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="expenseEntryLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="expenseEntryLabel">Expense Entry</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="blogCateForm" action="{{ url('admin/expense_create') }}" method="POST">
                            @csrf
                        <div class="modal-body">
                            <div class="row">

                                <div class="form-group col-md-12 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;"> Ref#<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="text" class="form-control" required name="referal_id" value="{{ old('referal_id') }}" placeholder="Ref...">
                                </div>

                                <div class="form-group col-md-6 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;"> Amount<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="number" step="any" class="form-control" required name="amount" value="{{ old('amount') }}" placeholder="">
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;"> Date<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="date" class="form-control" required name="date" value="{{ date('Y-m-d') }}" >
                                </div>

                                <div class="form-group col-md-12 mb-0">
                                    <label for="title" class="form-label mb-0">Category<sup  class="text-danger">*</sup></label>
                                    <select class="select2 form-control subcate @error('expense_category_id') is-invalid @enderror" name="expense_category_id" required>
                                        <option value=""> select</option>
                                        @foreach ($categories as $cate)
                                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-12 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;">Note</label>
                                    <input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Write your comment">
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!-- edit -->
        <div class="modal fade" id="expenseEdit" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="expenseEditLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="expenseEditLabel">Expense Update</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="blogCateForm" action="{{ url('admin/expense_update') }}" method="POST" >
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-12 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;"> Ref#<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="text" class="form-control" required name="referal_id" value="{{ old('referal_id') }}" placeholder="Ref...">
                                </div>

                                <input type="hidden" name="id" >

                                <div class="form-group col-md-6 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;"> Amount<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="number" step="any" class="form-control" required name="amount" value="{{ old('amount') }}" placeholder="">
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;"> Date<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="date" class="form-control" required name="date" value="{{ date('Y-m-d') }}" >
                                </div>

                                <div class="form-group col-md-12 mb-0">
                                    <label for="title" class="form-label mb-0">Category<sup  class="text-danger">*</sup></label>
                                    <select class="select2 form-control subcate @error('expense_category_id') is-invalid @enderror" name="expense_category_id" required>
                                        <option value=""> select</option>
                                        @foreach ($categories as $cate)
                                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-12 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;">Note</label>
                                    <input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Write your comment">
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script>
        function editExpense(id)
        {
            $.ajax({
                url:'/admin/expense_edit',
                type:'get',
                data:{id:id},
                success:function(res) {
                    $("#expenseEdit [name=referal_id]").val(res.referal_id);
                    $("#expenseEdit [name=amount]").val(res.amount);
                    $("#expenseEdit [name=date]").val(res.date);
                    $("#expenseEdit [name=description]").val(res.description);
                    $("#expenseEdit [name=id]").val(res.id);
                    $("#expenseEdit [name=expense_category_id]").trigger('change').val(res.expense_category_id);

                    $("#expenseEdit").modal('show');
                    
                }
            });
        }
    </script>
@endsection
