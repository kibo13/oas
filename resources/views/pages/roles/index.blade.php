@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Роли</h2>

  <div class="py-2 mb-1">
    <a href="{{ route('roles.create') }}" class="btn btn-outline-primary">
      Новая роль
    </a>
    <a href="{{ route('users.index') }}" class="btn btn-outline-secondary">
      Пользователи
    </a>
  </div>

  <div class="table-responsive">
    <table class="bk-table table table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Наименование</th>
          <th scope="col">Пользователи</th>
          <th scope="col">Действие</th>
        </tr>
      </thead>
      <tbody>
        @foreach($roles as $key => $role)
        <tr>
          <td>{{ $key+=1 }}</td>
          <td>{{ $role->name }}</td>
          <td>{{ $role->users()->pluck('name')->implode(', ') }}</td>
          <td>
            <div>
              <form action="{{ route('roles.destroy', $role) }}" method="POST">
                <div class="d-flex">

                  <div class="bk-crud__wrap mr-1">
                    <a href="{{ route('roles.edit', $role) }}" class="bk-crud__btn btn btn-warning mr-1">
                      Р
                    </a>
                    <span class="bk-crud__tip">Редактировать</span>
                  </div>

                  <div class="bk-crud__wrap">
                    @csrf
                    @method('DELETE')
                    <input class="bk-crud__btn btn btn-danger" type="submit" value="У">
                    <span class="bk-crud__tip">Удалить</span>
                  </div>
                </div>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
@endsection