<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow Salon - Login</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background-image: url('image/register/salonbackground.jpg');
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
        margin-bottom: 30px;
        letter-spacing: 1px;
      }

      /* Form Layout */
      .login-form {
        display: flex;
        flex-direction: column;
        gap: 18px;
      }

      /* Input Fields with Underline and Right Icons */
      .input-group {
        position: relative;
        display: flex;
        align-items: center;
      }

      .input-group input[type="text"],
      .input-group input[type="password"] {
        width: 100%;
        padding: 10px 35px 10px 5px;
        background: transparent;
        border: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.4);
        outline: none;
        color: #ffffff;
        font-size: 0.95rem;
        transition: border-color 0.3s ease;
      }

      .input-group input::placeholder {
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.88rem;
      }

      .input-group input:focus {
        border-bottom-color: #ffffff;
      }

      .input-group input:disabled {
        opacity: 0.5;
        cursor: not-allowed;
      }

      /* Icon Placement (Right Aligned) */
      .input-group .icon {
        position: absolute;
        right: 8px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
        pointer-events: none;
      }

      /* Interactive Icon specifically for Password Toggle */
      .input-group .toggle-password {
        pointer-events: auto;
        cursor: pointer;
      }

      /* Error Message Styling */
      .error-message {
        color: #ff6b6b;
        font-size: 0.85rem;
        display: none;
        margin-top: -5px;
        text-align: center;
        font-weight: 500;
      }

      /* Options Row (Remember Me & Forgot Password) */
      .options-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.82rem;
        color: rgba(255, 255, 255, 0.9);
        margin-top: 2px;
      }

      .remember-me {
        display: flex;
        align-items: center;
        gap: 6px;
        cursor: pointer;
      }

      .remember-me input {
        accent-color: #ffffff;
        cursor: pointer;
      }

      .forgot-pass {
        color: #ffffff;
        text-decoration: none;
      }

      .forgot-pass:hover {
        text-decoration: underline;
      }

      /* Rounded White Button */
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

      .submit-btn:disabled {
        background-color: #aaaaaa;
        color: #666666;
        cursor: not-allowed;
        transform: none;
      }

      /* Footer Register Link */
      .register-text {
        font-size: 0.8rem;
        margin-top: 10px;
        color: rgba(255, 255, 255, 0.8);
      }

      .register-text a {
        color: #ffffff;
        text-decoration: none;
        font-weight: 600;
      }

      .register-text a:hover {
        text-decoration: underline;
      }

      @media (max-width: 480px) {
        .card-container {
          padding: 30px 20px;
        }
      }
    </style>