<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book.io | Action</title>

    <!-- Imports
    =========================================== -->
    <link rel="stylesheet" href="../css/action.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <!-- Logo
    =========================================== -->
    <header>
        <div class="logo">シガンシナ</div>
        <div class="cute">shiganshina clothes</div>
    </header>

    <!-- Small Nav
    =========================================== -->
    <div class="nabi">
        <div class="back"><a href="/admin">Back</a></div>
        <div class="logout">
            <a href="{{ url('logout') }}" 
				onclick="event.preventDefault();document.getElementById('logout-form').submit();">
					Logout Here
			</a>
            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                    @csrf
            </form>
        </div>
        <div class="myname">Admin Name</div>
        <div class="today">Today is <span id="today"></span></div>
    </div>


    <!-- Result table shows here
    =========================================== -->
    <div class="container">
        <div class="row justify-content-center">

            <table class="table" id= "table">
                <input type='hidden' id='sort' value='asc'>
                <thead>
                    <tr>
                        <th><span style="cursor: pointer;" onclick=''>Index</span></th>
                        <th><span style="cursor: pointer;"onclick=''>Item Name</span></th>
                        <th><span style="cursor: pointer;"onclick=''>Price</span></th>
                        <th><span style="cursor: pointer;"onclick=''>Photo URL</span></th>
                        <th><span style="cursor: pointer;"onclick=''>Quantity</span></th>
						<th><span style="cursor: pointer;"onclick=''>Category</span></th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tr>
                    <td>3</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
					<td>6</td>
                    <td>
                        <a href="/update" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>


    <!-- Import for today
    =========================================== -->
    <script src="../javascript/today.js"></script>

</body>
</html>