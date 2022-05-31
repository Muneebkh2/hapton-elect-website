@extends('layouts.default', ['title' => Str::title($product->name), 'page' => 'product'])

@section('content')
<div class="breadcrumbs my-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @if (isset($category)) <a href="{{url('category', $category->slug)}}">{{Str::title($category->name)}}</a> @endif

                @if (isset($subCategory))
                >  <a href="{{url('category', [$category->slug, $subCategory->slug])}}">{{Str::title($subCategory->name)}}</a>
                @endif

                @if (isset($childCategory))
                >  <a href="#">{{Str::title($childCategory->name)}}</a>
                @endif
                > <span>{{Str::title($product->name)}}</span>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="product mb-5">
    <div class="container px-lg-0">
        <div class="row">
            <div class="col-lg-6 product-featured-image px-lg-0">
                @if ($product->file)
                <img src="{{asset('storage/'.$product->file->path)}}" alt="" class="img-fluid">
                @endif
            </div>
            <div class="col-lg-6 product-featured-content px-lg-0">
                <h1 class="product-title mb-md-3">{{$product->name}}</h1>

                <div class="cs-responsive product-info">
                    <!-- <ul class="specification-list">
                        @forelse ($product->attributes as $attribute)
                        <li><span class="point-heading">{{$attribute->name}} : </span> <p>{{$attribute->value}}</p></li>
                        @empty
                        @endforelse
                    </ul> -->
                    
                    <div class="row specification-list" style="height: 100px;overflow: auto;">
                        @forelse ($product->attributes as $attribute)
                        <div class="col col-md-auto py-2 border-top">
                            <div class="point-heading">{{$attribute->name}} </div> 
                            <span>{{$attribute->value}}</span>
                        </div>
                        @empty
                        @endforelse
                    </div>

                    <!-- <div class="d-flex specification-list" style="overflow-x: scroll;">
                        @forelse ($product->attributes as $attribute)
                        <div class="py-2 px-2 border">
                            <div style="inline-size: max-content;">
                                <div class="point-heading">{{$attribute->name}} </div> 
                                <span>{{$attribute->value}}</span>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div> -->

                    <!-- <table class="table table-bordered specification-list">
                        <tbody>
                            @forelse ($product->attributes as $attribute)
                            <tr>
                                <th scope="col" class="point-heading">{{$attribute->name}} </th> 
                                <td>{{$attribute->value}}</td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table> -->

                    @php
                        $productHeader = collect($product->dynamic_table_header);
                        $productBody = collect($product->dynamic_table_body);
                    @endphp

                    @if(count($productHeader) > 0 && $productHeader->get('1') != null)
                    <h4 class="mb-2 mt-5">Chart</h4>
                    <style>
                        /* .h-50px{height: 40px}; */
                    </style>
                    <!-- <div class="row">
                        <div class="col-2">
                            @foreach ($productHeader as $headerKey => $valueKey)
                                <div class="h5 mb-0 h-50px d-flex flex-column-reverse">{{$valueKey}}</div>
                            @endforeach
                        </div>
                        <div class="col-9 d-flex offset-md-0 offset-sm-1" style="overflow:auto;">
                            @foreach ($productBody as $productBodyItem)
                                <div class="tbl-inner-row">
                                    @foreach ($productBodyItem as $productBodyRow)
                                        <div class="h-50px border-bottom px-2 d-flex flex-column-reverse">{{ $productBodyRow }}</div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div> -->
                    
                    <table class="table table-dark table-responsive table-striped">
                        @foreach ($productHeader as $headerKey => $valueKey)
                            <tr class="d-flex align-items-center">
                                <th class="" style="width: 120px;word-break: break-word;">{{$valueKey}}</th>
                                @foreach ($productBody[$headerKey] as $productBodyRow)
                                    <td class="pl-2">{{ $productBodyRow }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
                    
                    <!-- <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    @foreach ($productHeader as $headerKey => $valueKey)
                                    <td @if ($headerKey == 2)
                                        width="35%" @elseif($headerKey == 5) width="20%"
                                    @endif>{{$valueKey}}</td>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productBody as $productBodyItem)
                                <tr>
                                    @foreach ($productBodyItem as $productBodyRow)
                                       <td>{{ $productBodyRow }}</td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> -->
                    @endif

                    {{-- <h4>Models</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    <th scope="col">Handle</th>
                                    <th scope="col">Handle</th>
                                    <th scope="col">Handle</th>
                                    <th scope="col">Handle</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>@fat</td>
                                    <td>@fat</td>
                                    <td>@fat</td>
                                    <td>@fat</td>
                                    <td>@fat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> --}}

                    @if ($category->id == 2)
                        <h4>Manufacturing Partners</h4>
                        <div>
                            @forelse ($product->files as $manufacturingPartner)
                            <img class="m-partner-img" src="{{asset('storage/'. $manufacturingPartner->path)}}" alt="">
                            @empty
                            @endforelse
                        </div>
                    @endif
                    @if (count($product->document_files))
                    <h4>Documents</h4>
                    <div class="product-download-btn">
                        @forelse ($product->document_files as $productDocument)
                        <a href="{{asset('storage/'.$productDocument->path)}}" target="_blank">Download</a>
                        @empty
                        @endforelse
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<section id="related-products">

    <div class="container">
        <div class="row">
            @forelse ($relatedProducts as $relatedProduct)
            <div class="col-lg-3">
                <div class="product text-center">
                    <div class="img-box d-flex align-items-center justify-content-center">
                        @if ($relatedProduct->file)
                        <img src="{{asset('storage/'. $relatedProduct->file->path)}}" alt="" class="img-fluid">
                        @else
                        <img src="{{asset('assets/no-image.png')}}" alt="" class="img-fluid">
                        @endif
                    </div>
                    <a href="{{url('category', [$category->slug, $subCategory->slug, $relatedProduct->slug] ) }}"">
                        <h5>{{$relatedProduct->name}}</h5>
                    </a>
                </div>
            </div>
            @empty
            @endforelse

        </div>
    </div>
</section>
@stop

<style>
.specification-list{
    list-style: none;
    padding: 0;
}

/* .point-heading{
    font-weight: 800;
    font-size: 18px;
} */
.point-heading {
    font-weight: bold;
    font-size: 16px;
    font-family: 'Montserrat', sans-serif;
}

.specification-list li p {
    font-size: 14px;
    /* font-family: 'Roboto'; */
    /* line-height: 1.7; */
    font-weight: lighter;
}
.m-partner-img{
    width: 70px;
    height 70px;
}
</style>
