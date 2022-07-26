@extends('layouts.ample')
@section('title')
    Мои заказы
@endsection
@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="product-status-wrap">
    <h4>Список заказов</h4>
    <div class="add-product">
        <a href="product-edit.html">Новый заказ</a>
    </div>
    <table>
        <tbody><tr>
            <th>Image</th>
            <th>Product Title</th>
            <th>Status</th>
            <th>Purchases</th>
            <th>Product sales</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Setting</th>
        </tr>
        @for($i = 1; $i < 30; $i++)
        <tr>
            <td><img src="{{ asset('template_style/img/new-product/5-small.jpg')  }}" alt=""></td>
            <td>Product Title {{ $i }}</td>
            <td>
                @php
                    $button = ['0' => '<button class="pd-setting">Активен</button>', '1' => '<button class="ps-setting">Приостановлен</button>', '2' => '<button class="ds-setting">Удалён</button>'];
                    echo $button[rand(0, 2)];
                @endphp
            </td>
            <td>50</td>
            <td>${{ rand(0, 2500) }}</td>
            <td>Out Of Stock</td>
            <td>$15</td>
            <td>
                <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Trash"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            </td>
        </tr>
        @endfor
        </tbody></table>
    <div class="custom-pagination">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>
</div>
    </div>
@endsection
