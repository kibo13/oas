@extends('layouts.master')

@section('content')
<div id="log-index" class="overflow-hidden pt-4 py-2">
  <h2 class="bk-title" data-desc="(по заявке №{{ $statement->id }})">
    Журнал действий
  </h2>

  <div style="margin: 30px 0 10px;">
    <a href="{{ route('statements.index') }}" class="btn btn-outline-secondary">
      Заявки
    </a>
  </div>

  <div class="table-responsive">
    <table id="log-table" class="bk-table table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Статус</th>
          <th scope="col">Дата и время</th>
          <th scope="col">Принятые меры</th>
          <th scope="col">Внес изменения</th>
          @if(Auth::user()->permissions()->pluck('slug')->contains('bid_full'))
          <th scope="col" class="no-sort">Действие</th>
          @endif
        </tr>
      </thead>
      <tbody>

        @foreach($logs as $id => $log)
        <tr>
          <td>{{ $id+=1 }}</td>
          <td>
            @if($log->state == 0)
            зарегистр.
            @elseif($log->state == 1)
            локализ.
            @else
            устранено
            @endif
          </td>
          <td>{{ getDMY($log->date_log) }}г. <small class="text-muted align-text-top">{{ getHI($log->time_log) }}</small></td>
          <td>{{ $log->solution }}</td>
          <td>{{ $log->receiver }} <small class="text-muted align-text-top">{{ $log->plot }}</small></td>

          @if(Auth::user()->permissions()->pluck('slug')->contains('bid_full'))
          <td>
            <div class="d-flex">

              <div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
                <a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $log->id }}" data-table-name="log" data-toggle="modal" data-target="#bk-delete-modal">
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
</div>
@endsection