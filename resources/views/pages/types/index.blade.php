@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Типы</h2>

  <div class="py-2 mb-1">
    <a href="{{ route('types.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
  </div>

  <div class="table-responsive">
    <table class="bk-table table table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Тип</th>
          <th scope="col">Действие</th>
        </tr>
      </thead>
      <tbody>
        @foreach($types as $key => $type)
        <tr>
          <th scope="row">{{ $key+=1 }}</th>
          <td>{{ $type->name }}</td>
          <td>
            <div class="d-flex">

              <div class="bk-crud__wrap">
                <a href="{{ route('types.edit', $type) }}" class="bk-crud__btn btn btn-warning mr-1">
                  Р
                </a>
                <span class="bk-crud__tip">Редактировать</span>
              </div>

              <div class="bk-crud__wrap">
                <form action="{{ route('types.destroy', $type) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input class="bk-crud__btn btn btn-danger" type="submit" value="У">
                  <span class="bk-crud__tip">Удалить</span>
                </form>
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