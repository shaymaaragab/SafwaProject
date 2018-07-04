@extends('layout.adminmaster')
@section('title','CurrEncy')
@section('page_header','CurrEncy')
@section('page_header_desc','CurrEncy Here')
@section('curreny_page','CurrEncy')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">CurrEncy</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddCurrency')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($currency->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Currency</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($currency as $currency)
                            <tr>
                                <td class="text-center">{{ $currency->id }}</td>
                                <td class="text-center">{{ $currency->currency }}</td>
                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditCurrency',$currency->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                

                                    <?php $r = $currency->id; ?>

                                    @include('backend.currency.delete')

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    @endif

                </table>
            </div>
        </div>
    </div>
@endsection
