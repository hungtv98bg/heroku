<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tạo lịch hẹn</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{route('areas.store')}}" id="create-form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="col-12 mb-2">
                        <label for="areaId" class="form-label visually-hidden">Bác sĩ</label>
                        <input name="id" class="form-control" id="create_areaId" placeholder="Bác sĩ" value="" required>
                    </div>
                    <div class="mb-2 col-12">
                        <label for="areaName" class="form-label visually-hidden">Bệnh nhân</label>
                        <input name="name" class="form-control" id="create_areaName" placeholder="Bệnh nhân" value="" required>
                    </div>
                    <div class="mb-2 col-12">
                        <label for="areaAddress" class="form-label visually-hidden">Địa chỉ</label>
                        <input name="address" class="form-control" id="create_areaAddress" placeholder="Địa chỉ" value="" required>
                    </div>
                    <div class="mb-2 col-12">
                        <label for="areaAddress" class="form-label visually-hidden">Ngày hẹn khám</label>
                        <input name="address" class="form-control" id="create_areaAddress" placeholder="Ngày hẹn khám" value="" required>
                    </div>
                    <div class="mb-2 col-12">
                        <label for="areaAddress" class="form-label visually-hidden">Lý do khám bệnh</label>
                        <input name="address" class="form-control" id="create_areaAddress" placeholder="Lý do khám bệnh" value="" required>
                    </div>
                    <div class="mb-12 col-12">
                        <label for="areaAddress" class="form-label visually-hidden">Tiểu sử bệnh nhân</label>
                        <input name="address" class="form-control" id="create_areaAddress" placeholder="Tiểu sử bệnh nhân" value="" required>
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

<!--script-->
<script>
    function createmodalShow(event) {
            event.preventDefault();
            event.stopPropagation();
            $('#create_areaId').val("")
            $('#create_countryId').val("")
            $('#create_areaName').val("")
            $('#create_areaAddress').val("")
        }
</script>
