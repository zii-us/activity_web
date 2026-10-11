<div class="card-container">
    <h2 class="title">Register</h2>
    
    <form class="register-form" id="registrationForm" novalidate>
      <!-- Username / Name -->
      <div class="input-field-wrapper">
        <div class="input-group">
          <input type="text" id="Name" placeholder="Name">
          <i class="fa-regular fa-user icon"></i>
        </div>
        <span class="error-msg" id="usernameError">Please enter your Name</span>
      </div>

      <!-- Email Address -->
      <div class="input-field-wrapper">
        <div class="input-group">
          <input type="email" id="email" placeholder="Email Address">
          <i class="fa-regular fa-envelope icon"></i>
        </div>
        <span class="error-msg" id="emailError">Please enter your email address</span>
      </div>

      <!-- Phone Number -->
      <div class="input-field-wrapper">
        <div class="input-group">
          <input type="tel" id="phone" maxlength="11" placeholder="Phone Number">
          <i class="fa-solid fa-phone icon"></i>
        </div>
        <span class="error-msg" id="phoneError">This field is required.</span>
      </div>

      <!-- Password -->
      <div class="input-field-wrapper">
        <div class="input-group">
          <input type="password" id="password" placeholder="Password">
          <i class="fa-solid fa-eye-slash icon toggle-password" data-target="#password"></i>
        </div>
        <span class="error-msg" id="passwordError">Please provide a password</span>
      </div>

      <!-- Confirm Password -->
      <div class="input-field-wrapper">
        <div class="input-group">
          <input type="password" id="confirmPassword" placeholder="Confirm Password">
          <i class="fa-solid fa-eye-slash icon toggle-password" data-target="#confirmPassword"></i>
        </div>
        <span class="error-msg" id="confirmPasswordError">Please confirm your password</span>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="submit-btn">Register</button>

      <!-- Footer Link -->
      <p class="login-text">
        Already have an account? <a href="../login/index.php">Login Here</a>
      </p>
    </form>
  </div>