<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Sistem Manajemen Tol</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            min-height: 100vh;
            background: #0a0a0a;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Neon Grid Background */
        .bg-grid {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(138, 43, 226, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(138, 43, 226, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        /* Neon Orbs */
        .neon-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.5;
            animation: float 15s infinite ease-in-out;
        }

        .orb1 {
            width: 400px;
            height: 400px;
            background: #8a2be2;
            top: -200px;
            left: -200px;
            animation-delay: 0s;
        }

        .orb2 {
            width: 300px;
            height: 300px;
            background: #9945ff;
            bottom: -150px;
            right: -150px;
            animation-delay: 5s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -30px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
        }

        /* Login Container */
        .login-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 440px;
            padding: 20px;
        }

        .login-box {
            background: rgba(15, 15, 15, 0.9);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(138, 43, 226, 0.3);
            border-radius: 24px;
            padding: 48px 40px;
            box-shadow: 
                0 0 40px rgba(138, 43, 226, 0.2),
                inset 0 0 20px rgba(138, 43, 226, 0.05);
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Logo Section */
        .logo-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-container {
            width: 90px;
            height: 90px;
            margin: 0 auto 24px;
            background: linear-gradient(135deg, #8a2be2, #9945ff);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 
                0 0 30px rgba(138, 43, 226, 0.5),
                inset 0 0 20px rgba(255, 255, 255, 0.1);
        }

        .logo-container::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(135deg, #8a2be2, #9945ff, #8a2be2);
            border-radius: 20px;
            z-index: -1;
            opacity: 0.7;
            filter: blur(10px);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 0.8; }
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            fill: white;
        }

        h1 {
            color: #ffffff;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
            font-weight: 400;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 24px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        .input-wrapper {
            position: relative;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 14px 16px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            font-size: 15px;
            color: white;
            transition: all 0.3s;
        }

        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.08);
            border-color: #8a2be2;
            box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.1);
        }

        .toggle-password {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: rgba(255, 255, 255, 0.5);
            transition: color 0.3s;
        }

        .toggle-password:hover {
            color: #8a2be2;
        }

        /* Remember Me */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checkbox-wrapper input[type="checkbox"] {
            appearance: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            cursor: pointer;
            position: relative;
            transition: all 0.3s;
        }

        .checkbox-wrapper input[type="checkbox"]:checked {
            background: #8a2be2;
            border-color: #8a2be2;
        }

        .checkbox-wrapper input[type="checkbox"]:checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 12px;
        }

        .checkbox-wrapper label {
            margin: 0;
            color: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            font-size: 14px;
        }

        .forgot-link {
            color: #8a2be2;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
        }

        .forgot-link:hover {
            color: #9945ff;
            text-shadow: 0 0 10px rgba(153, 69, 255, 0.5);
        }

        /* Login Button */
        .login-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #8a2be2, #9945ff);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .login-btn:hover::before {
            left: 100%;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 
                0 10px 30px rgba(138, 43, 226, 0.4),
                0 0 40px rgba(138, 43, 226, 0.3);
        }

        /* Divider */
        .divider {
            text-align: center;
            margin: 32px 0;
            position: relative;
        }

        .divider::before,
        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: calc(50% - 30px);
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        }

        .divider::before { left: 0; }
        .divider::after { right: 0; }

        .divider span {
            color: rgba(255, 255, 255, 0.4);
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Register Link */
        .register-section {
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
        }

        .register-section a {
            color: #8a2be2;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .register-section a:hover {
            color: #9945ff;
            text-shadow: 0 0 10px rgba(153, 69, 255, 0.5);
        }

        /* Loading State */
        .loading {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin: 0 auto;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Error Message */
        .error-message {
            display: none;
            background: rgba(220, 53, 69, 0.1);
            border: 1px solid rgba(220, 53, 69, 0.3);
            color: #ff6b6b;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            animation: shake 0.5s;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }

        .error-message.show {
            display: block;
        }
    </style>
</head>
<body>
    <div class="bg-grid"></div>
    <div class="neon-orb orb1"></div>
    <div class="neon-orb orb2"></div>

    <div class="login-container">
        <div class="login-box">
            <div class="logo-section">
                <div class="logo-container">
                    <svg class="logo-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7V12C2 16.5 4.23 20.68 7.62 23.15L12 24L16.38 23.15C19.77 20.68 22 16.5 22 12V7L12 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 7V17M7 12H17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h1>Sistem Tol</h1>
                <p class="subtitle">Portal Manajemen Perusahaan</p>
            </div>

            <div class="error-message" id="errorMessage">
                Email atau kata sandi salah. Silakan coba lagi.
            </div>

            <form id="loginForm">
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" placeholder="Masukkan email Anda" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" placeholder="Masukkan kata sandi" required>
                        <span class="toggle-password">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 12S5 4 12 4S23 12 23 12S19 20 12 20S1 12 1 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="form-options">
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="remember">
                        <label for="remember">Ingat saya</label>
                    </div>
                    <a href="#" class="forgot-link">Lupa kata sandi?</a>
                </div>

                <button type="submit" class="login-btn">
                    <span class="btn-text">Masuk</span>
                    <div class="loading"></div>
                </button>
            </form>

            <div class="divider">
                <span>atau</span>
            </div>

            <div class="register-section">
                Belum punya akun? <a href="register.html">Buat Akun</a>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.querySelector('.toggle-password');
        const passwordInput = document.getElementById('password');
        
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Change icon
            if (type === 'password') {
                this.innerHTML = `
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 12S5 4 12 4S23 12 23 12S19 20 12 20S1 12 1 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                `;
            } else {
                this.innerHTML = `
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 1L23 23" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                `;
            }
        });

        // Form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const btn = document.querySelector('.login-btn');
            const btnText = btn.querySelector('.btn-text');
            const loading = btn.querySelector('.loading');
            const errorMsg = document.getElementById('errorMessage');
            
            // Hide error message if shown
            errorMsg.classList.remove('show');
            
            // Show loading
            btnText.style.display = 'none';
            loading.style.display = 'block';
            
            // Simulate login process
            setTimeout(() => {
                btnText.style.display = 'block';
                loading.style.display = 'none';
                
                // Simulasi validasi (ganti dengan logika login sesungguhnya)
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                
                if (email && password) {
                    // Redirect ke dashboard jika login berhasil
                    console.log('Login berhasil!');
                    // window.location.href = 'dashboard.html';
                } else {
                    // Tampilkan pesan error
                    errorMsg.classList.add('show');
                }
            }, 2000);
        });

        // Remove error message when user starts typing
        document.getElementById('email').addEventListener('input', function() {
            document.getElementById('errorMessage').classList.remove('show');
        });
        
        document.getElementById('password').addEventListener('input', function() {
            document.getElementById('errorMessage').classList.remove('show');
        });
    </script>
</body>
</html>
