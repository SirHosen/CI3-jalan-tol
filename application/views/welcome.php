<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TolDigital - Sistem Pembayaran Tol Modern Indonesia</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            height: 100vh;
            overflow: hidden;
            background: #0a0e27;
            position: relative;
        }

        /* Background Animation */
        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .gradient-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 50%, #0a0e27 100%);
            animation: gradientShift 10s ease infinite;
        }

        @keyframes gradientShift {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        /* Grid Pattern */
        .grid-pattern {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(102, 126, 234, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(102, 126, 234, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        /* Light Beams */
        .light-beam {
            position: absolute;
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, 
                transparent, 
                rgba(102, 126, 234, 0.3), 
                transparent);
            animation: beam 8s linear infinite;
        }

        .light-beam:nth-child(1) { left: 10%; animation-delay: 0s; }
        .light-beam:nth-child(2) { left: 30%; animation-delay: 2s; }
        .light-beam:nth-child(3) { left: 50%; animation-delay: 4s; }
        .light-beam:nth-child(4) { left: 70%; animation-delay: 6s; }
        .light-beam:nth-child(5) { left: 90%; animation-delay: 8s; }

        @keyframes beam {
            0%, 100% { opacity: 0; transform: translateY(-100%); }
            50% { opacity: 1; transform: translateY(0); }
        }

        /* Floating Particles */
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(102, 126, 234, 0.5);
            border-radius: 50%;
            animation: float 15s infinite;
        }

        .particle:nth-child(6) { left: 15%; animation-delay: 0s; animation-duration: 13s; }
        .particle:nth-child(7) { left: 35%; animation-delay: 2s; animation-duration: 17s; }
        .particle:nth-child(8) { left: 55%; animation-delay: 4s; animation-duration: 15s; }
        .particle:nth-child(9) { left: 75%; animation-delay: 6s; animation-duration: 20s; }
        .particle:nth-child(10) { left: 85%; animation-delay: 8s; animation-duration: 18s; }

        @keyframes float {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }

        /* Main Container */
        .container {
            position: relative;
            height: 100vh;
            display: flex;
            flex-direction: column;
            z-index: 10;
        }

        /* Navigation */
        nav {
            padding: 25px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            animation: slideDown 0.8s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: white;
            letter-spacing: -0.5px;
        }

        .nav-time {
            color: rgba(255, 255, 255, 0.6);
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            padding: 0 50px;
            max-height: calc(100vh - 200px);
        }

        .content-wrapper {
            max-width: 1400px;
            width: 100%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        /* Left Content */
        .left-content {
            animation: slideRight 1s ease-out;
        }

        @keyframes slideRight {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: rgba(102, 126, 234, 0.1);
            border: 1px solid rgba(102, 126, 234, 0.3);
            border-radius: 50px;
            margin-bottom: 25px;
        }

        .badge-dot {
            width: 8px;
            height: 8px;
            background: #667eea;
            border-radius: 50%;
            animation: blink 2s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        .badge-text {
            color: #667eea;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        h1 {
            font-size: 48px;
            font-weight: 700;
            color: white;
            line-height: 1.1;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .gradient-text {
            background: linear-gradient(135deg, #667eea, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .description {
            font-size: 17px;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.6;
            margin-bottom: 35px;
            max-width: 500px;
        }

        .button-group {
            display: flex;
            gap: 18px;
        }

        .btn {
            padding: 14px 28px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.5s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        /* Right Content - Highway Visualization */
        .right-content {
            position: relative;
            height: 350px;
            animation: slideLeft 1s ease-out;
        }

        @keyframes slideLeft {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .highway-visual {
            position: relative;
            width: 100%;
            height: 100%;
            transform: perspective(800px) rotateY(-15deg);
        }

        .road-3d {
            position: absolute;
            bottom: 50px;
            width: 100%;
            height: 120px;
            background: linear-gradient(90deg, 
                transparent,
                rgba(102, 126, 234, 0.1),
                rgba(102, 126, 234, 0.2),
                rgba(102, 126, 234, 0.1),
                transparent);
            transform: perspective(200px) rotateX(30deg);
            overflow: hidden;
        }

        .road-line-3d {
            position: absolute;
            top: 50%;
            width: 100%;
            height: 4px;
            background: repeating-linear-gradient(
                90deg,
                rgba(255, 255, 255, 0.8) 0,
                rgba(255, 255, 255, 0.8) 30px,
                transparent 30px,
                transparent 60px
            );
            animation: roadMove3d 1s linear infinite;
        }

        @keyframes roadMove3d {
            from { transform: translateX(0); }
            to { transform: translateX(60px); }
        }

        .toll-gate {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 180px;
            height: 100px;
            animation: gateFloat 4s ease-in-out infinite;
        }

        @keyframes gateFloat {
            0%, 100% { transform: translate(-50%, -50%); }
            50% { transform: translate(-50%, -55%); }
        }

        .gate-structure {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, 
                rgba(102, 126, 234, 0.2),
                rgba(102, 126, 234, 0.1));
            border: 2px solid rgba(102, 126, 234, 0.5);
            border-radius: 10px;
            position: relative;
            box-shadow: 
                0 20px 40px rgba(102, 126, 234, 0.2),
                inset 0 0 20px rgba(102, 126, 234, 0.1);
        }

        .gate-light {
            position: absolute;
            width: 18px;
            height: 18px;
            background: #667eea;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.8);
            animation: lightPulse 1.5s ease-in-out infinite;
        }

        .gate-light:nth-child(1) { top: 15px; left: 15px; }
        .gate-light:nth-child(2) { top: 15px; right: 15px; animation-delay: 0.5s; }
        .gate-light:nth-child(3) { bottom: 15px; left: 15px; animation-delay: 1s; }
        .gate-light:nth-child(4) { bottom: 15px; right: 15px; animation-delay: 1.5s; }

        @keyframes lightPulse {
            0%, 100% { 
                transform: scale(1);
                opacity: 0.5;
            }
            50% { 
                transform: scale(1.2);
                opacity: 1;
            }
        }

        .car-3d {
            position: absolute;
            width: 50px;
            height: 25px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 8px;
            bottom: 85px;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            animation: carDrive 6s ease-in-out infinite;
        }

        .car-3d::before {
            content: '';
            position: absolute;
            width: 18px;
            height: 12px;
            background: rgba(255, 255, 255, 0.9);
            top: 4px;
            right: 8px;
            border-radius: 2px;
        }

        @keyframes carDrive {
            0% { left: -100px; }
            50% { left: 50%; transform: translateX(-50%); }
            100% { left: calc(100% + 100px); }
        }

        /* Stats Bar */
        .stats-bar {
            padding: 20px 50px;
            display: flex;
            justify-content: center;
            gap: 30px;
            animation: slideUp 1.2s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px 25px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .stat-icon {
            width: 35px;
            height: 35px;
            background: rgba(102, 126, 234, 0.2);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .stat-info {
            display: flex;
            flex-direction: column;
        }

        .stat-value {
            font-size: 18px;
            font-weight: 700;
            color: white;
        }

        .stat-label {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .content-wrapper {
                gap: 50px;
            }

            h1 {
                font-size: 42px;
            }
        }

        @media (max-width: 1024px) {
            .content-wrapper {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .right-content {
                display: none;
            }

            .main-content {
                justify-content: center;
            }

            .left-content {
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .button-group {
                justify-content: center;
            }

            h1 {
                font-size: 38px;
            }
        }

        @media (max-width: 768px) {
            nav {
                padding: 20px 25px;
            }

            .main-content {
                padding: 0 25px;
            }

            h1 {
                font-size: 32px;
            }

            .description {
                font-size: 15px;
            }

            .button-group {
                flex-direction: column;
                width: 100%;
                max-width: 300px;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .stats-bar {
                flex-wrap: wrap;
                padding: 20px 25px;
                gap: 15px;
            }

            .stat-item {
                flex: 1;
                min-width: 140px;
                padding: 12px 18px;
            }

            .stat-value {
                font-size: 16px;
            }

            .stat-icon {
                width: 30px;
                height: 30px;
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 28px;
            }

            .badge {
                font-size: 11px;
                padding: 6px 12px;
            }

            .description {
                font-size: 14px;
            }

            .btn {
                font-size: 14px;
                padding: 12px 24px;
            }

            .stat-item {
                min-width: 45%;
            }
        }
    </style>
</head>
<body>
    <!-- Background Elements -->
    <div class="background">
        <div class="gradient-bg"></div>
        <div class="grid-pattern"></div>
        <div class="light-beam"></div>
        <div class="light-beam"></div>
        <div class="light-beam"></div>
        <div class="light-beam"></div>
        <div class="light-beam"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Main Container -->
    <div class="container">
        <!-- Navigation -->
        <nav>
            <div class="logo">
                <div class="logo-icon">🛣️</div>
                <div class="logo-text">TolDigital</div>
            </div>
            <div class="nav-time" id="currentTime"></div>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <div class="content-wrapper">
                <!-- Left Content -->
                <div class="left-content">
                    <div class="badge">
                        <div class="badge-dot"></div>
                        <span class="badge-text">Sistem Aktif 24/7</span>
                    </div>
                    
                    <h1>
                        Masa Depan<br>
                        Pembayaran <span class="gradient-text">Tol Digital</span>
                    </h1>
                    
                    <p class="description">
                        Rasakan pengalaman berkendara tanpa hambatan dengan sistem pembayaran tol 
                        otomatis tercepat dan teraman di Indonesia.
                    </p>
                    
                    <div class="button-group">
                        <a href="<?= site_url('register') ?>" class="btn btn-primary">
                            <span>Mulai Sekarang</span>
                            <span>→</span>
                        </a>
                        <a href="<?= site_url('login') ?>" class="btn btn-secondary">
                            <span>Masuk Akun</span>
                        </a>
                    </div>
                </div>

                <!-- Right Content - Highway Visualization -->
                <div class="right-content">
                    <div class="highway-visual">
                        <div class="road-3d">
                            <div class="road-line-3d"></div>
                        </div>
                        <div class="toll-gate">
                            <div class="gate-structure">
                                <div class="gate-light"></div>
                                <div class="gate-light"></div>
                                <div class="gate-light"></div>
                                <div class="gate-light"></div>
                            </div>
                        </div>
                        <div class="car-3d"></div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Stats Bar -->
        <div class="stats-bar">
            <div class="stat-item">
                <div class="stat-icon">👥</div>
                <div class="stat-info">
                    <div class="stat-value">2.5M+</div>
                    <div class="stat-label">Pengguna</div>
                </div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">🛣️</div>
                <div class="stat-info">
                    <div class="stat-value">150+</div>
                    <div class="stat-label">Gerbang Tol</div>
                </div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">⚡</div>
                <div class="stat-info">
                    <div class="stat-value">< 3s</div>
                    <div class="stat-label">Waktu Transaksi</div>
                </div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">🔒</div>
                <div class="stat-info">
                    <div class="stat-value">100%</div>
                    <div class="stat-label">Aman</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Display current time
        function updateTime() {
            const now = new Date();
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            };
            document.getElementById('currentTime').textContent = 
                now.toLocaleDateString('id-ID', options);
        }
        
        updateTime();
        setInterval(updateTime, 60000);

        // Add smooth hover effect to buttons
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('mouseenter', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const ripple = document.createElement('span');
                ripple.style.position = 'absolute';
                ripple.style.width = '100px';
                ripple.style.height = '100px';
                ripple.style.background = 'rgba(255, 255, 255, 0.3)';
                ripple.style.borderRadius = '50%';
                ripple.style.transform = 'translate(-50%, -50%)';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.animation = 'ripple 0.6s ease-out';
                ripple.style.pointerEvents = 'none';
                
                this.appendChild(ripple);
                
                setTimeout(() => ripple.remove(), 600);
            });
        });

        // Add ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                from {
                    width: 0;
                    height: 0;
                    opacity: 1;
                }
                to {
                    width: 300px;
                    height: 300px;
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
