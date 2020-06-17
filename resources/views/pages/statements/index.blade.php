@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-1">Заявки</h2>

  @if(Auth::user()->roles()->pluck('slug')->contains('disp'))
  <div class="py-2 mt-1">
    <a href="{{ route('statements.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
  </div>
  @endif

  @if($total != 0)
  <div class="mt-1 mb-2 pt-3 bk-callout bk-callout-info">
    <h5 class="mb-0">
      Контроль заявок
      <span class="bk-text--info text-info align-top font-weight-bold">
        {{ getDMY($today) }}г.
      </span>
    </h5>
    <p class="d-flex m-0 mt-2 p-0">
      Общее количество неустранненых заявок составляет
      <span class="bk-text--info text-info font-weight-bold mx-1">
        {{ $total }}
      </span>
      <a id="stat-triangle" href="javascript:void(0)" class="bk-btn bk-btn-triangle" data-tip="Подробнее">
        <span class="bk-btn-triangle--down"></span>
      </a>
    </p>
    <ul id="stat-list" class="m-0 p-0">
      <li class="bk-text--info text-info font-weight-bold">Количество 10</li>
      <li class="bk-text--info text-info font-weight-bold">Количество 10</li>
      <li class="bk-text--info text-info font-weight-bold">Количество 10</li>
    </ul>
  </div>
  @endif

  <div class="table-responsive mt-1">
    <table class="bk-table table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Участок</th>
          <th scope="col">Адрес</th>
          <th scope="col">Поступила</th>
          <th scope="col">Тип(э/с)</th>
          <th scope="col">Неисправность</th>
          <th scope="col">Статус</th>
          <th scope="col">Принял</th>
          @if(Auth::user()->roles()->pluck('slug')->contains('disp'))
          <th scope="col">Действие</th>
          @endif
        </tr>
      </thead>
      <tbody>

        @foreach($statements as $id => $statement)
        <tr>
          <td>{{ $id+=1 }}</td>
          <td>{{ $statement->branch->name }}</td>
          <td>{{ $statement->street->name }} {{ $statement->num_home }} - {{ $statement->num_flat }} </td>
          <td>{{ getDMY($statement->date_in) }}г. <small class="text-muted align-text-top">{{ getHI($statement->time_in) }}</small></td>
          <td>{{ $statement->type->name }}</td>
          <td>{{ $statement->desc }}</td>
          <td>
            @if($statement->state == 0)
            зарегистр.
            @elseif($statement->state == 1)
            локализ.
            @else
            устранено
            @endif
          </td>
          <td>
            {{ $statement->receiver }}
            <small class="text-muted align-top">{{ $statement->plot }}</small>
          </td>
          @if(Auth::user()->roles()->pluck('slug')->contains('disp'))
          <td>
            <div class="d-flex">
              <div class="bk-btn bk-btn-crud btn btn-info mr-1" data-tip="Состояние">
                <a href="{{ route('statements.show', $statement) }}" class="bk-btn-wrap bk-btn-link"></a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.flag')
                </span>
              </div>

              <div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
                <a href="{{ route('statements.edit', $statement) }}" class="bk-btn-wrap bk-btn-link"></a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.pen')
                </span>
              </div>

              <div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
                <a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $statement->id }}" data-table-name="statement" data-toggle="modal" data-target="#bk-delete-modal">
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

  {{ $statements->links() }}
</div>
@endsection