<div class="card-container">
    <h2 class="title">Login</h2>
    
    <form class="login-form" id="loginForm">
      <!-- Username -->
      <div class="input-group">
        <input type="text" id="username" placeholder="Username" required>
        <i class="fa-regular fa-user icon"></i>
      </div>

      <!-- Password with Eye Toggle -->
      <div class="input-group">
        <input type="password" id="password" placeholder="Password" required>
        <i class="fa-solid fa-eye icon toggle-password" id="togglePassword"></i>
      </div>

      <!-- Error / Try Again Message -->
      <div class="error-message" id="errorMessage"></div>

      <!-- Remember Me & Forgot Password Row -->
      <div class="options-row">
        <label class="remember-me">
          <input type="checkbox"> Remember me
        </label>
        <a href="#" class="forgot-pass">Forgot password?</a>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="submit-btn" id="submitBtn">Login</button>

      <!-- Footer Link -->
      <p class="register-text">
        Don't have an account? <a href="register.html">Register</a>
      </p>
    </form>
  </div>