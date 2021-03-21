<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clothes. Shiganshina.</title>
    <script src="https://kit.fontawesome.com/047746317e.js" defer></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" --}}
        {{-- integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="/css/product.css" />
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> --}}
</head>

<body>
    <x-header />
    <main>
        <div class="container">

            @if (Session::has('success'))
                <script>
                    $(function() {
                        $('#successModal').modal();
                    });

                </script>
            @endif

            <!-- Success bought Modal -->
            <div id="successModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-sm">

                    <!-- Modal content-->
                    <div class="modal-content">

                        <div class="modal-body">
                            <p class="text-center">{{ Session::get('message', '') }}</p>
                        </div>

                    </div>

                </div>

            </div>
            <!--  -->

            <div class="left">
                <div class="title" style="text-transform:capitalize">
                    @if ($category == 'men' || $category == 'women')
                        {{ $category }}'s
                    @elseif ($category == 'kids' )
                        {{ $category }}'
                    @endif
                </div>
                <div class="samp-pic">
                    @if ($category == 'men')
                        <img src="https://i.pinimg.com/originals/24/76/7c/24767c7a4715c0e60a6e3daad6597069.jpg"
                            width="280" height="380" alt="">
                    @elseif($category == "women")
                        <img src="https://i.pinimg.com/736x/e1/d7/ec/e1d7ecbf24b0ea17275671878db11c6f.jpg" width="280"
                            height="380" alt="">
                    @elseif($category == "kids")
                        <img src="https://i.pinimg.com/474x/3e/4b/ac/3e4bacd6a9d5eb1c2d00513ddcedfa1f--kids-winter-clothes-kids-winter-fashion.jpg"
                            width="280" height="380" alt="">
                    @endif
                </div>
                <div class="description">
                    Comfortable! Stylish! Cool!
                </div>
            </div>
            <div class="right">
                <div class="result">
                    Displaying {{ count($items) }} items of {{ count($items) }} results.
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
                                    RM {{ $item['price'] * 0.8 }}
                                </div>
                            @endcan
                            <div class="quantity">
                                Available: {{ $item['quantity'] }}
                            </div>
                            <form class="buy" action={{ '/buyItem/' . $item['id'] }} method="POST">
                                @csrf
                                <div class="quantity">
                                    <input type="number" min="1" max="99" value="1" id="qty" class="qty" name="qty">
                                </div>
                                <button type="submit" name="submit" class="btn">Buy</button>
                            </form>
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
