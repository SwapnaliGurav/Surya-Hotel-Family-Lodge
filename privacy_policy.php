<?php include 'layouts/header.php'; ?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Privacy Policy</title>
  <style>
    body {
      margin: 0;
      padding-top: 180px;
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
    }

    .float-animation {
      animation: floatUpDown 1.5s ease-in-out infinite;
    }

    @keyframes floatUpDown {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    .site-header h1 {
      margin: 0;
      font-size: 32px;
      text-align: center;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 0 20px 50px;
    }

    h1, h2, h3 {
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
      <!-- Home Icon -->
      <svg class="icon-svg" id="homeIcon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;" aria-hidden="true">
        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
      </svg>
    </div>
    <h1><b>Privacy Policy</b></h1>
  </header>

  <main class="container section">

    <p>Your privacy is very important to us. This policy explains how we collect, use, and protect the personal information you provide when booking or staying with us.</p>

    <h2>1. Information We Collect</h2>
    <ul>
      <li>Personal details such as name, phone number, address, and email provided during booking.</li>
      <li>Government-issued ID information for verification at check-in.</li>
      <li>Payment details (processed through secure third-party gateways).</li>
      <li>Preferences or requests you communicate for your stay.</li>
      <li>Technical data such as IP address when accessing our website.</li>
    </ul>

    <h2>2. How We Use Your Information</h2>
    <ul>
      <li>To confirm and manage your reservations effectively.</li>
      <li>For billing, payments, and refund processing purposes.</li>
      <li>To improve hotel services, offers, and guest experience.</li>
      <li>To comply with legal, tax, and security obligations.</li>
      <li>For communication about promotions or hotel updates (only if opted-in).</li>
    </ul>

    <h2>3. Data Protection</h2>
    <ul>
      <li>We implement strict security measures to protect your personal data.</li>
      <li>Sensitive details like payment methods are encrypted and never stored in plain text.</li>
      <li>Only authorized staff have access to guest data for operational purposes.</li>
    </ul>

    <h2>4. Sharing of Information</h2>
    <ul>
      <li>We do not sell or share guest data with third parties for marketing purposes.</li>
      <li>Information may be shared with trusted partners (e.g., banks, payment gateways) to complete transactions.</li>
      <li>We may disclose data if required by law, government, or court orders.</li>
    </ul>

    <h2>5. Guest Rights</h2>
    <ul>
      <li>You may request a copy of the information we hold about you.</li>
      <li>You can correct or update your personal details anytime.</li>
      <li>You may withdraw consent from marketing communications.</li>
      <li>You may request deletion of personal data where legally possible.</li>
    </ul>

    <h2>6. Cookies and Tracking</h2>
    <p>Our website may use cookies to improve functionality and gather anonymous usage statistics. You can manage cookie preferences through your browser settings.</p>

    <h2>7. Contact Us</h2>
    <p>If you have any questions about our privacy practices, please contact us at <a href="mailto:gvpratap@yahoo.com">gvpratap@yahoo.com</a> or call us at (+91) 7666502402.</p>

  </main>

  <script>
    const hotelIcon = document.getElementById('hotelIcon');
    const homeIcon = document.getElementById('homeIcon');

    function addFloatAnimation(icon) {
      icon.classList.add('float-animation');
    }
    function removeFloatAnimation(icon) {
      icon.classList.remove('float-animation');
    }

    window.addEventListener('scroll', () => {
      if (window.scrollY > 0) {
        hotelIcon.style.display = 'none';
        removeFloatAnimation(hotelIcon);
        homeIcon.style.display = 'block';
        addFloatAnimation(homeIcon);
      } else {
        homeIcon.style.display = 'none';
        removeFloatAnimation(homeIcon);
        hotelIcon.style.display = 'block';
        addFloatAnimation(hotelIcon);
      }
    });

    hotelIcon.style.display = 'block';
    homeIcon.style.display = 'none';
  </script>

<?php include 'layouts/footer.php'; ?>
