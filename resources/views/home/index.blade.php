@extends('home.layouts.master')

@section('content')
<div class="container-fluid pt-5">
  <div class="row ">
    <div class="col-md-8 offset-md-2">
      @foreach($jobs as $job)
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

            @foreach($job->addresses as $address)
            <small class="bk-text--small text-muted align-top">
              @if($street->id == $address->street_id)
              д.{{ $address->num_home }},
              @endif
            </small>
            @endforeach

            @endforeach.
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
      @endforeach

      {{ $jobs->links() }}
    </div>

  </div>
</div>
@endsection