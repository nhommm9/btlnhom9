@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="POST">

        <div class="card-body">
            <div class="form-group">
                <label for="menu">Tên danh mục</label>
                <input type="text" name="name" class="form-control" id="menu" placeholder="Nhập tên danh mục">
            </div>

            <div class="form-group">
                <label for="menu">Danh mục</label>
                <select name="parent_id" class="form-control" id="">
                    <option value="0">Danh mục cha</option>
                    @foreach($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="description" id="" class="form-control" cols="30" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label>Mô tả chi tiết</label>
                <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
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
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo danh mục</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
