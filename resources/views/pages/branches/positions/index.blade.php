@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Должности</h2>

  <div class="py-2 mb-1">
    <a href="{{ route('positions.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
    <a href="{{ route('branches.index') }}" class="btn btn-outline-secondary">
      Отделы
    </a>
  </div>

  <div class="table-responsive">
    <table class="bk-table table table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Должность</th>
          <th scope="col">Действие</th>
        </tr>
      </thead>
      <tbody>
        @foreach($positions as $key => $position)
        <tr>
          <th scope="row">{{ $key+=1 }}</th>
          <td>{{ $position->name }}</td>
          <td>
            <div class="d-flex">

              <div class="bk-crud__wrap">
                <a href="{{ route('positions.edit', $position) }}" class="bk-crud__btn btn btn-warning mr-1">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-nib" class="bk-crud__icon bk-crud__icon--edit  svg-inline--fa fa-pen-nib fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M136.6 138.79a64.003 64.003 0 0 0-43.31 41.35L0 460l14.69 14.69L164.8 324.58c-2.99-6.26-4.8-13.18-4.8-20.58 0-26.51 21.49-48 48-48s48 21.49 48 48-21.49 48-48 48c-7.4 0-14.32-1.81-20.58-4.8L37.31 497.31 52 512l279.86-93.29a64.003 64.003 0 0 0 41.35-43.31L416 224 288 96l-151.4 42.79zm361.34-64.62l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.75 18.75-49.15 0-67.91z"></path>
                  </svg>
                </a>
                <span class="bk-crud__tip">Редактировать</span>
              </div>

              <div class="bk-crud__del btn btn-danger">
                <span class="bk-crud__del--link">
                  <a href="javascript:void(0)" class="bk-btn-del" data-toggle="modal" data-target="#bk-delete-modal" data-id="{{ $position->id }}" data-table-name="position"></a>
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
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  {{ $positions->links() }}
</div>
@endsection