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
    <p class="m-0 mt-2 p-0">
      Общее количество неустранненых заявок составляет
      <span class="bk-text--info text-info font-weight-bold">
        {{ $total }}
      </span>
    </p>
    <ul class="m-0 p-0">

      <li></li>
      <li> </li>
      <li>Из них:</li>
      <li>Из них:</li>
      <li>Из них:</li>
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

              <div class="bk-crud__wrap">
                <a href="{{ route('statements.show', $statement) }}" class="bk-crud__btn btn btn-info mr-1">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="flag" class="bk-crud__icon svg-inline--fa fa-flag fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M349.565 98.783C295.978 98.783 251.721 64 184.348 64c-24.955 0-47.309 4.384-68.045 12.013a55.947 55.947 0 0 0 3.586-23.562C118.117 24.015 94.806 1.206 66.338.048 34.345-1.254 8 24.296 8 56c0 19.026 9.497 35.825 24 45.945V488c0 13.255 10.745 24 24 24h16c13.255 0 24-10.745 24-24v-94.4c28.311-12.064 63.582-22.122 114.435-22.122 53.588 0 97.844 34.783 165.217 34.783 48.169 0 86.667-16.294 122.505-40.858C506.84 359.452 512 349.571 512 339.045v-243.1c0-23.393-24.269-38.87-45.485-29.016-34.338 15.948-76.454 31.854-116.95 31.854z"></path>
                  </svg>
                </a>
                <span class="bk-crud__tip">Состояние</span>
              </div>


              <div class="bk-crud__wrap">
                <a href="{{ route('statements.edit', $statement) }}" class="bk-crud__btn btn btn-warning mr-1">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-nib" class="bk-crud__icon bk-crud__icon--edit  svg-inline--fa fa-pen-nib fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M136.6 138.79a64.003 64.003 0 0 0-43.31 41.35L0 460l14.69 14.69L164.8 324.58c-2.99-6.26-4.8-13.18-4.8-20.58 0-26.51 21.49-48 48-48s48 21.49 48 48-21.49 48-48 48c-7.4 0-14.32-1.81-20.58-4.8L37.31 497.31 52 512l279.86-93.29a64.003 64.003 0 0 0 41.35-43.31L416 224 288 96l-151.4 42.79zm361.34-64.62l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.75 18.75-49.15 0-67.91z"></path>
                  </svg>
                </a>
                <span class="bk-crud__tip">Редактировать</span>
              </div>

              <div class="bk-crud__del btn btn-danger">
                <span class="bk-crud__del--link">
                  <a href="javascript:void(0)" class="bk-btn-del" data-toggle="modal" data-target="#bk-delete-modal" data-id="{{ $statement->id }}" data-table-name="statement"></a>
                </span>
                <span class="bk-crud__del--icon">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-alt" class="bk-crud__del--size svg-inline--fa fa-trash-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path>
                  </svg>
                </span>
                <span class="bk-crud__tip">Удалить</span>
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