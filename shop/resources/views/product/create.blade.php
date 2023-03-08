@extends('layouts.main')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить продукты</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{route('product.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Наименование">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" placeholder="Описание">
                    </div>
                    <div class="form-group">
                        <textarea name="content"  class="form-control" placeholder="Контент" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="price" placeholder="Цена">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="count" placeholder="Наименование">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control" value="Добавить">
                    </div>
                </form>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
