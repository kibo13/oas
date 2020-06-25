@extends('layouts.master')

@section('content')
<div id="street-index" class="overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Улицы</h2>

  <div class="py-2 mb-1">
    @if(Auth::user()->permissions()->pluck('slug')->contains('address_full'))
    <a href="{{ route('streets.create') }}" class="btn btn-outline-primary">
      Новая запись
    </a>
    @endif
    <a href="{{ route('addresses.index') }}" class="btn btn-outline-secondary">
      Адреса
    </a>
  </div>

  <div class="table-responsive">
    <table id="street-table" class="bk-table table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Улица</th>
          @if(Auth::user()->permissions()->pluck('slug')->contains('address_full'))
          <th scope="col">Действие</th>
          @endif
        </tr>
      </thead>
      <tbody>
        @foreach($streets as $key => $street)
        <tr>
          <th scope="row">{{ $key+=1 }}</th>
          <td>{{ $street->name }}</td>
          @if(Auth::user()->permissions()->pluck('slug')->contains('address_full'))
          <td>
            <div class="d-flex">
              <div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
                <a href="{{ route('streets.edit', $street) }}" class="bk-btn-wrap bk-btn-link"></a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.pen')
                </span>
              </div>

              <div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
                <a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $street->id }}" data-table-name="street" data-toggle="modal" data-target="#bk-delete-modal">
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