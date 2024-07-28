@extends('user.layouts.default')

@section('title')
    @parent
    Danh sách sản phẩm user
@endsection

@push('styles')

@endpush

@section('content')
<!-- Main -->
<div class="p-4" style="min-height: 800px;">
    @if(session('message'))
        <p class="text-danger">{{ session('message') }}</p>
    @endif
    <h4 class="text-primary mb-4">Danh sách sản phẩm</h4>
    <button class="btn btn-info">Thêm mới</button>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Nokia 520</td>
                <td>15000000 vnđ</td>
                <td>
                    Điện thoại mới giá ổn
                </td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Nokia 520</td>
                <td>15000000 vnđ</td>
                <td>
                    Điện thoại mới giá ổn
                </td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Nokia 520</td>
                <td>15000000 vnđ</td>
                <td>
                    Điện thoại mới giá ổn
                </td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Nokia 520</td>
                <td>15000000 vnđ</td>
                <td>
                    Điện thoại mới giá ổn
                </td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger">Xóa</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>



@endsection



@push('scripts')

@endpush