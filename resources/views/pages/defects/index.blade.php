@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-1">Неисправности</h2>

  <div class="py-2 mt-1">
    <a href="{{ route('defects.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
  </div>

  <div class="table-responsive mt-1">
    <table class="bk-table table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Тип</th>
          <th scope="col">Принадлежность</th>
          <th scope="col">Описание</th>
          <th scope="col">Действие</th>
        </tr>
      </thead>
      <tbody>

        @foreach($defects as $id => $defect)
        <tr>
          <td>{{ $id+=1 }}</td>
          <td>{{ $defect->type->name }}</td>
          <td>{{ $defect->attachment }}</td>
          <td>{{ $defect->desc }}</td>
          <td>
            <div class="d-flex">
              <div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
                <a href="{{ route('defects.edit', $defect) }}" class="bk-btn-wrap bk-btn-link"></a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.pen')
                </span>
              </div>

              <div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
                <a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $defect->id }}" data-table-name="defect" data-toggle="modal" data-target="#bk-delete-modal">
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
  {{ $defects->links() }}
</div>
@endsection