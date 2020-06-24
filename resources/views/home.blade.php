@extends('layouts.master')

@section('content')
<div id="stat-index" class="overflow-hidden pt-4 py-2">


  <!-- /.title -->

  <div class="row m-0 p-0">

    @foreach($jobs as $job)
    <div class="col-md-auto">
      <div class="bk-card card mb-3 position-relative">
        <div class="card-body">
          <h5 class="card-title">{{ $job->type_job }} работа</h5>
          <p class="card-text">
            {{ getDMY($job->date_on) }}г. <small class="text-muted align-top">с {{ getHI($job->time_on) }} по {{ getHI($job->time_off) }}</small>
            будет проводиться <span class="text-lowercase">{{ $job->type_job }}</span> работа ({{ $job->desc }}), в связи с чем будут отключены следующие жилые дома и объекты:
            @foreach($streets as $street)
            @if($job->addresses->where('street_id', $street->id)->count())
            {{ $street->name }}
            @endif


            @foreach($job->addresses as $key => $address)
            @if($street->id == $address->street_id)
            <small class="bk-text--small text-muted align-top">
              д.{{ $address->num_home }}
            </small>
            @endif
            @endforeach
            @endforeach
          </p>
          <p class="card-text">
            <small class="font-weight-bold">Предприятие: </small>
            <small class="text-muted"> {{ $job->organization->name }}</small>
          </p>
        </div>

        <span class="bk-ribbon" @if($job->type_job == 'Плановая')
          data-bg="blue"
          @else
          data-bg="red"
          @endif>
          {{ $job->type_job }} работа
        </span>
      </div>
    </div>
    @endforeach

    {{ $jobs->links() }}
  </div>
  <!-- /.content -->

</div>
@endsection