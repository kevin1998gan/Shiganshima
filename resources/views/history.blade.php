<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clothes. Shiganshina.</title>
    <script src="https://kit.fontawesome.com/047746317e.js" defer></script>
    <link rel="stylesheet" type="text/css" href="/css/product.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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

            <!-- Success member Modal -->
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
            <div class = "left">
                <div class="title" style="text-transform:uppercase">
                    @can('member')
                    Enjoy Items Discounts of 20%!
                    @elsecan('non-member')
                    Become a Member Now!
                    <form class="join" action='/joinMember' method="POST">
                        @csrf
                        <button type="submit" name="submit" 
                        class="btn-success">Join!</button>
                    </form>
                    @endcan
                </div>
            </div>

            <div class = "right">
                @foreach ($histories as $history)
                    <div class="item">
                        <div class="avatar">
                            <img src={{ $history['image'] }} width="200" alt="">
                        </div>
                        <div class="info">
                            <div class="name">
                                {{ $history['name'] }}<br>
                                Total Price: {{ $history['price'] }}<br>
                                Amount Purchased: {{ $history['amount_purchased'] }}<br>
                                Purchased On: {{ $history['created_at'] }}<br>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $histories->links() }}
            </div>
    </main>
    <x-footer />

</body>

</html>
