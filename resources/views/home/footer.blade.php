<footer class="footer" style="background-color: #f8f9fa; padding: 1rem 0; margin-top: 1rem;">
  <div class="container">
    <div class="row g-1">
      <!-- Kolom 1 -->
      <div class="col-md-4">
        <h5 class="fw-bold mb-3" style="color: #2c3e50;">Company</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="{{ route('about') }}" class="text-decoration-none" style="color: #6c757d;">About Us</a></li>
          <li><a href="https://github.com/azkarina" class="text-decoration-none" style="color: #6c757d;">Editorial Team</a></li>
        </ul>
        
        <h5 class="fw-bold mt-4 mb-3" style="color: #2c3e50;">Our Partner</h5>
        <ul class="list-unstyled">
          <li><a href="https://itpln.ac.id/" class="text-decoration-none" style="color: #6c757d;">ITPLN</a></li>
        </ul>
      </div>

      <!-- Kolom 2 -->
      <div class="col-md-4">
        <h5 class="fw-bold mb-3" style="color: #2c3e50;">Contact</h5>
        <p class="mb-2" style="color: #6c757d;">
          <i class="mai mai-pin me-2"></i>West Jakarta
        </p>
        <p class="mb-2" style="color: #6c757d;">
          <i class="mai mai-call me-2"></i> (021) 5440342
        </p>
        <p style="color: #6c757d;">
          <i class="mai mai-mail me-2" ></i> kashrina2231055@itpln.ac.id
        </p>
      </div>

      <!-- Kolom 3 -->
      <div class="col-md-4">
        <h5 class="fw-bold mb-3" style="color: #2c3e50;">Social Media</h5>
        <div class="social-icons">
          <a href="https://github.com/azkarina" class="icon-circle" style="background-color: #333;">
            <i class="mai mai-logo-github"></i>
          </a>
          <a href="https://www.linkedin.com/in/kashrina-masyid-azka-a49931272/" class="icon-circle ms-2" style="background-color: #0077b5;">
            <i class="mai mai-logo-linkedin"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="text-center" style="color: #6c757d;">
      <small>Copyright &copy; 2025. All rights reserved</small>
    </div>
  </div>
</footer>

<style>
  .footer {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  
  .icon-circle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    color: white;
    transition: transform 0.3s;
  }
  
  .icon-circle:hover {
    transform: translateY(-3px);
  }
  
  .footer a:hover {
    color: #2c3e50 !important;
  }
</style>