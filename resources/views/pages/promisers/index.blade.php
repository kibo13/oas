@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="bk-title mb-4" data-desc="(откл. квартиросъемщики)">
    Потребители
  </h2>

  @if(Auth::user()->roles()->pluck('slug')->contains('audit'))
  <div class="py-2 mt-1">
    <a href="{{ route('promisers.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
  </div>
  @endif

  @if($count != 0)
  <div class="mt-1 mb-2 bk-callout bk-callout-info">
    <h6 class="m-0 p-0">
      Количество откл.квартиросъемщиков<br>на
      <span class="bk-text--info text-info font-weight-bold">{{ getDMY($today) }}г.</span>
      составляет:
      <span class="bk-text--info text-info font-weight-bold">{{ $count }}</span>
    </h6>
  </div>
  @endif

  <div class="table-responsive mt-1">
    <table class="bk-table table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Адрес</th>
          <th scope="col">Дата отключения</th>
          <th scope="col">Дата подключения</th>
          @if(Auth::user()->roles()->pluck('slug')->contains('audit'))
          <th scope="col">Действие</th>
          @endif
        </tr>
      </thead>
      <tbody>

        @foreach($promisers as $id => $promiser)
        <tr>
          <td>{{ $id+=1 }}</td>
          <td class="address">
            {{ $promiser->street->name }}
            {{ $promiser->num_home }}
            {{ $promiser->num_corp }}
            -
            {{ $promiser->num_flat }}
          </td>
          <td>{{ getDMY($promiser->date_off) }}г.</td>
          <td>
            @if($promiser->date_on == null)
            <span class="text-danger font-weight-bold">отключен</span>
            @else
            {{ getDMY($promiser->date_on) }}г.
            @endif
          </td>
          @if(Auth::user()->roles()->pluck('slug')->contains('audit'))
          <td>
            <div class="d-flex">
              <div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
                <a href="{{ route('promisers.edit', $promiser) }}" class="bk-btn-wrap bk-btn-link"></a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.pen')
                </span>
              </div>

              <div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
                <a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $promiser->id }}" data-table-name="promiser" data-toggle="modal" data-target="#bk-delete-modal">
                </a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.trash')
                </span>
              </div>

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