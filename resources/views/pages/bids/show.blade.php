@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h4 class="mb-3">
    Статус по заявке №{{ $bid->id }}<br>
    <small class="bk-text text-muted">от {{ date('d.m.Y', strtotime($bid->date_in)) }}г. <span class="bk-text--small align-text-top">{{ date('H:i', strtotime($bid->time_in)) }}</span></small>
  </h4>

  <div class="row p-0 m-0">
    <!-- START group address -->
    <h6 class="w-100 border-bottom mb-0 mr-3 py-1 pl-0 font-weight-bold">Адрес</h6>
    <div data-type="{{ $bid->type_id }}" class="w-100 form-group mb-1 pl-0 mr-3">
      <span class="text-muted">{{ $bid->street->name }} {{ $bid->num_home }} - {{ $bid->num_flat }}</span>
    </div>
    <!-- END group address -->

    <!-- START group defect -->
    <h6 class="w-100 border-bottom mb-0 mr-3 py-1 pl-0 font-weight-bold">
      Неисправность
      <small class="bk-text text-muted align-text-top text-lowercase">{{ $bid->type->name }}</small>
    </h6>
    <div data-type="{{ $bid->type_id }}" class="w-100 form-group mb-1 pl-0 mr-3">
      <span class="text-muted align-baseline">{{ $bid->defect->desc }}</span>
    </div>
    <!-- END group defect -->

    <!-- START group form-add -->
    @include('pages.logs.create')
    <!-- END group form-add -->

    <!-- START group table -->
    @include('pages.logs.index')
    <!-- END group table -->

  </div>

  <div class="form-group">
    @if(Auth::user()->roles()->pluck('slug')->contains('disp_zheu'))
    <a id="add-log" href="" class="btn btn-outline-primary">Новая запись</a>
    @endif
    <a href="{{ route('bids.index') }}" class="btn btn-outline-secondary">Назад</a>
  </div>
</div>
@endsection