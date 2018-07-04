@extends('layout.adminmaster')
@section('title','Product Category')
@section('page_header','Product Category')
@section('page_header_desc','Product Category Here')
@section('curreny_page','Product Category')
@section('main-content')
    
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Product Category</h5>
                    <div class="ibox-tools pull-right">

                        @if($id!=0)
                            <?php $prod=\App\models\Product_category::find($id);
//                                    $parent=$prod->parent;
                                    if($prod->parent_id==0)
                                    	{
		                                    $prod->parent_id=0;
	                                    }?>
                            <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('ProductcategoryIndex',$prod->parent_id)}}" ><i class="fa fa-recycle"></i> Back</a>
                        @endif

                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddProductcategory',$id)}}"><i class="fa fa-plus"></i> add new</a>
                    

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($product_categorys->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name In English</th>
                            <th class="text-center">Name In Arabic</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($product_categorys as $category)
                            <tr>
                                <td class="text-center">{{ $category->id }}</td>
                                <td class="text-center">{{ $category->name_en }} <a href="{{ route('ProductcategoryIndex', $category->id) }}"> Show Sub </a></td>
                                <td class="text-center">{{ $category->name_ar }}</td>
                                <td class="text-center"><img alt="" src="{{ asset($category->img) }}" style="width: 50px; height: 50px;"></td>


                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditProductcategory',$category->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                   

                                     <?php $r = $category->id; ?>

                                    @include('backend.productCategory.delete')


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
@section('js')
<script>
    function back()
    {

            history.go(-1);

        return false;
    }
</script>
@endsection
