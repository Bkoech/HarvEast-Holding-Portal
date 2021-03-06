@extends('voyager::master')

@section('content')
 <div class="page-content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">
                    <img src="/storage/app/public/background.jpg" style="max-width: 300px;">
                    <form action="/admin/b_image" method="POST" class="form-inline" role="form" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="file" name="background" accept="image/jpeg">
                        <p>Желательно загружать файлы до 1мб.</p>
                        <button type="submit" class="btn btn-primary">Загрузить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('javascript')

@stop
