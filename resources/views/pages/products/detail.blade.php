@extends('layouts.default', ['title' => $product->name, 'page' => 'product'])

@section('content')
<div class="breadcrumbs my-2">
    <div class="container">
        @if (isset($category))
        <a href="#">{{$category->name }}</a>
        @endif

        @if (isset($subCategory))
        >  <a href="#">{{$subCategory->name }}</a>
        @endif

        @if (isset($childCategory))
        >  <a href="#">{{$childCategory->name }}</a>
        @endif

        > <span>{{$product->name}}</span>
    </div>
</div>
<div class="product mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 product-featured-image">
                @if ($product->file)
                <img src="{{asset('storage/'.$product->file->path)}}" alt="" class="img-fluid">
                @endif
            </div>
            <div class="col-lg-6 product-summary">
                <h1 class="product-title mb-5">{{$product->name}}</h1>
                <ul class="specification-list">
                    @forelse ($product->attributes as $attribute)
                    <li><span class="point-heading">{{$attribute->name}} :&nbsp;&nbsp;</span> {{$attribute->value}}</li>
                    @empty
                    @endforelse
                </ul>

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

                <h4>Manufacturing Partners</h4>
                <div>
                    @forelse ($product->files as $manufacturingPartner)
                    <img class="m-partner-img" src="{{asset('storage/'. $manufacturingPartner->path)}}" alt="">
                    @empty
                    @endforelse
                </div>
                @if (count($product->document_files))
                <h4>Documents</h4>
                <div>
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
                    <h5>{{$relatedProduct->name}}</h5>
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

.point-heading{
    font-weight: 800;
    font-size: 18px;
}
.m-partner-img{
    width: 70px;
    height 70px;
}
</style>
