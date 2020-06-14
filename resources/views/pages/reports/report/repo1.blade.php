<div class="w-100 bk-repo bk-hidden" data-id="1">
  <form method="GET" action="{{ route('report.work') }}">
    <div class="row m-0 p-0">
      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Период</h6>

      <div class="col-sm-auto form-group mb-2 pl-0">
        <label for="repo1_from" class="bk-form__label mb-0">Начало</label>
        <input id="repo1_from" name="repo1_from" type="date" class="form-control bk-form__input" value="{{ request()->repo1_from }}" required>
      </div>

      <div class="col-sm-auto form-group mb-2 pl-0">
        <label for="repo1_to" class="bk-form__label mb-0">Конец</label>
        <input id="repo1_to" name="repo1_to" type="date" class="form-control bk-form__input" value="{{ request()->repo1_to }}" required>
      </div>

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Сведения по мусоросборникам</h6>
      <div class="w-100 form-group mr-3 mb-2 pl-0">
        <input 
          type="text" 
          class="form-control bk-form__input" 
          name="garbage" 
          value="{{ old('garbage') }}"
          placeholder="очищены полностью" 
          required>
      </div>

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Сведения от пожарной команды</h6>
      <div class="w-100 form-group mr-3 mb-2 pl-0">
        <input 
          type="text" 
          class="form-control bk-form__input" 
          name="fire" 
          value="{{ old('fire') }}"
          placeholder="пожаров не было" 
          required>
      </div>

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Замечания по взаймодествию со службами города</h6>
      <div class="w-100 form-group mr-3 mb-2 pl-0">
        <input 
          type="text" 
          class="form-control bk-form__input" 
          name="city" 
          value="{{ old('city') }}"
          placeholder="нет" 
          required>
      </div>

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Автомобильная техника за пределами города</h6>
      <div class="w-100 form-group mr-3 mb-2 pl-0">
        <input 
          type="text" 
          class="form-control bk-form__input" 
          name="auto" 
          value="{{ old('auto') }}"
          placeholder="нет" 
          required>
      </div>



    </div>

    <button id="repo1" type="submit" class="d-flex align-items-center justify-content-center btn btn-outline-primary my-1" style="width: 80px; height: 30px;">
      Отчет
    </button>
  </form>
</div>