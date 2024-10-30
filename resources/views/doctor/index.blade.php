@extends('layouts.app')

@section('title')
/ Bác sĩ
@endsection

@section('content')

<section class="content container">

    @if (session('error'))
        <div id ="alert-message" class="alert alert-danger my-4 alert-dismissible">
            {{ session('error') }}
            <button type="button" class="close text-white" data-dismiss="alert">&times;</button>
        </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger pb-0 alert-dismissible">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close text-white" data-dismiss="alert">&times;</button>
    </div>
    @endif

    @if(session('success'))
        <div id ="alert-message" class="alert alert-success mb-4 mb-0 alert-dismissible">
            {{ session('success') }}
            <button type="button" class="close text-white" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <div class="container-fluid">
    @role('admin|pharmacy')
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-success rounded mb-2" onclick="createmodalShow(event)" data-bs-toggle="modal" data-bs-target="#create">Thêm mới</button>
        </div>
    @endrole
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Họ và tên</th>
                <th>Tuổi</th>
                <th>Điện thoại</th>
                <th>Giới tính</th>
                <th>Email</th>
                <th>Mật khẩu</th>
                <th>Địa chỉ</th>
                <th>Chuyên khoa</th>
                <th>Kinh nghiệm</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor['name'] }}</td>
                    <td>{{ $doctor['age'] }}</td>
                    <td>{{ $doctor['phone'] }}</td>
                    <td>{{ $doctor['gender'] }}</td>
                    <td>{{ $doctor['email'] }}</td>
                    <td>{{ $doctor['password'] }}</td>
                    <td>{{ $doctor['address'] }}</td>
                    <td>{{ $doctor['specialization'] }}</td>
                    <td>{{ $doctor['experience'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>


    <!-- Create Doctor Moadal -->
    @include('doctor.create')

    <!-- Show Doctor Moadal -->
    @include('doctor.show')

    <!-- Edit Doctor Moadal -->
    @include('doctor.edit')

    <!-- Delete Doctor Moadal -->
    @include('doctor.delete')


</section>

@endsection


@push('scripts')
{{ $dataTable->scripts() }}
<script>
setTimeout(function() {
            $('.alert-success').fadeOut();
        }, {{ session('timeout') }});
</script>
@endpush


