<!-- Create Pharmacy Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm mới</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('doctors.store') }}" id="create-form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body row gy-2 gx-3 align-items-center">
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
                    <div class="col-md-6 mb-2">
                        <label for="email" class="form-label visually-hidden">Email</label>
                        <div class="input-group">
                            <span class="input-group-text" id="email-icon">@</span>
                            <input name="email"type="email" class="form-control" id="email" aria-describedby="email-icon" placeholder="Email" value="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="pass" class="form-label visually-hidden">Password</label>
                        <input name="password" type="password" class="form-control" id="pass" placeholder="Password" value="">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="name" class="form-label visually-hidden">Địa chỉ</label>
                        <input name="name" class="form-control" id="name" placeholder="Địa chỉ" value="">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="name" class="form-label visually-hidden">Chuyên khoa</label>
                        <input name="name" class="form-control" id="name" placeholder="Chuyên khoa" value="">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="name" class="form-label visually-hidden">Kinh nghiệm</label>
                        <input name="name" class="form-control" id="name" placeholder="Kinh nghiệm" value="">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input name="avatar_image" type="file" class="form-control" id="avatar">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success text-white">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
