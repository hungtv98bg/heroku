<!--Pharmacy Info Modal-->
<div class="modal fade" id="showPharmacyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông tin nhà thuốc</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column justify-content-center align-items-center">
                <div class="flex-column justify-content-center align-items-center mb-3">
                    <img id="pharmacyAvatar" class="animation__wobble img-circle elevation-2" src="" alt="Pharmacy-Avatar" height="100"
                        width="100">
                </div>
                <ul class="nav nav-pills nav-sidebar flex-column justify-content-center align-items-center gap-1" data-widget="treeview" role="menu" data-accordion="false" style="font-family: nunito;">
                    <li class="nav-item sidebar-list">
                        <img src="dist/img/icons/Pharmacy-Name-icon.png" class="nav-icon">
                        <span class="border-container">
                            <strong>Tên nhà thuốc: </strong><span id="pharmacyName"></span>
                        </span>
                    </li>
                    <li class="nav-item sidebar-list">
                        <img src="dist/img/icons/ID-icon.png" class="nav-icon">
                        <span class="border-container">
                            <strong>Người quản lý: </strong><span id="pharmacynguoiquanly"></span>
                        </span>
                    </li>
                    <li class="nav-item sidebar-list">
                        <img src="dist/img/icons/Name-icon.png" class="nav-icon">
                        <span class="border-container">
                            <strong>Người quản lý: </strong><span id="pharmacyOwnerName"></span>
                        </span>
                    </li>
                    <li class="nav-item sidebar-list">
                        <img src="dist/img/icons/Email-icon.png" class="nav-icon">
                        <span class="border-container">
                            <strong>Email: </strong><span id="Email"></span>
                        </span>
                    </li>
                    <li class="nav-item sidebar-list">
                        <img src="dist/img/icons/Priority-icon.png" class="nav-icon">
                        <span class="border-container">
                            <strong>Số điện thoại: </strong><span id="pharmacyPriority"></span>
                        </span>
                    </li>
                    <li class="nav-item sidebar-list">
                        <img src="dist/img/icons/Area-icon.png" class="nav-icon">
                        <span class="border-container">
                            <strong>Vùng: </strong><span id="pharmacyArea"></span>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Script-->
<script>
    function showPharmacyModal(event) {
        var pharmacyId = event.target.id;
            $.ajax({
                url: "{{ route('pharmacies.show', ':id') }}".replace(':id', pharmacyId),
                method: "GET",
                success: function(response) {
                    $('#pharmacyAvatar').attr("src","{{ asset('storage/pharmacies_Images/image') }}".replace('image', response.pharmacy.avatar_image));
                    $('#pharmacyID').text(response.pharmacy.id);
                    $('#pharmacyName').text(response.pharmacy.pharmacy_name);
                    $('#pharmacyOwnerName').text(response.user.name);
                    $('#pharmacyOwnerEmail').text(response.user.email);
                    $('#pharmacyPriority').text(response.pharmacy.priority)
                    $('#pharmacyArea').text(response.areas.find(area=>area.id === response.pharmacy.area_id).name)
                }
            });
    }
</script>


