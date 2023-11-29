<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Form</title>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script>
</head>
<body>
	
	<h2 class="text-center">Product Details</h2>
	<div class="container">
		<form action="Product_details_insert.php" method="GET">
			<div class="form-group">
				<label for="product_name">Product Name </label>
				<input type="text" class="form-control" id="product_name"
					placeholder="Enter Product Name" name="product_name">
			</div>
			<div class="form-group">
				<label for="product_description">Product Description </label>
				<input type="text" class="form-control" id="product_description"
					placeholder="Enter Product Description" name="product_description">
			</div>
			<div class="form-group">
				<label for="product_caegory">Product Category </label>
				<input type="text" class="form-control" id="product_caegory"
					placeholder="Enter Product Caegory" name="product_caegory">
			</div>
			<div class="form-group">
				<label for="product_price">Product Price </label>
				<input type="number" class="form-control" id="product_price"
					placeholder="Enter Product Price" name="product_price">
			</div>
			<div class="form-group">
				<label for="product_sku">Product SKU </label>
				<input type="text" class="form-control" id="product_sku"
					placeholder="Enter Product SKU" name="product_sku">
			</div>
			<div class="form-group">
				<label for="product_barcode">Product Barcode </label>
				<input type="text" class="form-control" id="product_barcode"
					placeholder="Enter Product Barcode" name="product_barcode">
			</div>
			<div class="form-group">
				<label for="product_weight">Product Weight </label>
				<input type="number" class="form-control" id="product_weight"
					placeholder="Enter Product Weight" name="product_weight">
			</div>
			<div class="form-group">
				<label for="product_dimensions">Product Dimensions </label>
				<input type="text" class="form-control" id="product_dimensions"
					placeholder="Enter Product Dimensions" name="product_dimensions">
			</div>
			<div class="form-group">
				<label for="product_quantity">Product Quantity</label>
				<input type="number" class="form-control" id="product_quantity"
					placeholder="Enter Product Quantity" name="product_quantity">
			</div>
			<div class="form-group">
				<label for="product_variants">Product Variants</label>
				<input type="text" class="form-control" id="product_variants"
					placeholder="Enter Product Variants" name="product_variants">
			</div>
			<div class="form-group">
				<label for="shipping_info"> Shipping Info</label>
				<input type="text" class="form-control" id="shipping_info"
					placeholder="Enter  Shipping Info" name="shipping_info">
			</div>
			<div class="form-group">
				<label for="seo_info"> Seo Info</label>
				<input type="text" class="form-control" id="seo_info"
					placeholder="Enter  SeoInfo" name="seo_info">
			</div>
			<div class="form-group">
				<label for="product_brand"> Product Brand</label>
				<input type="text" class="form-control" id="product_brand"
					placeholder="Enter Product Brand" name="product_brand">
			</div>

			<div class="form-group">
				<label for="product_features"> Product Features</label>
				<input type="text" class="form-control" id="product_features"
					placeholder="Enter Product Features" name="product_features">
			</div>
			<div class="form-group">
				<label for="product_benefites"> Product Benefites</label>
				<input type="text" class="form-control" id="product_benefites"
					placeholder="Enter Product Benefites" name="product_benefites">
			</div>
			<div class="form-group">
				<label for="related_products"> Related Products</label>
				<input type="text" class="form-control" id="related_products"
					placeholder="Enter Related Products" name="related_products">
			</div>
			<div class="form-group">
				<label for="product_reviews">Product Reviews</label>
				<input type="text" class="form-control" id="product_reviews"
					placeholder="Enter Product Reviews" name="product_reviews">
			</div>
			<!-- <div class="form-group">
				<label for="created_at">Created At</label>
				<input type="text" class="form-control" id="created_at"
					placeholder="Enter Created At" name="created_at">
			</div> -->

			<div class="form-group">
				<label for="image_filenames">Image Filenames</label>
				<input type="file" class="form-control" id="image_filenames"
					placeholder="Enter Image Filenames" name="image_filenames">
			</div>
			
			<button type="submit" class="btn bg-primary text-white">
				Submit
			</button>
		</form>
	</div>
</body>
</html>
