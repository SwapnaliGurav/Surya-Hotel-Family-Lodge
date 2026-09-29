<?php include 'layouts/header.php'; ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Refund and Cancellation Policy</title>
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
            font-size: 32px;
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
        <h1> <b>Refund and Cancellation Policy</b></h1>
    </header>

    <main class="container section">

        <p>We value your trust and aim to make your booking experience clear and hassle‑free. The following refund and cancellation policies are designed to balance guest flexibility with our operational requirements.</p>

        <h2>1. Cancellation Timeline</h2>
        <ul>
            <li>Cancellations made more than 48 hours before check‑in receive a 100% refund.</li>
            <li>Cancellations within 48 hours of check‑in are charged one night’s stay.</li>
            <li>No‑shows are treated as late cancellations with no refund.</li>
            <li>Group bookings may have special cancellation terms which will be communicated during booking.</li>
            <li>Booking modifications requested less than 24 hours before arrival may not be accommodated.</li>
        </ul>

        <h2>2. Refund Process</h2>
        <ul>
            <li>Refunds are credited back to the original payment method.</li>
            <li>Processing takes 7–10 business days, depending on banks.</li>
            <li>Additional processing fees (if any) by payment partners are non-refundable.</li>
            <li>Guests should retain cancellation confirmation emails for reference.</li>
        </ul>

        <h2>3. Non‑Refundable Bookings</h2>
        <ul>
            <li>Discounted promotional rates are not eligible for refunds.</li>
            <li>Holiday and festival-season bookings may be fully non-refundable.</li>
            <li>Advance purchase bookings generally cannot be modified or cancelled.</li>
        </ul>

        <h2>4. Modifications</h2>
        <ul>
            <li>Requests must be made at least 48 hours prior to arrival.</li>
            <li>Rate differences from changes must be paid in advance.</li>
            <li>Extensions are subject to room availability and updated tariffs.</li>
            <li>Shortened stays after check-in are non-refundable.</li>
        </ul>

        <h2>5. Force Majeure</h2>
        <ul>
            <li>Events like natural disasters, pandemics, or government restrictions qualify as force majeure.</li>
            <li>Guests may request rescheduling with no extra cost during such events.</li>
            <li>Refunds under force majeure are solely at the hotel’s discretion.</li>
        </ul>

        <h2>6. Contact for Refunds</h2>
        <p>For cancellation requests, refund queries, or assistance, please contact our front desk or email <a href="mailto:gvpratap@yahoo.com">gvpratap@yahoo.com</a>. You may also call us at (+91) 7666502402. We will ensure your concerns are addressed promptly and professionally.</p>

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

        hotelIcon.style.display = 'block';
        homeIcon.style.display = 'none';
    </script>

    <?php include 'layouts/footer.php'; ?>