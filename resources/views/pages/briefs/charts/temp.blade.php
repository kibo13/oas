<div class="tab-pane fade" id="chart_t" role="tabpanel" aria-labelledby="chart_t-tab">
  <div class="row p-0 m-0">
    <h4 class="w-100 p-2 my-1">График температуры воды</h4>
    <div class="w-100" style="height: 400px;">
      {{ $chart_t->container() }}
      {{ $chart_t->script() }}
    </div>
  </div>
</div>