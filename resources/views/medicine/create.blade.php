<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tạo thuốc</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('medicines.store') }}" id="create-form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="medName" class="form-label visually-hidden">Tên thuốc</label>
                        <input name="name" class="form-control" id="create_medName" placeholder="Tên thuốc" value="">
                    </div>
                    <div class="mb-2">
                        <label for="medType" class="form-label visually-hidden">Loại thuốc</label>
                        <input name="type" class="form-control" id="create_medType" placeholder="Loại thuốc" value="">
                    </div>
                    <div class="mb-2">
                        <label for="medQuntity" class="form-label visually-hidden">Số lượng</label>
                        <input name="quantity" class="form-control" id="create_medQuntity" placeholder="Số lượng" value="">
                    </div>
                    <div class="mb-2">
                        <label for="medPrice" class="form-label visually-hidden">Giá</label>
                        <input name="price" class="form-control" id="create_medPrice" placeholder="Giá" value="">
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
