<!-- jQuery Logic -->
  <script>
    $(document).ready(function () {
      
      // Enforce numeric-only input for the phone field
      $('#phone').on('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
      });

      // Toggle password visibility on icon click
      $('.toggle-password').on('click', function () {
        const targetInput = $($(this).data('target'));
        const type = targetInput.attr('type') === 'password' ? 'text' : 'password';
        
        targetInput.attr('type', type);
        
        // Toggle the icon class between eye and eye-slash
        $(this).toggleClass('fa-eye-slash fa-eye');
      });

      // Form validation on submission
      $('#registrationForm').on('submit', function (e) {
        e.preventDefault();
        let isValid = true;

        // Reset previous errors
        $('.error-msg').hide();
        $('.input-group').removeClass('error');

        // Name / Username validation
        const name = $('#Name').val().trim();
        const namePattern = /^[A-Za-z\s]+$/;
        if (name === '') {
          showError('#Name', '#usernameError', 'Please enter your username');
          isValid = false;
        } else if (!namePattern.test(name)) {
          showError('#Name', '#usernameError', 'Name must contain only letters');
          isValid = false;
        }

        // Email validation
        const email = $('#email').val().trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === '') {
          showError('#email', '#emailError', 'Please enter your email address');
          isValid = false;
        } else if (!emailPattern.test(email)) {
          showError('#email', '#emailError', 'Please enter a valid email address');
          isValid = false;
        }

        // Phone validation (exactly 11 digits)
        const phone = $('#phone').val().trim();
        const phonePattern = /^[0-9]{11}$/;
        if (phone === '') {
          showError('#phone', '#phoneError', 'This field is required.');
          isValid = false;
        } else if (!phonePattern.test(phone)) {
          showError('#phone', '#phoneError', 'Phone number must be exactly 11 digits.');
          isValid = false;
        }

        // Password validation
        const password = $('#password').val();
        if (password === '') {
          showError('#password', '#passwordError', 'Please provide a password');
          isValid = false;
        } else if (password.length < 6) {
          showError('#password', '#passwordError', 'Password must be at least 6 characters');
          isValid = false;
        }

        // Confirm Password validation
        const confirmPassword = $('#confirmPassword').val();
        if (confirmPassword === '') {
          showError('#confirmPassword', '#confirmPasswordError', 'Please confirm your password');
          isValid = false;
        } else if (password !== confirmPassword) {
          showError('#confirmPassword', '#confirmPasswordError', 'Passwords do not match');
          isValid = false;
        }

        if (isValid) {
          alert('Registration successful!');
        }
      });

      // Clear error display on user input
      $('input').on('input', function () {
        $(this).closest('.input-group').removeClass('error');
        $(this).closest('.input-field-wrapper').find('.error-msg').fadeOut(200);
      });

      function showError(inputSelector, errorSelector, message) {
        $(inputSelector).closest('.input-group').addClass('error');
        $(errorSelector).text(message).fadeIn(200);
      }
    });
  </script>