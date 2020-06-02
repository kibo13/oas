 <div class="tab-pane fade" id="chart_p" role="tabpanel" aria-labelledby="chart_p-tab">
   <div class="row p-0 m-0">
     <h4 class="w-100 p-2 my-1">График давления воды</h4>
     <div class="w-100" style="height: 400px;">
       {{ $chart_p->container() }}
       {{ $chart_p->script() }}
     </div>
   </div>
 </div>