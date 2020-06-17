@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Отделы</h2>

  <div class="py-2 mb-1">
    <a href="{{ route('branches.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
    <a href="{{ route('positions.index') }}" class="btn btn-outline-secondary">
      Должности
    </a>
  </div>

  <div class="table-responsive">
    <table class="bk-table table table-bordered table-hover">
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
            <div class="d-flex">
              <div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
                <a href="{{ route('branches.edit', $branch) }}" class="bk-btn-wrap bk-btn-link"></a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.pen')
                </span>
              </div>

              <div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
                <a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $branch->id }}" data-table-name="branch" data-toggle="modal" data-target="#bk-delete-modal">
                </a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.trash')
                </span>
              </div>

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