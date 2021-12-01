@foreach($products as $key=>$product)
<div class="table-menu-product">
    <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
        <div class="menu-product-content-item">
            <img src="{{ $product->thumb }}" alt="anh-san-pham">
        </div>
        <div class="menu-product-content-detail">
            <div class="menu-product-content-detail-name">
                <span>{{ $product->name }}</span>
            </div>
            <div class="menu-product-content-detail-price">
                <span style="text-decoration-line: line-through; margin-right: 5px;">
                    {{ $product->price .'VND' }} </span>
                <span>{{ $product->price_sale.'VND' }}</span>
                <img src="/template/img/icons8-free-shipping-50.png" alt="anh-san-pham">
            </div>
            <div class="menu-product-content-detail-sold">
                <div class="menu-product-content-detail-sold-i">
                    <i class="far fa-heart"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>Đã bán 12,2k</span>
            </div>
            <div class="menu-product-content-detail-address">
                <span>Hà Nội</span>
            </div>
        </div>
    </a>
</div>

@endforeach


