@extends('layouts.master')

@section('content')
<div id="organ-index" class="overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Предприятия</h2>

  @if(Auth::user()->permissions()->pluck('slug')->contains('build_full'))
  <div class="py-2 mb-1">
    <a href="{{ route('organizations.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
  </div>
  @endif

  <div class="table-responsive">
    <table id="organ-table" class="bk-table table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Предприятие</th>
          @if(Auth::user()->permissions()->pluck('slug')->contains('build_full'))
          <th scope="col">Действие</th>
          @endif
        </tr>
      </thead>

      <tbody>
        @foreach($organizations as $key => $organization)
        <tr>
          <th scope="row">{{ $key+=1 }}</th>
          <td>{{ $organization->name }}</td>
          @if(Auth::user()->permissions()->pluck('slug')->contains('build_full'))
          <td>
            <div class="d-flex">
              <div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
                <a href="{{ route('organizations.edit', $organization) }}" class="bk-btn-wrap bk-btn-link"></a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.pen')
                </span>
              </div>

              <div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
                <a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $organization->id }}" data-table-name="organization" data-toggle="modal" data-target="#bk-delete-modal">
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