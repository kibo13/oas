@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Предприятия</h2>

  <div class="py-2 mb-1">
    <a href="{{ route('organizations.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
  </div>

  <div class="table-responsive">
    <table class="bk-table table table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Предприятие</th>
          <th scope="col">Действие</th>
        </tr>
      </thead>
      <tbody>
        @foreach($organizations as $key => $organization)
        <tr>
          <th scope="row">{{ $key+=1 }}</th>
          <td>{{ $organization->name }}</td>
          <td>
            <div class="d-flex">

              <div class="bk-crud__wrap">
                <a href="{{ route('organizations.edit', $organization) }}" class="bk-crud__btn btn btn-warning mr-1">
                  Р
                </a>
                <span class="bk-crud__tip">Редактировать</span>
              </div>

              <div class="bk-crud__wrap">
                <form action="{{ route('organizations.destroy', $organization) }}" method="POST">
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
  {{ $organizations->links() }}
</div>
@endsection