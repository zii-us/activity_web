<script>
    let attemptsLeft = 3;

    // Toggle Password Visibility
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
      
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });

    // Form Submit Handler
    document.getElementById('loginForm').addEventListener('submit', function (event) {
      event.preventDefault();

      const usernameInput = document.getElementById('username').value.trim();
      const passwordInput = document.getElementById('password').value.trim();
      const errorMessage = document.getElementById('errorMessage');
      const submitBtn = document.getElementById('submitBtn');
      const usernameField = document.getElementById('username');

      if (usernameInput === 'zairah' && passwordInput === 'garcia') {
        window.location.href = 'http://localhost/activity_web/landingpage/index.php';
      } else {
        attemptsLeft--;

        if (attemptsLeft > 0) {
          errorMessage.textContent = `Incorrect credentials. Try again! (${attemptsLeft} attempt${attemptsLeft > 1 ? 's' : ''} left)`;
          errorMessage.style.display = 'block';
        } else {
          errorMessage.textContent = 'Too many failed attempts. You are locked out!';
          errorMessage.style.display = 'block';

          usernameField.disabled = true;
          passwordField.disabled = true;
          submitBtn.disabled = true;
        }
      }
    });
</script>