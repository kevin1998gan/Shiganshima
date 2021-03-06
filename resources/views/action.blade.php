<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>shiganshina clothes | Action</title>

    <!-- Imports -->
    <link rel="stylesheet" href="../css/action.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <!-- Logo -->
    <header>
        <div class="logo">シガンシナ</div>
        <div class="cute">shiganshina clothes</div>
    </header>

    <!-- Small Nav -->
    <div class="nabi">
        <div class="back"><a href="/admin" class="ignore">Back</a></div>
        <div class="logout">
            <a href="{{ url('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                class="ignore">
                Logout Here
            </a>
            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <div class="myname">{{ $user['name'] }}</div>
        <div class="today">Today is <span id="today"></span></div>
    </div>


    <!-- Result table shows here -->
    <div class="container">
        <div class="row justify-content-center">

            <table class="table" id="table">
                <input type='hidden' id='sort' value='asc'>
                <thead>
                    <tr>
                        <th><span style="cursor: pointer;" onclick=''>Index</span></th>
                        <th style="min-width: 100px;"><span style="cursor: pointer;" onclick=''>Item Name</span></th>
                        <th><span style="cursor: pointer;" onclick=''>Price</span></th>
                        <th><span style="cursor: pointer;" onclick=''>Photo URL</span></th>
                        <th><span style="cursor: pointer;" onclick=''>Quantity</span></th>
                        <th><span style="cursor: pointer;" onclick=''>Category</span></th>
                        <th><span style="cursor: pointer;" onclick=''>Description</span></th>
                        <th><span style="cursor: pointer;" onclick=''>Created By</span></th>
                        <th colspan="2" style="text-align: center;">Action</th>
                    </tr>
                </thead>

                @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }} </td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['price']}}</td>
                        <td>{{$item['image']}}</td>
                        <td>{{$item['quantity']}}</td>
                        <td>{{$item['category']}}</td>
                        <td>{{$item['description']}}</td>
                        <td>{{$item['created_by']}}</td>
                        <td>
                            <a href={{"/update/" .$item['id']}} class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            <a href={{"/delete/" .$item['id']}} class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


    <!-- Import for today -->
    <script src="../js/today.js"></script>

</body>

</html>
