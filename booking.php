<?php include('navbar.php') ?>

<section class="bg-image " style="background-image: url('images/bg2.jpg'); background-size: cover; background-repeat: no-repeat;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3 ">
    <div class="container h-100 mt-5 mb-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Fill Product Information</h2>

              <form action="insert_product.php" method="POST" enctype="multipart/form-data" class="mb-4">
                <div class="form-group">
                    <label for="title">Product Name:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div><br>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" step="0.01">
                </div><br>

                <div class="form-group">
                    <label for="orderdate">Order Date:</label>
                    <input type="date" class="form-control" id="orderdate" name="orderdate">
                </div><br>

                <div class="form-group">
                    <label for="deliverydate">Delivery Date:</label>
                    <input type="date" class="form-control" id="deliverydate" name="deliverydate">
                </div><br>

                <div class="form-group py-4">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4">Book now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<? include('footer.php') ?>
</body>

</html>