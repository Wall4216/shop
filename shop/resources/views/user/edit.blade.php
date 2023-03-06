@extends('layouts.main')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать пользователя</h1>
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
                <form action="{{route('user.update', $user->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{old('name')}}" class="form-control" name="name" placeholder="Имя">
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{old('surname')}}" class="form-control" name="surname" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{old('age')}}" class="form-control" name="age" placeholder="Возраст">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{old('patronymic')}}" class="form-control" name="patronymic" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{old('address')}}" class="form-control" name="address" placeholder="Адрес">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Пол</option>
                            <option {{old($user->gender == 1 || old('gender') ? ' selected' : '')}} value="1">Мужской</option>
                            <option {{old($user->gender == 1 || old('gender') ? ' selected' : '')}} value="2">Женский</option>
                        </select>
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
