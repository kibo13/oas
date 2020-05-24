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
          <th scope="col">Дата отключения</th>
          <th scope="col">Дата подключения</th>
          @if(Auth::user()->roles()->pluck('slug')->contains('audit'))
          <th scope="col">Действие</th>
          @endif
        </tr>
      </thead>
      <tbody>

       

      </tbody>
    </table>
  </div>
  {{ $promisers->links() }}
</div>
@endsection