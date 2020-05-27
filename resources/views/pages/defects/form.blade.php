@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  @isset($defect)
  <h2 class="mb-3">Редактирование записи</h2>
  @else
  <h2 class="mb-3">Добавление записи</h2>
  @endisset

  <form method="POST" @isset($defect) action="{{ route('defects.update', $defect) }}" @else action="{{ route('defects.store') }}" @endisset class="bk-form">
    @csrf

    <div>
      @isset($defect)
      @method('PUT')
      @endisset

      <div class=" bk-form__wrap pb-2" data-info="Тип и принадлежность">
        <div class="row p-0 m-0">

          <div class="col-md-3 form-group mb-2 pl-0">
            <label for="type_id" class="bk-form__label mb-0">Тип неисправности</label>

            <select name="type_id" id="type_id" class="form-control bk-form__input">
              <option disabled selected>Выберите тип неисправности</option>
              @foreach($types as $type)
              <option value="{{ $type->id }}" 
                @isset($defect)
                  @if($defect->type_id == $type->id)
                    selected
                  @endif
                @endisset
              >
                {{ ucfirst($type->name) }}
              </option>
              @endforeach
            </select>
          </div>

          <div class="col-md-3 form-group mb-2 pl-0">
            <label for="attachments" class="bk-form__label mb-0">Принадлежность</label>

            <select name="attachment" id="attachments" class="form-control bk-form__input">
              <option disabled selected>Выберите принадлежность</option>
              @foreach($attachments as $id)
              <option value="{{ $id['name'] }}" 
                @isset($defect)
                  @if($defect->attachment == $id['name'])
                    selected
                  @endif
                @endisset
              >
                {{ $id['name'] }}
              </option>
              @endforeach
            </select>
          </div>

        </div>
      </div>

      <div class="bk-form__wrap pb-2" data-info="Описание неисправности">
        <div class="row p-0 m-0">

          <div class="col-md-6 form-group mb-2 pl-0">
            <textarea class="form-control" name="desc" style="height:80px;" placeholder="Введите описание неисправности">{{ old('desc', isset($defect) ? $defect->desc : null) }}
						</textarea>
          </div>

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