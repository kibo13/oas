<div class="w-100 bk-repo bk-hidden" data-id="5">

  <h5 class="my-2">Отчет "Сведения об аварийном состоянии жилого дома" в процессе разработки...</h5>

  <!-- <form method="GET" action="{{ route('report.address') }}">

    <div class="row m-0 p-0">

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Период</h6>

      <div class="col-sm-auto form-group mb-2 pl-0">
        <label for="repo5_from" class="bk-form__label mb-0">Начало</label>
        <input id="repo5_from" name="repo5_from" type="date" class="form-control bk-form__input" value="{{ request()->repo5_from }}" required>
      </div>

      <div class="col-sm-auto form-group mb-2 pl-0">
        <label for="repo5_to" class="bk-form__label mb-0">Конец</label>
        <input id="repo5_to" name="repo5_to" type="date" class="form-control bk-form__input" value="{{ request()->repo5_to }}" required>
      </div>

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Адрес</h6>
      <div class="bk-form__select col-sm-auto form-group mb-2 pl-0">
        <select id="repo5-home" name="repo5_home" class="form-control bk-form__input">
          <option disabled selected>Выберите адрес</option>
          @foreach($addresses as $address)
          <option value="{{ $address->id }}">
            {{ ucfirst($address->street->name) }}
            д.{{ ucfirst($address->num_home) }}
          </option>
          @endforeach
        </select>
      </div>

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Тип заявки</h6>
      <div class="bk-form__select col-sm-auto form-group mb-2 pl-0">
        <select id="repo5-type" name="repo5_type" class="form-control bk-form__input">
          <option disabled selected>Выберите тип заявки</option>
          <option value="0">Все</option>
          <option value="1">Электрика</option>
          <option value="2">Сантехника</option>
        </select>
      </div>

    </div>

    <button id="repo5" type="submit" class="d-flex align-items-center justify-content-center btn btn-outline-primary my-1" style="width: 80px; height: 30px;">
      Отчет
    </button>

  </form> -->
</div>