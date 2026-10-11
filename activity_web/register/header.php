<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
      /* General Setup */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      body {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background-image: url('../login/image/register/salonbackground.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

      /* Glassmorphism Card Container */
      .card-container {
        width: 100%;
        max-width: 400px;
        padding: 40px 30px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.18);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        text-align: center;
        color: #ffffff;
      }

      /* Header */
      .title {
        font-size: 1.8rem;
        font-weight: 600;
        margin-bottom: 25px;
        letter-spacing: 1px;
      }

      /* Form Layout */
      .register-form {
        display: flex;
        flex-direction: column;
        gap: 12px;
      }

      .input-field-wrapper {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
      }

      /* Input Fields with Rounded Pill Style */
      .input-group {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
      }

      .input-group input {
        width: 100%;
        padding: 12px 40px 12px 18px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 25px;
        outline: none;
        color: #ffffff;
        font-size: 0.9rem;
        transition: border-color 0.3s ease;
      }

      .input-group input::placeholder {
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.88rem;
      }

      .input-group input:focus {
        border-color: #ffffff;
      }

      .input-group.error input {
        border-color: #ff6b6b;
      }

      /* Icon Placement (Right Aligned) */
      .input-group .icon {
        position: absolute;
        right: 15px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
        pointer-events: none;
      }

      /* Interactive Password Toggle Icon */
      .input-group .toggle-password {
        pointer-events: auto;
        cursor: pointer;
        transition: color 0.2s ease;
      }

      .input-group .toggle-password:hover {
        color: #ffffff;
      }

      /* Error Message Text */
      .error-msg {
        font-size: 0.78rem;
        color: #ff6b6b;
        margin-top: 4px;
        margin-left: 12px;
        display: none;
        text-align: left;
      }

      /* Rounded White Register Button */
      .submit-btn {
        margin-top: 10px;
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 25px;
        background-color: #ffffff;
        color: #111827;
        font-weight: 600;
        font-size: 0.95rem;
        cursor: pointer;
        transition: background-color 0.2s ease, transform 0.1s ease;
      }

      .submit-btn:hover {
        background-color: #f3f4f6;
      }

      .submit-btn:active {
        transform: scale(0.98);
      }

      /* Footer Login Link */
      .login-text {
        font-size: 0.8rem;
        margin-top: 10px;
        color: rgba(255, 255, 255, 0.8);
      }

      .login-text a {
        color: #ffffff;
        text-decoration: none;
        font-weight: 600;
      }

      .login-text a:hover {
        text-decoration: underline;
      }

      /* Mobile Responsive Rule */
      @media (max-width: 480px) {
        .card-container {
          padding: 30px 20px;
        }
      }
    </style>