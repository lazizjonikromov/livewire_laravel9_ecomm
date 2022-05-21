<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Wishlist</span></li>
            </ul>
        </div>

        <div class="row">
            @if (Cart::instance('wishlist')->content()->count() > 0)

            @endif
            <ul class="product-list grid-products equal-container">
                @foreach ($products as $product)
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{ route('product.details', ['slug' => $product->slug]) }}"
                                    title="{{ $product->name }}">
                                    <figure><img
                                            src="{{ asset('assets/images/products') }}/{{ $product->image }}"
                                            alt="{{ $product->name }}"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{ route('product.details', ['slug' => $product->slug]) }}"
                                    class="product-name"><span>{{ $product->name }}</span></a>
                                <div class="wrap-price"><span
                                        class="product-price">${{ $product->regular_price }}</span></div>
                                <a href="#" class="btn add-to-cart"
                                    wire:click.prevent="store({{ $product->id }} , '{{ $product->name }}' ,{{ $product->regular_price }})">Add
                                    To Cart</a>
                                <div class="product-wish">
                                    @if($witems->contains($product->id))
                                        <a href="#" wire:click.prevent="removeFromWishlist({{ $product->id }})">
                                            <i class="fa fa-heart fill-heart"></i>
                                        </a>
                                    @else
                                        <a href="#" wire:click.prevent="addToWishlist({{ $product->id }} , '{{ $product->name }}' ,{{ $product->regular_price }})">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>

        </div>

    </div>

</main>
