@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h2 class="mb-3">
		@isset($defect)
			Редактирование записи
		@else 
			Добавление записи
		@endisset
	</h2>

  <form method="POST" @isset($defect) action="{{ route('defects.update', $defect) }}" @else action="{{ route('defects.store') }}" @endisset class="bk-form">
    @csrf

    <div>
      @isset($defect)
      @method('PUT')
      @endisset

      <div class="bk-form__wrap pb-2" data-info="Общие сведения">
        <div class="row p-0 m-0">

          <!-- START group type -->
          <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Тип неисправности</h6>
          <div class="bk-form__select col-sm-auto form-group mb-2 pl-0">

            <select name="type_id" id="type_id" class="form-control bk-form__input">
              <option disabled selected>Выберите тип неисправности</option>
              @foreach($types as $type)
              <option value="{{ $type->id }}" @isset($defect) @if($defect->type_id == $type->id)
                selected
                @endif
                @endisset
                >
                {{ ucfirst($type->name) }}
              </option>
              @endforeach
            </select>
          </div>
          <!-- END group type -->

          <!-- START group attachments -->
          <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Принадлежность</h6>
          <div class="bk-form__select col-sm-auto form-group mb-2 pl-0">
            <select name="attachment" id="attachments" class="form-control bk-form__input">
              <option disabled selected>Выберите принадлежность</option>
              @foreach($attachments as $id)
              <option value="{{ $id['name'] }}" @isset($defect) @if($defect->attachment == $id['name'])
                selected
                @endif
                @endisset
                >
                {{ $id['name'] }}
              </option>
              @endforeach
            </select>
          </div>
          <!-- END group attachments -->

          <!-- START group description -->
          <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Описание неисправности</h6>
          <div class="w-100 form-group mb-2 pl-0 mr-3">
            <textarea class="form-control" name="desc" style="height:80px;" placeholder="Введите описание неисправности">{{ old('desc', isset($defect) ? $defect->desc : null) }}
            </textarea>
          </div>

          <!-- END group description -->

        </div>
      </div>


      <div class="form-group">
        <button type="submit" class="btn btn-outline-success">Сохранить</button>
        <a href="{{ route('defects.index') }}" class="btn btn-outline-secondary">Назад</a>
      </div>


    </div>
  </form>
</div>
@endsection