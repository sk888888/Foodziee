<script>
                document.getElementById('register-toggle').addEventListener('click', function() {
                  document.getElementById('login-fields').style.display = 'none';
                  document.getElementById('register-fields').style.display = 'block';
                  document.getElementById('login-register-toggle').innerText = 'Register';
                  document.getElementById('register-toggle').style.display = 'none';
                  var backToLoginLink = document.createElement('a');
                  backToLoginLink.href = '#';
                  backToLoginLink.className = 'text-warning text-decoration-none';
                  backToLoginLink.id = 'login-link';
                  backToLoginLink.innerText = '/Login';
                  document.querySelector('.modal-title').appendChild(backToLoginLink);
                  document.getElementById('login-link').addEventListener('click', function() {
                    document.getElementById('login-fields').style.display = 'block';
                    document.getElementById('register-fields').style.display = 'none';
                    document.getElementById('login-register-toggle').innerText = 'Login';
                    document.getElementById('register-toggle').style.display = 'inline';
                    document.getElementById('login-link').remove();
                  });
                  document.querySelector('#register-fields button[type="submit"]').addEventListener('click', function(event) {
                    event.preventDefault();
                  document.querySelector('form').submit();
         });
        });
            </script>
            OR empty($bank_name) OR empty($branch_name) OR empty($ifsc_code)