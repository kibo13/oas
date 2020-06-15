<div class="w-100 bk-repo bk-hidden" data-id="4">
  <form method="GET" action="{{ route('report.plot') }}">

    <div class="row m-0 p-0">

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Период</h6>

      <div class="col-sm-auto form-group mb-2 pl-0">
        <label for="repo4_from" class="bk-form__label mb-0">Начало</label>
        <input 
          id="repo4_from" 
          name="repo4_from" 
          type="date" 
          class="form-control bk-form__input" 
          value="{{ request()->repo4_from }}" 
          required>
      </div>

      <div class="col-sm-auto form-group mb-2 pl-0">
        <label for="repo4_to" class="bk-form__label mb-0">Конец</label>
        <input 
          id="repo4_to" 
          name="repo4_to" 
          type="date" 
          class="form-control bk-form__input" 
          value="{{ request()->repo4_to }}" 
          required>
      </div>

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Участок</h6>
      <div class="bk-form__select col-sm-auto form-group mb-2 pl-0">
        <select id="repo4-plot" name="repo4_branch" class="form-control bk-form__input">
          <option disabled selected>Выберите участок</option>
          @foreach($branches as $branch)
          <option value="{{ $branch->id }}">
            {{ ucfirst($branch->name) }}
          </option>
          @endforeach
        </select>
      </div>

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Тип заявки</h6>
      <div class="bk-form__select col-sm-auto form-group mb-2 pl-0">
        <select id="repo4-type" name="repo4_type" class="form-control bk-form__input">
          <option disabled selected>Выберите тип заявки</option>
          <option value="0">Все</option>
          <option value="1">Электрика</option>
          <option value="2">Сантехника</option>
        </select>
      </div>

    </div>

    <button 
      id="repo4" 
      type="submit" 
      class="d-flex align-items-center justify-content-center btn btn-outline-primary my-1" 
      style="width: 80px; height: 30px;">
      Отчет
    </button>

  </form>
</div>