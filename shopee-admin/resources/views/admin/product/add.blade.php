@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="POST">

        <div class="card-body">
            <div class="form-group">
                <label for="menu">Tên sản phẩm</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="menu" placeholder="Nhập tên sản phẩm">
            </div>

            <div class="form-group">
                <label for="menu">Danh mục</label>
                <select name="menu_id" class="form-control" id="">
                    @foreach($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Giá (VND)</label>
                <input type="number" name="price" class="form-control"  value="{{ old('price') }}" id="">
            </div>

            <div class="form-group">
                <label>Giá sale (VND)</label>
                <input type="number" name="price_sale" class="form-control" value="{{ old('price_sale') }}" id="" >
            </div>

            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="description" id="" class="form-control" cols="30" rows="4">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label>Mô tả chi tiết</label>
                <textarea name="content" id="content" class="form-control" cols="30" rows="10">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" id="active" name="active">
                    <label class="form-check-label" for="active">Có</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" id="no_active" name="active">
                    <label class="form-check-label" for="no_active">Không</label>
                </div>
            </div>

            <div class="form-group">
                <label for="menu">Ảnh sản phẩm</label>
                <input type="file" name="file" class="form-control" id="upload">
                <div id="image_show">

                </div>
                <input type="hidden" name="thumb" id="thumb">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
