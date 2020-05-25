@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-1">Отключенные потребители</h2>

  @if(Auth::user()->roles()->pluck('slug')->contains('audit'))
  <div class="py-2 mt-1">
    <a href="{{ route('promisers.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
  </div>
  @endif

  <div class="table-responsive mt-1">
    <table class="bk-table table table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Тип (э/с)</th>
          <th scope="col">Адрес</th>
          <th scope="col">Дата подключения</th>
          <th scope="col">Дата отключения</th>
          @if(Auth::user()->roles()->pluck('slug')->contains('audit'))
          <th scope="col">Действие</th>
          @endif
        </tr>
      </thead>
      <tbody>

        @foreach($promisers as $id => $promiser)
        <tr>
          <td>{{ $id+=1 }}</td>
          <td>{{ $promiser->type->name }}</td>
          <td class="address">
            {{ $promiser->street->name }}
            {{ $promiser->num_home }}
            {{ $promiser->num_corp }}
            -
            {{ $promiser->num_flat }}
          </td>

          <td>{{ date('d.m.Y', strtotime($promiser->date_on)) }}</td>
          <td>{{ date('d.m.Y', strtotime($promiser->date_off)) }}</td>
          @if(Auth::user()->roles()->pluck('slug')->contains('audit'))
          <td>
            <div>
              <form action="{{ route('promisers.destroy', $promiser) }}" method="POST">
                <div class="d-flex">

                  <div class="bk-crud__wrap mr-1">
                    <a href="{{ route('promisers.edit', $promiser) }}" class="bk-crud__btn btn btn-warning mr-1">
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
          @endif
        </tr>
        @endforeach



      </tbody>
    </table>
  </div>
  {{ $promisers->links() }}
</div>
@endsection