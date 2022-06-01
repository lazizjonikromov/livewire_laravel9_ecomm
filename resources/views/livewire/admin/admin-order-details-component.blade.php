<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ordered Items
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">

                            <h3 class="box-title">Products Name</h3>
                            <ul class="products-cart">
                                @foreach ($order->$orderItems as $item)
                                    <li class="pr-cart-item">
                                        <div class="product-image">
                                            <figure><img
                                                    src="{{ asset('assets/images/products') }}/{{ $item->model->image }}"
                                                    alt="{{ $item->model->name }}"></figure>
                                        </div>
                                        <div class="product-name">
                                            <a class="link-to-product"
                                                href="{{ route('product.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a>
                                        </div>
                                        <div class="price-field produtc-price">
                                            <p class="price">${{ $item->model->regular_price }}</p>
                                        </div>
                                        <div class="quantity">
                                            <div class="quantity-input">
                                                <input type="text" name="product-quatity" value="{{ $item->qty }}"
                                                    data-max="120" pattern="[0-9]*">
                                                <a class="btn btn-increase" href="#"
                                                    wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"></a>
                                                <a class="btn btn-reduce" href="#"
                                                    wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"></a>
                                            </div>
                                            <p class="text-center">
                                                <a href="#"
                                                    wire:click.prevent="switchToSaveForLater('{{ $item->rowId }}')">Save
                                                    For Later</a>
                                            </p>
                                        </div>
                                        <div class="price-field sub-total">
                                            <p class="price">${{ $item->subtotal }}</p>
                                        </div>
                                        <div class="delete">
                                            <a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')"
                                                class="btn btn-delete" title="">
                                                <span>Delete from your cart</span>
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Billing Details
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Shipping Details
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Transaction
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
