<div class="w-100 bk-repo bk-hidden" data-id="2">
  <form method="GET" action="{{ route('report.brief') }}">
    <div class="row m-0 p-0">

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Период</h6>

      <div class="col-sm-auto form-group mb-2 pl-0">
        <label for="repo2_from" class="bk-form__label mb-0">Начало</label>
        <input 
          id="repo2_from" 
          name="repo2_from" 
          type="date" 
          class="form-control bk-form__input" 
          value="{{ request()->repo2_from }}" 
          required>
      </div>

      <div class="col-sm-auto form-group mb-2 pl-0">
        <label for="repo2_to" class="bk-form__label mb-0">Конец</label>
        <input 
          id="repo2_to" 
          name="repo2_to" 
          type="date" 
          class="form-control bk-form__input" 
          value="{{ request()->repo2_to }}" 
          required>
      </div>

    </div>

    <button 
      id="repo2" 
      type="submit" 
      class="d-flex align-items-center justify-content-center btn btn-outline-primary my-1" 
      style="width: 80px; height: 30px;"
    >
      Отчет
    </button>

  </form>
</div>