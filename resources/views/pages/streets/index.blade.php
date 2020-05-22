@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Улицы</h2>

  <div class="py-2 mb-1">
    <a href="{{ route('streets.create') }}" class="btn btn-outline-primary">
      Новая улица
    </a>
  </div>

  <div class="table-responsive">
    <table class="bk-table table table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Улица</th>
          <th scope="col">Действие</th>
        </tr>
      </thead>
      <tbody>
        @foreach($streets as $key => $street)
        <tr>
          <th scope="row">{{ $key+=1 }}</th>
          <td>{{ $street->name }}</td>
          <td>
            <div>
              <form action="{{ route('streets.destroy', $street) }}" method="POST">
                <div class="d-flex">

                  <div class="bk-crud__wrap mr-1">
                    <a href="{{ route('streets.edit', $street) }}" class="bk-crud__btn btn btn-warning mr-1">
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
  {{ $streets->links() }}
</div>
@endsection