@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Роли</h2>

  <div class="py-2 mb-1">
    <a href="{{ route('roles.create') }}" class="btn btn-outline-primary">
      Новая запись
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
            <div class="d-flex">

              <div class="bk-crud__wrap">
                <a href="{{ route('roles.edit', $role) }}" class="bk-crud__btn btn btn-warning mr-1">
                  Р
                </a>
                <span class="bk-crud__tip">Редактировать</span>
              </div>

              <div class="bk-crud__wrap">
                <a 
                  href="javascript:void(0)" 
                  class="bk-crud__btn bk-crud__btn--del btn btn-danger" 
                  data-toggle="modal" 
                  data-target="#bk-delete-modal"
                  data-id="{{ $role->id }}"
                  data-table-name="role"
                >
                  У
                </a>
                <span class="bk-crud__tip">Удалить</span>
              </div>

            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
@endsection