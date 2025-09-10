<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login - Hospital App</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <style>
            body, html {
                height: 100%;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .left-side {
                position: relative;
                background: url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80')
                            no-repeat center center;
                background-size: cover;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .left-side::after {
                content: "";
                position: absolute;
                inset: 0;
                background: rgba(0,0,0,0.55);
            }

            .left-side-content {
                position: relative;
                z-index: 2;
                text-align: center;
                color: #fff;
                animation: fadeInUp 1.2s ease-in-out;
            }

            .hospital-icon {
                font-size: 80px;
                animation: bounce 2s infinite;
            }

            .right-side {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                background: #f8f9fa;
                animation: fadeIn 1s ease-in-out;
            }

            .card-login {
                width: 100%;
                max-width: 360px;
                border: none;
                border-radius: 15px;
                box-shadow: 0 6px 20px rgba(0,0,0,0.15);
                animation: slideIn 1s ease;
            }

            .card-header {
                border-radius: 15px 15px 0 0 !important;
            }

            .btn-primary {
                border-radius: 8px;
                font-weight: 600;
                transition: all .3s;
            }
            .btn-primary:hover {
                background-color: #0a58ca;
                transform: scale(1.03);
            }

            @keyframes fadeInUp {
                from { opacity: 0; transform: translateY(40px); }
                to { opacity: 1; transform: translateY(0); }
            }

            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }

            @keyframes slideIn {
                from { transform: translateX(60px); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }

            @keyframes bounce {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-10px); }
            }

            .login-btn {
                background: linear-gradient(90deg, #0d6efd, #0a58ca);
                border: none;
                transition: all 0.3s ease;
            }
            .login-btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(13,110,253,0.4);
            }
            .input-group-text {
                border-right: none;
            }
            .form-control:focus {
                border-color: #0d6efd;
                box-shadow: 0 0 0 0.2rem rgba(13,110,253,0.25);
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-none d-md-flex left-side">
                    <div class="left-side-content">
                        <div class="hospital-icon">🏥</div>
                        <h1 class="display-6 fw-bold">Hospital App</h1>
                        <p class="lead">Sistem manajemen rumah sakit & pasien</p>
                    </div>
                </div>

                <div class="col-md-6 right-side">
                    <div class="card card-login border-0 shadow-lg">
                        <div class="card-header text-center bg-primary text-white fw-bold rounded-top">
                            <h5 class="mb-0">🔑 Login</h5>
                        </div>
                        <div class="card-body p-4">
                            @if($errors->any())
                                <div class="alert alert-danger text-center">{{ $errors->first('login') }}</div>
                            @endif
                            <form method="POST" action="/login">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-person-fill"></i></span>
                                        <input type="text" name="username" class="form-control rounded-end"
                                            placeholder="Masukkan username" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-lock-fill"></i></span>
                                        <input type="password" name="password" class="form-control rounded-end"
                                            placeholder="Masukkan password" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100 py-2 fw-bold rounded-pill login-btn">
                                    Masuk
                                </button>
                            </form>
                        </div>
                        <div class="card-footer text-center small text-muted rounded-bottom bg-light">
                            &copy; {{ date('Y') }} Hospital App
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
