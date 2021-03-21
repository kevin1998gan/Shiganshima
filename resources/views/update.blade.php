<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/update.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<title>shiganshina clothes | Update</title>
</head>

<body>
	<div class="row justify-content-center">
		<form action={{"/updateItem/".$data['id']}} method="POST">
			@csrf
			<input type="hidden" name="Id" value="">
			<div class="form-group">
				<label>Item Name</label>
				<input type="text" name="name" class="form-control" value="{{$data['name']}}" id="name" placeholder="Enter item name">
				<span style="color: red">@error('name'){{ $message }}@enderror</span>
			</div>
			<div class="form-group">
				<label>Price</label>
				<input type="text" name="price" class="form-control" value="{{$data['price']}}" id="price" placeholder="Enter price">
				<span style="color: red">@error('price'){{ $message }}@enderror</span>
			</div>
			<div class="form-group">
				<label>Photo URL</label>
				<input type="text" name="image" class="form-control" value="{{$data['image']}}" id ="image" placeholder="Enter photo URL">
				<span style="color: red">@error('image'){{ $message }}@enderror</span>
			</div>
			<div class="form-group">
				<label>Quantity</label>
				<input type="number" name="quantity" class="form-control" value="{{$data['quantity']}}" id ="quantity" placeholder="Enter quantity">
				<span style="color: red">@error('quantity'){{ $message }}@enderror</span>
			</div>
			<div class="form-group">
				<label>Category</label>
				<select name="category" class="form-control" placeholder="Choose category" id="category">
					<option value="Men" {{ $data['category'] == 'Men' ? 'selected' : '' }}>Men</option>
					<option value="Women" {{ $data['category'] == 'Women' ? 'selected' : '' }}>Women</option>
					<option value="Kids" {{ $data['category'] == 'Kids' ? 'selected' : '' }}>Kids</option>
                </select>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="description" rows="3" placeholder="Enter description" value = "{{$data['description']}}" id='description'></textarea>
			</div>
			<div class="form-group">
				<button type="submit" name="update" class="btn btn-info">Update</button>
				<a class = "btn btn-danger"  href = "/action">Cancel</a>

			</div>
		</form>
	</div>
</body>
</html>

