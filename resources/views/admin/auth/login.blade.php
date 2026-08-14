<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login - Caprock Real Estates</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .admin-login-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
      overflow: hidden;
    }
    .admin-header {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 2rem;
      text-align: center;
    }
    .admin-header h2 {
      margin: 0;
      font-weight: 700;
      font-size: 2rem;
    }
    .admin-header p {
      margin: 0.5rem 0 0 0;
      opacity: 0.9;
    }
    .form-control:focus {
      border-color: #667eea;
      box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }
    .btn-admin {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border: none;
      padding: 0.75rem 2rem;
      font-weight: 600;
      transition: transform 0.2s;
    }
    .btn-admin:hover {
      background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
      transform: translateY(-2px);
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <div class="admin-login-card">
        <div class="admin-header">
          <h2>🔐 Admin Portal</h2>
          <p>Caprock Real Estates</p>
        </div>
        
        <div class="p-5">
          <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            
            <div class="mb-4">
              <label for="email" class="form-label fw-bold">Email Address</label>
              <input 
                id="email" 
                type="email" 
                class="form-control form-control-lg @error('email') is-invalid @enderror" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autocomplete="email" 
                autofocus
                placeholder="admin@caprock.com"
              >
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-4">
              <label for="password" class="form-label fw-bold">Password</label>
              <input 
                id="password" 
                type="password" 
                class="form-control form-control-lg @error('password') is-invalid @enderror" 
                name="password" 
                required 
                autocomplete="current-password"
                placeholder="Enter your password"
              >
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-4">
              <div class="form-check">
                <input 
                  class="form-check-input" 
                  type="checkbox" 
                  name="remember" 
                  id="remember" 
                  {{ old('remember') ? 'checked' : '' }}
                >
                <label class="form-check-label" for="remember">
                  Remember Me
                </label>
              </div>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg btn-admin">
                Login to Admin Panel
              </button>
            </div>
          </form>
          
          <div class="text-center mt-4">
            <a href="/" class="text-muted text-decoration-none">
              ← Back to Website
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
