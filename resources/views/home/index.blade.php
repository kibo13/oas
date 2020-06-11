@extends('home.layouts.master')

@section('content')
<div class="container-fluid pt-5">
  <div class="row ">
    <div class="col-md-10 offset-md-1">

      <div id="posts" class="">

        <input type="text" id="search-posts" class="form-control rounded-0 bg-transparent mb-2 " placeholder="Поиск...">

        <!-- START table -->
        <div class="table-responsive">
          <table class="bk-table table table-bordered">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Период проведения работ</th>
                <th scope="col">Адрес</th>
                <th scope="col">Вид работ</th>
              </tr>
            </thead>
            <tbody>

           


            </tbody>
          </table>
        </div>
        <!-- END table   -->

      </div>

    </div>
  </div>
</div>
@endsection