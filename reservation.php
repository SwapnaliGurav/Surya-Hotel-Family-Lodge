<?php
session_start();
include 'layouts/header.php';

$message = $_SESSION['message'] ?? '';
$message_type = $_SESSION['message_type'] ?? '';
unset($_SESSION['message'], $_SESSION['message_type']);
?>

<section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3">Reservation Form</h1>
        <ul class="custom-breadcrumbs mb-4">
          <li><a href="index.php">Home</a></li>
          <li>&bullet;</li>
          <li>Reservation</li>
        </ul>
      </div>
    </div>
  </div>
  <a class="mouse smoothscroll" href="#next">
    <div class="mouse-icon"><span class="mouse-wheel"></span></div>
  </a>
</section>

<section class="section contact-section" id="next">
  <div class="container">
    <div class="row">

      <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
        <form id="reservationForm" class="bg-white p-md-5 p-4 mb-5 border">
          <div class="row">
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control" required />
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="phone">Phone</label>
              <input type="text" id="phone" name="phone" class="form-control" pattern="[0-9]{10}" maxlength="10" required />
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 form-group">
              <label class="text-black font-weight-bold" for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control" required />
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
              <input type="text" id="checkin_date" name="checkin_date" class="form-control" readonly />
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
              <input type="text" id="checkout_date" name="checkout_date" class="form-control" readonly />
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <label for="adults" class="font-weight-bold text-black">Adults</label>
              <select id="adults" name="adults" class="form-control" required>
                <option value="">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4+">4+</option>
              </select>
            </div>
            <div class="col-md-6 form-group">
              <label for="children" class="font-weight-bold text-black">Children</label>
              <select id="children" name="children" class="form-control" required>
                <option value="">Select</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4+">4+</option>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-12 form-group">
              <label class="text-black font-weight-bold" for="room_type">Select Room Type</label>
              <select name="room_type" id="room_type" class="form-control" required>
                <option value="">Select a room type</option>
                <option value="Family">Family Room</option>
                <option value="Standard">Standard Room</option>
                <option value="Premium">Premium Room</option>
              </select>
            </div>
          </div>
          <!-- Room price display (uncomment if needed) -->
          <!-- <div class="row mb-4">
            <div class="col-md-12">
              <div id="room_price" style="font-weight: bold; font-size: 1.1em; color: #007bff;"></div>
            </div>
          </div> -->

          <div class="row">
            <div class="col-md-6 form-group">
              <button type="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold">Book Now</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
        <div class="row">
          <div class="col-md-10 ml-auto contact-info">
            <p><span class="d-block">Address:</span> Surya Hotel & Family Lodge, near yashodhan petrol pump and ajinkya dhaba, Sangli Vita road, Borgaon, Tasgaon</p>
            <p><span class="d-block">Phone:</span> <span style="color: black;">(+91) 7666502402</span></p>
            <p><span class="d-block">Email:</span> <span class="text-black">gvpratap@yahoo.com</span></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php if ($message): ?>
  <script>
    alert("<?php echo addslashes($message); ?>");
  </script>
<?php endif; ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  // Dynamic room price display
  document.addEventListener('DOMContentLoaded', function() {
    const roomTypeSelect = document.getElementById('room_type');
    const priceDisplay = document.getElementById('room_price');
    const prices = {
      'Standard': '₹800 per night',
      'Premium': '₹1100 per night',
      'Family': '₹1400 per night'
    };
    roomTypeSelect.addEventListener('change', function() {
      const selected = this.value;
      priceDisplay.textContent = prices[selected] ? 'Price: ' + prices[selected] : '';
    });
    roomTypeSelect.dispatchEvent(new Event('change'));
  });

  // Form validation function
  function validateForm() {
    const name = document.getElementById("name").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const email = document.getElementById("email").value.trim();
    const checkin = document.getElementById("checkin_date").value.trim();
    const checkout = document.getElementById("checkout_date").value.trim();
    const adults = document.getElementById("adults").value;

    if (!name) {
      alert("Please enter your name.");
      return false;
    }
    if (!phone || !/^[0-9]{10}$/.test(phone)) {
      alert("Please enter a valid 10-digit phone number.");
      return false;
    }
    if (!email || !/\S+@\S+\.\S+/.test(email)) {
      alert("Please enter a valid email.");
      return false;
    }
    if (!checkin) {
      alert("Please select your check-in date.");
      return false;
    }
    if (!checkout) {
      alert("Please select your check-out date.");
      return false;
    }
    if (new Date(checkout) <= new Date(checkin)) {
      alert("Check-out date must be after check-in date.");
      return false;
    }
    if (!adults) {
      alert("Please select the number of adults.");
      return false;
    }
    return true;
  }

  // Date format conversion function to 'yyyy-mm-dd'
  function formatDateToYMD(dateStr) {
    const parts = dateStr.split('/');
    if (parts.length !== 3) return dateStr; // fallback keep original
    return `${parts[2]}-${parts[1].padStart(2, '0')}-${parts[0].padStart(2, '0')}`;
  }

  // Single form submit event listener
  document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();

    if (!validateForm()) return;

    var formData = {
      name: document.getElementById("name").value.trim(),
      phone: document.getElementById("phone").value.trim(),
      email: document.getElementById("email").value.trim(),
      checkin_date: formatDateToYMD(document.getElementById("checkin_date").value.trim()),
      checkout_date: formatDateToYMD(document.getElementById("checkout_date").value.trim()),
      adults: document.getElementById("adults").value,
      children: document.getElementById("children").value,
      room_type: document.getElementById("room_type").value
    };

    fetch('create_order.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          room_type: formData.room_type
        })
      })
      .then(res => res.json())
      .then(order => {
        if (!order || !order.id) {
          alert('Failed to create order. Please try again.');
          return;
        }
        var options = {
          key: "rzp_live_RRpddNdCYcv0eu",
          amount: order.amount,
          currency: "INR",
          name: "Surya Hotel",
          description: "Booking Payment",
          order_id: order.id,
          modal: {
            ondismiss: function() {
              alert('Payment popup closed.');
            }
          },
          handler: function(response) {
            fetch('verify_payment.php', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                  razorpay_payment_id: response.razorpay_payment_id,
                  razorpay_order_id: response.razorpay_order_id,
                  razorpay_signature: response.razorpay_signature,
                  ...formData,
                  amount: order.amount // send the paid amount!
                })
              })
              .then(r => r.json())
              .then(data => {
                if (data.success) {
                  alert('Payment successful! Your booking ID: ' + data.reservation_id);
                  window.location.href = 'reservation.php?reservation_id=' + data.reservation_id;
                } else {
                  alert('Payment verification failed: ' + (data.error || 'Unknown error'));
                }
              });
          },
          prefill: {
            name: formData.name,
            email: formData.email,
            contact: formData.phone
          },
          theme: {
            color: "#007bff"
          }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
      })
      .catch(error => {
        alert('Error initiating payment. Please try again later.');
        console.error(error);
      });
  });
</script>

<style>
  .modal-header-success {
    background-color: #28a745;
    color: white;
  }

  .modal-header-error {
    background-color: #dc3545;
    color: white;
  }
</style>

<?php include 'layouts/footer.php'; ?>
