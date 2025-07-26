<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing mt-3">
            <div class="widget-content widget-content-area br-6">

                <div class="row">
                    <div class="col-xl-5 col-md-5 col-sm-12 col-12">
                        <div class="card" style="min-height:200px;">
                            <div class="card-header pb-0">
                                <h5><span class="form_text">Category Create</span></h5>
                            </div>
                            <div class="card-body pb-0 pt-2">
                                <form class="blogCateForm" action="<?php echo e(url('admin/category_store')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group mb-0">
                                                <label for="title" class="form-label">Name</label>
                                                <input type="text" class="form-control" style="height:31px;" required name="name" value="<?php echo e(old('name')); ?>" placeholder="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="title" class="form-label mb-0">URL/Link</label>
                                                <input type="text" class="form-control" style="height:31px;" name="url" value="#" placeholder="">
                                            </div>
                                            
                                             
                                            
                                            
                                            <!--<div class="form-group mt-2">-->
                                            <!--    <input type="file" accept="image/*" class="form-control" style="height:31px;" name="image"-->
                                            <!--     onchange="document.getElementById('catImg').src = window.URL.createObjectURL(this.files[0])">-->
                                            <!--</div>-->
                                        </div>
                                        <input type="hidden" name="id" value="">
                                        <div class="col-md-3 mt-4">
                                            <!--<div class="form-group">-->
                                            <!--    <img src="" id="catImg" class="table-user-thumb img-fluid mt-2" alt="" style="max-height: 40px;" >-->
                                            <!--</div>-->
                                            
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="type" id="typeUrl" value="1">
                                                <label class="form-check-label" for="typeUrl">URL</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="type" id="typeLink" value="0" checked>
                                                <label class="form-check-label" for="typeLink">Link</label>
                                            </div>
                                            
                                            
                                            <button type="submit" class="btn btn-sm btn-primary form_text">
                                               Create
                                            </button>
                                        </div>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-7 col-sm-12 col-12">
                        <div class="card" style="min-height:200px;">
                            <div class="card-header pb-0 pt-2">
                                <h5>Category List</h5>
                            </div>
                            <div class="card-body table-responsive pb-0 pt-2">
                                <div>
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th width="120">#</th>
                                                <th>Name</th>
                                                 <th>Type</th>
                                                <!--<th><?php echo e(session('lang') == 'EN' ? 'Image' : 'Image'); ?></th>-->
                                                <th width="120">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="blogCateList">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
        getBlogCate();

        // size list
        function getBlogCate()
        {
            $.ajax({
                url:'/admin/category_getList',
                type:'get',
                success:function(res){
                    let blogCateList = ``;
                    if (res.categories.length > 0) {
                        $.each(res.categories, (index, value) => {
                            let base_url = window.location.origin;
                            let image_url = value.image;
                            if (value.image == null || value.image == '') {
                                image_url = 'no-img.jpg';
                            }
                            
                            let type = 'URL';
                            if (value.type == 0) {
                                type = "Link"
                            }
                            
                           
                            
                            // <td><img src="${base_url+'/images/category/'+image_url}" style="height:40px"></td>
                            blogCateList += `<tr>
                                            <td>${++index}</td>
                                            <td>${value.name}</td>
                                            <td>${ type }</td>
                                            
                                            <td>
                                                <a href="javascript:void(0)" onclick="blogCateEdit(${value.id})" class="text-success m-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                </a>
                                                <a href="javascript:void(0)" onclick="deleteBlogCate(${value.id})" class="text-danger w-4 h-4 mr-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                </a>
                                            </td>
                                        </tr>`;
                        });
                    }else{
                        blogCateList = `<tr><td colspan="3" class="text-center p-2">No Data Found</td></tr>`;
                    }
                    $(".blogCateList").html(blogCateList);
                }
            })
        }

        function blogCateEdit(id)
        {
            $.ajax({
                url:'/admin/category_edit',
                type:'get',
                data:{id:id},
                success:function(res){
                    let base_url = window.location.origin;
                    // $("#catImg").attr('src', base_url+'/images/category/'+res.category.image);

                    $(".form_text").text('Update');
                    $(".blogCateForm [name=id]").val(res.category.id);
                    $(".blogCateForm [name=name]").val(res.category.name);
                    $(".blogCateForm [name=url]").val(res.category.url);
                    // $(".blogCateForm [name=type]").val(res.category.type);
                   
                    $(".blogCateForm").attr('action', base_url+'/admin/category_update');
                    
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
                    url: '/admin/category_destroy',
                    type: "POST",
                    data: {id: id},
                    success: function (res) {
                        getBlogCate();
                        if (res.success) {
                            alert(res.success);
                        }else{
                            alert(res.error);
                        }
                    }
                });
            }
        }
    </script>
<?php $__env->stopPush(); ?>





<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\WEB-APP\softhostLive\resources\views/admin/category/category_list.blade.php ENDPATH**/ ?>