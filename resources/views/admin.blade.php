<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>shiganshina clothes | Admin</title>

    <!-- Imports
    =========================================== -->
    <link rel="stylesheet" href="/css/admin.css">
</head>

<body>

    <!-- Landing section
    =========================================== -->
    <div class="partial-landing">
        <div class="logo">
            <div class="logo-up">シガンシナ</div>
            <div class="logo-down">shiganshina clothes</div>
        </div>
        <div class="user" title="whoami">Welcome Back {{ $user['name'] }}!</div>

        <!-- Navbar
        =========================================== -->
        <div class="navigate">
            <div class="add" onclick="location.href='#here'">Add</div>
            <div class="edit"><a href="/action">Edit</a></div>
            <div class="delete"><a href="/action">Delete</a></div>
        </div>
        <div class="quit" title="Let me out!">
            <a href="{{ url('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Logout Here
            </a>
            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <div class="admin">Administrator</div>
    </div>

    <!-- Some dummy lines under the landing section
    =========================================== -->
    <main>
        <div class="welcom">
            <marquee>Backend Empowered by [redacted]. Explore.</marquee>
        </div>
        <div class="today">
            Today is <span id="today"></span>
        </div>
    </main>


    <!-- Add a record through here
    =========================================== -->
    <div class="hidden" id="here">
        <h1>Add an Item, Administrator</h1>

        @if (session()->has('alter'))
            <script>
                alert({{ session()->get('alert') }});

            </script>
        @endif




        <form name="itemForm" action="addItem" method="POST" class="insert-form" onsubmit="">
            @csrf
            <table>
                <tr>
                    <td>Item Name:</td>
                    <td><input type="text" name="name" id="name" value="{{ old('name') }}"> <br>
                        <span style="color: red">@error('name'){{ $message }}@enderror</span>
                        </td>

                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td><input type="text" name="price" id="price" value="{{ old('price') }}"> <br>
                            <span style="color: red">@error('price'){{ $message }}@enderror</span>
                            </td>

                        </tr>
                        <tr>
                            <td>Photo(In URL):</td>
                            <td><input type="text" name="image" id="image" value="{{ old('image') }}"> <br>
                                <span style="color: red">@error('image'){{ $message }}@enderror</span>
                                </td>

                            </tr>
                            <tr>
                                <td>Quantity:</td>
                                <td><input type="number" name="quantity" id="quantity" value="{{ old('quantity') }}"> <br>
                                    <span style="color: red">@error('quantity'){{ $message }}@enderror</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Category:</td>
                                    <td><select id="category" name="category" required>
                                            <option value="Men" {{ old('category') == 'Men' ? 'selected' : '' }} selected>Men
                                            </option>
                                            <option value="Women" {{ old('category') == 'Women' ? 'selected' : '' }}>Women</option>
                                            <option value="Kids" {{ old('category') == 'Kids' ? 'selected' : '' }}>Kids</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description:</td>
                                    <td><textarea name="description" id="description" value="{{ old('description') }}"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" value="Submit" id="submit" name="submit"></td>
                                </tr>
                            </table>
                        </form>

                        <!-- Some background ornaments
                                                                                                            =========================================== -->
                        <div class="coolthing1">シガンシナ</div>
                        <div class="imcircle"></div>
                        <div class="gradientboost">shiganshina clothes</div>
                    </div>

                    <!-- Footer
                                                                                                        =========================================== -->
                    <footer>
                        <div class="gibber">
                            &copy; 2018-2021 Weiyan Holdings Pte Ltd. All rights reserved.
                        </div>
                    </footer>

                    <!-- Javascript import at bottoom
                                                                                                        =========================================== -->
                    <script src="/js/today.js"></script>
                </body>

                </html>
