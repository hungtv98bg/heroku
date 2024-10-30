<div class="modal fade" id="create-client" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm mới bệnh nhân</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{route('clients.store')}}" id="create-form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body row g-3">
                    <div class="col-md-8 mb-2">
                        <label for="name" class="form-label visually-hidden">Họ và tên</label>
                        <input name="name" class="form-control" id="name" placeholder="Họ và tên" value="">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="name" class="form-label visually-hidden">Tuổi</label>
                        <input name="name" class="form-control" id="name" placeholder="Tuổi" value="">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="name" class="form-label visually-hidden">Số điện thoại</label>
                        <input name="name" class="form-control" id="name" placeholder="Số điện thoại" value="">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="name" class="form-label visually-hidden">Giới tính</label>
                        <input name="name" class="form-control" id="name" placeholder="Giới tính" value="">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="name" class="form-label visually-hidden">Địa chỉ</label>
                        <input name="name" class="form-control" id="name" placeholder="Địa chỉ" value="">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="name" class="form-label visually-hidden">Tiền sử bệnh</label>
                        <input name="name" class="form-control" id="name" placeholder="Tiền sử bệnh" value="">
                    </div>
                    <div class="col-md-12 ">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input name="avatar_image" class="form-control" type="file" id="avatar" accept=".jpg,.png">
                    </div>
                    <input name="password_confirmation" class="form-control" id="client-password-confirmation" value="" hidden>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success text-white">Create</button>
                </div>
            </form>
        </div>
    </div>
</div> 

<!--scripts-->
@push('scripts')
<script>
    function createmodalShow(event) {
                event.preventDefault();
                event.stopPropagation();
                $('input').val("")
            }
    $("#client-password").on("input", function() {
    $('#client-password-confirmation').val($(this).val())
    });
</script>
@endpush