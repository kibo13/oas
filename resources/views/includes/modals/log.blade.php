<div id="bk-log-modal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          Подтверждение действия
        </h5>
        <button type="button" class="bk-log-btn close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <input id="log-statement" class="mb-2 form-control form-control-sm" type="hidden" name="statement_id">

        <input id="log-date" class="mb-2 form-control form-control-sm" type="hidden" name="date_log">

        <input id="log-time" class="mb-2 form-control form-control-sm" type="hidden" name="time_log">

        <input id="log-state" class="mb-2 form-control form-control-sm" type="hidden" name="state">

        <input id="log-solution" class="mb-2 form-control form-control-sm" type="hidden" name="solution">

        <input id="log-receiver" class="mb-2 form-control form-control-sm" type="hidden" name="receiver">

        <input id="log-plot" class="mb-2 form-control form-control-sm" type="hidden" name="plot">

        <p class="m-0 p-0">Сохранить запись о текущем состоянии заявки в журнале действий?</p>
      </div>

      <div class="modal-footer">
        <button type="submit" class="bk-log-btn bk-btn-confirm btn btn-success mr-0" data-id="1">Да</button>
        <button type="button" class="bk-log-btn bk-btn-confirm btn btn-secondary" data-dismiss="modal">Нет</button>
      </div>

    </div>

  </div>

</div>