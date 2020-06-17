<div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="table-tab">
  <div class="table-responsive mt-1">
    <table class="bk-table table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th rowspan="2" class="align-top">#</th>
          <th rowspan="2" class="align-top">Дата</th>
          <th rowspan="2" class="align-top">Температура</th>
          <th rowspan="2" class="align-top text-center">Атмосферное<br> давление</th>
          <th colspan="4" class="text-center">Параметры гор.воды</th>
          <th colspan="5" class="text-center">Параметры хол.воды</th>
          @if(Auth::user()->roles()->pluck('slug')->contains('oas'))
          <th rowspan="2" class="align-top print-hide">Действие</th>
          @endif
        </tr>
        <tr>
          <th scope="col" class="text-center">Р<small class="text-muted align-bottom">пр</small></th>
          <th scope="col" class="text-center">Т<small class="text-muted align-bottom">пр</small></th>
          <th scope="col" class="text-center">Р<small class="text-muted align-bottom">обр</small></th>
          <th scope="col" class="text-center">Т<small class="text-muted align-bottom">обр</small></th>
          <th scope="col" class="text-center">Р<small class="text-muted align-bottom">еч</small></th>
          <th scope="col" class="bk-line-height text-center">1,2<br><small class="text-muted align-bottom">мкр</small></th>
          <th scope="col" class="bk-line-height text-center">3,4<br><small class="text-muted align-bottom">мкр</small></th>
          <th scope="col" class="bk-line-height text-center">5,6<br><small class="text-muted align-bottom">мкр</small></th>
          <th scope="col" class="bk-line-height text-center">7<br><small class="text-muted align-bottom">мкр</small></th>
        </tr>
      </thead>
      <tbody>

        @foreach($briefs as $id => $brief)
        <tr>
          <td>{{ $id+=1 }}</td>
          <td>{{ getDMY($brief->date_brief) }}г. <small class="text-muted align-text-top">06:00</small></td>
          <td>{{ $brief->temp }} <small class="text-muted align-top">°C</small></td>
          <td>{{ $brief->pressure }} <small class="text-muted align-top">мм рт.ст.</small></td>
          <td>{{ $brief->hw_pst }}</td>
          <td>{{ $brief->hw_tst }}</td>
          <td>{{ $brief->hw_pbk }}</td>
          <td>{{ $brief->hw_tbk }}</td>
          <td>{{ $brief->cw_r }}</td>
          <td>{{ $brief->cw_ot }}</td>
          <td>{{ $brief->cw_tf }}</td>
          <td>{{ $brief->cw_fs }}</td>
          <td>{{ $brief->cw_s }}</td>
          @if(Auth::user()->roles()->pluck('slug')->contains('oas'))
          <td class="print-hide">
            <div class="d-flex">
              <div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
                <a href="{{ route('briefs.edit', $brief) }}" class="bk-btn-wrap bk-btn-link"></a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.pen')
                </span>
              </div>

              <div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
                <a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $brief->id }}" data-table-name="brief" data-toggle="modal" data-target="#bk-delete-modal">
                </a>
                <span class="bk-btn-wrap bk-btn-icon">
                  @include('includes.icons.trash')
                </span>
              </div>

            </div>
          </td>
          @endif
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>

  {{ $briefs->links() }}
</div>