@extends('admin.layouts.default')

@section('title')
    @parent
    Thêm mới sản phẩm
@endsection

@push('styles')

@endpush

@section('content')
<div class="p-4" style="min-height: 800px;">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.products.addPostProduct') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nameSP">Tên sản phẩm</label>
            <input type="text" name="nameSP" id="nameSP" class="form-control">
            @error('nameSP')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="descriptionSP">Miêu tả sản phẩm</label>
            <input type="text" name="descriptionSP" id="descriptionSP" class="form-control">
            @error('descriptionSP')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="priceSP">Giá sản phẩm</label>
            <input type="text" name="priceSP" id="priceSP" class="form-control">
            @error('priceSP')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="imageSP">Ảnh sản phẩm</label>
            <input type="file" name="imageSP" id="imageSP" class="form-control">
            @error('imageSP')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button class="btn btn-success">Thêm mới</button>
    </form>
</div>
@endsection

@push('scripts')

@endpush