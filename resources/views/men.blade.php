<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clothes. Shiganshina.</title>
    <script src="https://kit.fontawesome.com/047746317e.js" defer></script>
    <link rel="stylesheet" href="/css/product.css" />
</head>

<body>
    <x-header />
    <main>
        <div class="container">
            <div class="left">
                <div class="title">
                    MEN's
                </div>
                <div class="samp-pic">
                    <img src="https://i.pinimg.com/originals/24/76/7c/24767c7a4715c0e60a6e3daad6597069.jpg" width="280"
                        alt="">
                </div>
                <div class="description">
                    Comfortable! Stylish! Cool!
                </div>
            </div>
            <div class="right">
                <div class="result">
                    Displaying 4 items of {{ count($items) }} results.
                </div>
                @foreach ($items as $item)
                    <div class="item">
                        <div class="avatar">
                            <img src={{ $item['image'] }} width="200" alt="">
                        </div>
                        <div class="info">
                            <div class="name">
                                {{ $item['name'] }}
                            </div>
                            @can('non-member')
                                <div class="price">
                                    RM {{ $item['price'] }}
                                </div>
                                @elsecan('member')
                                <div class="price">
                                    RM {{ $item['price']*0.8 }}
                                </div>
                            @endcan
                            <div class="quantity">
                                Available: {{ $item['quantity'] }}
                            </div>
                            <div class="buy">
                                <div class="quantity">
                                    <input class="qty" type="number" min="1" max="99" value="1">
                                </div>
                                <div class="btn">
                                    Buy
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $items->links() }}
            </div>
        </div>
    </main>
    <x-footer />
</body>



</html>
