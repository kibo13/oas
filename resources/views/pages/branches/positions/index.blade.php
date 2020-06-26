@extends('layouts.master')

@section('content')
<div id="position-index" class="bk-page overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Должности</h2>

  <div class="py-2 mb-1">
    @if(Auth::user()->permissions()->pluck('slug')->contains('branch_full'))
    <a href="{{ route('positions.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
    @endif
    <a href="{{ route('branches.index') }}" class="btn btn-outline-secondary">
      Отделы
    </a>
  </div>

  <div class="table-responsive">
    <table id="position-table" class="bk-table table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Должность</th>
          @if(Auth::user()->permissions()->pluck('slug')->contains('branch_full'))
          <th scope="col" class="no-sort">Действие</th>
          @endif
        </tr>
      </thead>
      <tbody>
        @foreach($positions as $key => $position)
        <tr>
          <th scope="row">{{ $key+=1 }}</th>
          <td>{{ $position->name }}</td>
          @if(Auth::user()->permissions()->pluck('slug')->contains('branch_full'))
          <td>
            <div class="d-flex">
              <div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
                <a href="{{ route('positions.edit', $position) }}" class="bk-btn-wrap bk-btn-link"></a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.pen')
                </span>
              </div>

              <div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
                <a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $position->id }}" data-table-name="position" data-toggle="modal" data-target="#bk-delete-modal">
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