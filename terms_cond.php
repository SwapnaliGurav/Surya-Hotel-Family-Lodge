

<?php include 'layouts/header.php'; ?>


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Terms and Conditions</title>
  <style>
    /* Your provided CSS */

    body {
      margin: 0;
      padding-top: 180px;
      /* adjust for header */
      background: #fff;
      font-family: "Roboto", arial, sans-serif;
      font-weight: 200;
      font-size: 16px;
      line-height: 1.8;
      color: #6c757d;
    }

    .site-header {
      position: fixed;
      top: 0;
      width: 100%;
      height: 140px;
      /* taller header */
      background: #ffba5a;
      color: #000;
      font-family: "Playfair Display", times, serif;
      font-weight: bold;
      z-index: 10;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0 40px;
    }

    .icon-container {
      position: absolute;
      left: 40px;
      top: 50%;
      transform: translateY(-50%);
      width: 48px;
      height: 48px;
      cursor: pointer;
    }

    .icon-svg {
      width: 100%;
      height: 100%;
      fill: #000;
      /* Animation applied only when scroll > 0 */
    }

    .float-animation {
      animation: floatUpDown 1.5s ease-in-out infinite;
    }

    @keyframes floatUpDown {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-10px);
      }
    }

    .site-header h1 {
      margin: 0;
      font-size: 36px;
      text-align: center;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 0 20px 50px;
    }

    h1,
    h2,
    h3 {
      color: #000;
      font-family: "Playfair Display", times, serif;
      margin-top: 2em;
      margin-bottom: 0.5em;
    }

    p {
      margin-bottom: 1.2em;
    }

    ul {
      margin-left: 20px;
      margin-bottom: 1.2em;
    }

    li {
      margin-bottom: 0.75em;
    }

    .section {
      padding: 3em 0;
    }
  </style>


  <header class="site-header">
    <div class="icon-container" id="headerIcon" title="Icon" aria-label="Icon">
      <!-- Hotel Icon (initial) -->
      <svg class="icon-svg" id="hotelIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-hidden="true">
        <path d="M8 26v30h48V26H8zm24 18h-8v-8h8v8zm12 0h-8v-8h8v8zm0-12h-32V18h32v14zm-10-8h-12v6h12v-6z" />
        <path d="M0 30h64v4H0v-4z" opacity=".3" />
        <path d="M58 24H6v-4h52v4z" />
      </svg>
      <!-- Home Icon (hidden initially) -->
      <svg class="icon-svg" id="homeIcon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;" aria-hidden="true">
        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
      </svg>
    </div>
    <h1> <b>Terms and Conditions</b></h1>
  </header>

  <main class="container section">

    <p>Welcome to our hotel/lodge. We kindly request all guests to thoroughly read and understand these terms and conditions before confirming any reservations. This ensures a clear mutual understanding and a smooth, pleasant experience during your stay with us.</p>

    <h2>1. Reservations</h2>
    <p>All reservations are subject to availability at the time of booking. A valid credit card must be provided to secure the reservation. We advise guests to book early especially during peak seasons to ensure room availability. Special requests such as room preferences or additional amenities are accommodated on a best-effort basis and cannot be guaranteed. In case of disputes or misunderstandings, the terms listed here prevail to maintain fairness and hospitality standards.</p>

    <h2>2. Check-in and Check-out</h2>
    <p>Standard check-in begins at 2:00 PM, which allows necessary preparation of rooms after previous check-outs. Check-out is expected by 12:00 PM to facilitate cleaning and preparation for incoming guests. Early check-in or late check-out can be arranged on request but may incur additional fees and depend entirely on room availability. Guests are encouraged to communicate such needs in advance for appropriate arrangements. Failure to comply with check-out times may affect subsequent guests and operational efficiency.</p>

    <h2>3. Cancellation Policy</h2>
    <p>If a reservation is cancelled less than 48 hours before the arrival date, a cancellation fee amounting to one night's stay will be charged. This policy helps the hotel manage room inventory efficiently and offer availability to other potential guests. No-shows are treated equivalently to late cancellations. We recommend guests inform the hotel as early as possible to avoid any unnecessary charges and to enable us to resell the room to other guests. All cancellations must be communicated via official hotel channels.</p>

    <h2>4. Payment</h2>
    <p>Full payment for your accommodation is required at the time of check-in. We accept all major credit and debit cards, as well as cash payments. Additional incidental expenses such as minibar usage, room service, or damages will be billed at check-out. Valid photo identification is required to complete the payment process. Guests are responsible for ensuring payment methods are authorized and valid. Any failure to make payment on time may result in penalties or refusal of service.</p>

    <h2>5. Guest Responsibilities</h2>
    <ul>
      <li>Guests must take care of the hotel’s property and avoid damages to furnishings, fixtures, or equipment. Any damage caused intentionally or accidentally will be charged to the responsible party.</li>
      <li>Respectful behavior, including complying with noise regulations, is expected to ensure a relaxing environment for all guests.</li>
      <li>Any illegal activities or breaches of hotel policies may result in immediate eviction without refund.</li>
      <li>Guests should follow health and safety guidelines prescribed by the hotel and local authorities.</li>
      <li>The hotel reserves the right to refuse service to disruptive or non-compliant guests.</li>
    </ul>

    <h2>6. Liability</h2>
    <p>The hotel is not liable for loss, theft, or damage to personal belongings during the guest’s stay. We recommend using in-room safes or the hotel's secure storage facilities for valuables. Guests must exercise general caution with their property. The hotel’s insurance does not cover personal items of guests. Any suspicious activity should be immediately reported to hotel security for prompt investigation. The hotel maintains strict security protocols but cannot guarantee absolute protection against theft.</p>

    <h2>7. Pets</h2>
    <p>Pets are allowed only in specifically designated rooms and with prior arrangements. Fees may apply depending on the type and size of the pet. Guests are responsible for pet behavior, hygiene, and any damages caused. Pets must not disturb other guests or staff. The hotel reserves the right to deny accommodation to pets that pose health or safety risks. Owners must comply with local animal laws and hotel pet policies at all times. Proper documentation like vaccination records may be requested.</p>

    <h2>8. Smoking Policy</h2>
    <p>Smoking is strictly prohibited inside rooms and all enclosed hotel areas. Designated outdoor smoking areas are available for guests who wish to smoke. Failure to observe this policy will result in fines and additional cleaning charges. The hotel is committed to providing a healthy environment and protecting non-smoking guests. Repeated non-compliance can lead to eviction of the guest without refund. Guests are encouraged to respect this policy for the wellbeing of all occupants.</p>

    <h2>9. Force Majeure</h2>
    <p>The hotel cannot be held responsible for failure to perform contractual obligations due to events beyond its reasonable control, including but not limited to natural disasters, government restrictions, strikes, pandemics, or emergencies. In such cases, the affected parties will be notified promptly, and efforts will be made to mitigate the impact. Refunds or rescheduling will be handled according to the hotel's discretion and legal advisories. Guests are advised to obtain travel insurance for additional protection against unforeseen circumstances.</p>

    <h2>Contact Us</h2>
    <p>For any questions or clarifications regarding these terms and conditions, please contact our front desk or email us at <a href="mailto:gvpratap@yahoo.com">gvpratap@yahoo.com</a>. You can also call us at (+91) 7666502402. Our staff is always ready to assist and ensure your stay is enjoyable and hassle-free.</p>
  </main>

  <script>
    const hotelIcon = document.getElementById('hotelIcon');
    const homeIcon = document.getElementById('homeIcon');

    // Function to add float animation class
    function addFloatAnimation(icon) {
      icon.classList.add('float-animation');
    }
    // Function to remove float animation class
    function removeFloatAnimation(icon) {
      icon.classList.remove('float-animation');
    }

    window.addEventListener('scroll', () => {
      if (window.scrollY > 0) {
        if (hotelIcon.style.display !== 'none') {
          hotelIcon.style.display = 'none';
          removeFloatAnimation(hotelIcon);
        }
        if (homeIcon.style.display !== 'block') {
          homeIcon.style.display = 'block';
          addFloatAnimation(homeIcon);
        }
      } else {
        if (homeIcon.style.display !== 'none') {
          homeIcon.style.display = 'none';
          removeFloatAnimation(homeIcon);
        }
        if (hotelIcon.style.display !== 'block') {
          hotelIcon.style.display = 'block';
          addFloatAnimation(hotelIcon);
        }
      }
    });

    // Initially show hotel icon with animation off (no scroll yet)
    hotelIcon.style.display = 'block';
    homeIcon.style.display = 'none';
  </script>

<?php include 'layouts/footer.php'; ?>