@extends('admin.layout')

@section('title', 'Sub Category List')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endpush

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-sm-12 layout-spacing mt-3">
            <div class="widget-content widget-content-area br-6">

                <div class="card" style="min-height:200px;">
                    <div class="card-header pb-0">
                        <h5><span class="form_text">Sub Category Create</span></h5>
                    </div>
                    <div class="card-body pb-0 pt-2">
                        <form class="blogCateForm" action="{{ url('admin/sub_category_store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-0">
                                    <label for="title" class="form-label mb-0">Category<sup class="text-danger">*</sup></label>
                                    <select class="select2 form-control subcate @error('parent_id') is-invalid @enderror" name="parent_id" required >
                                        <option value=""> select</option>
                                            @foreach ($categories as $cate)
                                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                            @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-12 mb-0">
                                    <label for="title" class="form-label" style=" margin: 0; ">
                                        Name<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="text" class="form-control" style="height:35px;" required name="name" value="{{ old('name') }}" placeholder="Sub Category">
                                </div>
                                
                                <input type="hidden" name="id" value="">
                                
                                
                                <div class="form-group mb-0 col-md-12">
                                    <label for="title" class="form-label mb-0">URL/Link</label>
                                    <input type="text" class="form-control" style="height:31px;" required name="url" value="#" placeholder="">
                                </div>
                                
                                <div class="col-9 mt-3" style="text-align: right;margin-bottom: 15px;">
                                    
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="typeUrl" value="1">
                                        <label class="form-check-label" for="typeUrl">URL</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="typeLink" value="0" checked>
                                        <label class="form-check-label" for="typeLink">Link</label>
                                    </div>
                                </div>
                                <div class="col-3" style="text-align: right;margin-bottom: 15px;">
                                    
                                    <button type="submit" class="btn btn-sm btn-primary form_text mt-3" style="height: 35px;">
                                        Create
                                    </button>
                                </div>

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-sm-12 layout-spacing mt-3">
            <div class="widget-content widget-content-area br-6">

                <div class="card" style="min-height:200px;">
                    <div class="card-header pb-0 pt-2">
                        <h5>Sub Category List</h5>
                    </div>
                    <div class="card-body table-responsive pb-0 pt-2">
                        <div>
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Type</th>
                                        <th width="120">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="subCateList">
                                    {{-- data list fetch here --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection
@push('script')
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
            // for tagings
            // $(".tags").select2({
            //     tags: true,
            //     tokenSeparators: [',', ' ']
            // })
        });
        getBlogCate();

        // size list
        function getBlogCate()
        {
            $.ajax({
                url:'/admin/get_sub_category',
                type:'get',
                success:function(res){
                    console.log(res.categories);
                    let subCateList = ``;
                    if (res.categories.length > 0) {
                        $.each(res.categories, (index, value) => {
                            
                            let type = 'URL';
                            if (value.type == 0) {
                                type = "Link"
                            }

                            subCateList += `<tr>
                                                <td>${++index}</td>
                                                <td>${value.parent ? value.parent.name : '-'}</td>
                                                <td>${value.name}</td>
                                                <td>${type}</td>
                                                <td>
                                                    <a href="javascript:void(0)" onclick="subCateEdit(${value.id})" class="text-success m-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                    </a>
                                                    <a href="javascript:void(0)" onclick="deleteBlogCate(${value.id})" class="text-danger w-4 h-4 mr-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                    </a>
                                                </td>
                                            </tr>`;
                        });
                    }else{
                        subCateList = `<tr><td colspan="4" class="text-center p-2">No Data Found</td></tr>`;
                    }
                    $(".subCateList").html(subCateList);
                }
            })
        }

        function subCateEdit(id)
        {
            $.ajax({
                url:'/admin/category_edit',
                type:'get',
                data:{id:id},
                success:function(res){
                    let base_url = window.location.origin;

                    $(".form_text").text('Update');
                    $(".blogCateForm [name=id]").val(res.category.id);
                    $(".blogCateForm [name=name]").val(res.category.name);
                    $(".blogCateForm [name=url]").val(res.category.url);
                    $(".blogCateForm [name=parent_id]").trigger('change').val(res.category.parent_id);
                    $(".blogCateForm .subcate").val(res.category.parent_id).trigger('change');
                    $(".blogCateForm").attr('action', base_url+'/admin/sub_category_update');
                    
                     if (res.category.type == 1) {
                        $("#typeUrl").prop('checked', true);
                    } else {
                        $("#typeUrl").prop('checked', false); // যদি uncheck করতে চান
                    }
                    
                    if (res.category.type == 0) {
                        $("#typeLink").prop('checked', true);
                    } else {
                        $("#typeLink").prop('checked', false); // যদি uncheck করতে চান
                    }

                    if (res.error) {
                        Toastify({
                            text: res.error,
                            duration: 5000,
                            close: true,
                            gravity: "top",
                            backgroundColor: "linear-gradient(to right, #f44336, #e91e63)"
                        }).showToast();
                    }
                }
            })
        }

        //delete
        function deleteBlogCate(id) {
            if (confirm('Are you sure, want to delete this?')) {
                $.ajaxSetup({ headers: {"X-CSRF-TOKEN": $( 'meta[name="csrf-token"]' ).attr("content"),}, });
                $.ajax({
                    url: '/admin/sub_category_destroy',
                    type: "POST",
                    data: {id: id},
                    success: function (response) {
                        getBlogCate();
                        if (res.success) {
                            Toastify({
                                text: res.success,
                                duration: 5000,
                                close: true,
                                gravity: "bottom",
                                backgroundColor: "linear-gradient(to right, #4caf50, #4caf50)"
                            }).showToast();
                        }else{
                            Toastify({
                                text: res.error,
                                duration: 5000,
                                close: true,
                                gravity: "top",
                                backgroundColor: "linear-gradient(to right, #f44336, #e91e63)"
                            }).showToast();
                        }
                    }
                });
            }
        }
    </script>
@endpush
