@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-0">Новый пользователь</h2>

  <form method="POST" action="{{ route('users.store') }}">
    @csrf

    

    
  </form>
</div>
@endsection