<x-appx>
  <div class="container">
    <div class="row pt-5 mt-5">
      <div class="col-12 text-md-center text-left">
        <h3 style="color: black;">Personal Details</h3>
        <form action="rental.php" id="bookings" method="post" enctype="multipart/form-data" class="form-box">
          <h3 class="h4 text-black mb-4"></h3>
          <div class="form-group">
            <input type="text" name="fname" id="Name" placeholder="First Name" required>
            <input type="text" name="nname" id="nname" placeholder="Nickname" required>
            <input type="text" name="cnum" id="contact-1" class="form-group" placeholder="Contact number" required>
            <div class="form-group">
              <br>
            </div>
          </div>
          <div class="form-group">
            <input type="text" name="altnum" id="contact-2" placeholder="Alternative number" required>
            <input type="text" name="email" id="email" class="form-group" placeholder="Email">
            <input type="text" name="address" id="address" placeholder="Home address" required>


            <br><br>
            <h4 style="color: black;">Select rental dates</h4>
            <span>
              <p>Price per day R40.00 | Delivey R59.00</p><span>
                <label>Start date:</label><input type="date" id="startDate" value="" name="startDate" onchange="update()" ; required>
                <label>End date:</label><input type="date" id="endDate" value="" name="endDate" onchange="update();" required><br>


                <!--<label>Date out:</label><span id="dateOut" name ="date_out"></span><br>
	              <label>Date return:</label><span id="dateReturn" name = "date_return"></span><br> -->
                <label>Total days of Rental:</label><span id="rental_days" name="days_rented"></span><br>
                <label>Total price with Delivery R</label><span id="price_with_ship" name="total_price_noShip"></span><br>
                <label>Total price without Delivery R</label><span id="price_noship" name="total_price_Ship"></span><br>

                <button onclick="dateRental()" class="btn btn-pill btn-primary btn-md text-white">Submit</button>

                <script>
                  const d = new Date();
                  startDate.value, endDate.value = d;

                  update();

                  function update() {

                    (!startDate.value || !endDate.value);

                    var sDate = new Date(startDate.value);
                    var eDate = new Date(endDate.value);

                    var tD = sDate < eDate ? eDate.getTime() - sDate.getTime() : 0;
                    var dD = tD / (1000 * 60 * 60 * 24);

                    var [price_ship, price_noShip] = standRental(dD, 40.00, 59.00);

                    //dateOut.textContent = sDate.toDateString();
                    //dateReturn.textContent = eDate.toString();
                    rental_days.textContent = dD;
                    price_with_ship.textContent = price_ship;
                    price_noship.textContent = price_noShip;
                  }

                  function standRental(dD, itemAmount, shipment) {
                    var rentalWith = dD * itemAmount + shipment;
                    var rentNoShip = dD * itemAmount;
                    return [rentalWith, rentNoShip];

                    let rentTotal = document.getElementsByTagName("total_price_noShip");
                    rentTotal.textContent = rentalWith;

                  }
                </script>
</x-appx>