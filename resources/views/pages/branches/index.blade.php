@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Отделы</h2>

  <div class="py-2 mb-1">
    <a href="{{ route('branches.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
  </div>

  <div class="table-responsive">
    <table class="bk-table table table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Отдел</th>
          <th scope="col">Действие</th>
        </tr>
      </thead>
      <tbody>
        @foreach($branches as $key => $branch)
        <tr>
          <th scope="row">{{ $key+=1 }}</th>
          <td>{{ $branch->name }}</td>
          <td>
            <div>
              <form action="{{ route('branches.destroy', $branch) }}" method="POST">
                <div class="d-flex">

                  <div class="bk-crud__wrap mr-1">
                    <a href="{{ route('branches.edit', $branch) }}" class="bk-crud__btn btn btn-warning mr-1">
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
  {{ $branches->links() }}
</div>
@endsection