<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Sistem Manajemen Tol</title>
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
            overflow-x: hidden;
            padding: 40px 20px;
        }

        /* Neon Grid Background */
        .bg-grid {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
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
            position: fixed;
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
            right: -100px;
            animation-delay: 0s;
        }

        .orb2 {
            width: 300px;
            height: 300px;
            background: #9945ff;
            bottom: -150px;
            left: -100px;
            animation-delay: 5s;
        }

        .orb3 {
            width: 250px;
            height: 250px;
            background: #8a2be2;
            top: 50%;
            left: 50%;
            animation-delay: 10s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -30px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
        }

        /* Main Container */
        .main-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 1200px;
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }

        /* Register Box */
        .register-box {
            flex: 1;
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

        /* Vehicle Preview Box */
        .vehicle-preview {
            width: 400px;
            background: rgba(15, 15, 15, 0.9);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(138, 43, 226, 0.3);
            border-radius: 24px;
            padding: 30px;
            box-shadow: 
                0 0 40px rgba(138, 43, 226, 0.2),
                inset 0 0 20px rgba(138, 43, 226, 0.05);
            animation: fadeInUp 0.6s ease-out 0.2s;
            animation-fill-mode: both;
            position: sticky;
            top: 20px;
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
        .header-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-container {
            width: 80px;
            height: 80px;
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
            width: 35px;
            height: 35px;
            fill: white;
        }

        h1 {
            color: #ffffff;
            font-size: 26px;
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

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        select {
            width: 100%;
            padding: 14px 16px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            font-size: 15px;
            color: white;
            transition: all 0.3s;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }

        select {
            color: rgba(255, 255, 255, 0.7);
            cursor: pointer;
        }

        select option {
            background: #1a1a1a;
            color: white;
        }

        input:focus,
        select:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.08);
            border-color: #8a2be2;
            box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.1);
        }

        /* License Plate Input Group */
        .license-plate-group {
            display: grid;
            grid-template-columns: 1.2fr 1.5fr 1fr;
            gap: 12px;
            position: relative;
        }

        .license-plate-group input,
        .license-plate-group select {
            text-transform: uppercase;
            font-weight: 600;
            text-align: center;
            letter-spacing: 1px;
        }

        .plate-preview {
            margin-top: 12px;
            padding: 10px 15px;
            background: linear-gradient(135deg, rgba(138, 43, 226, 0.1), rgba(153, 69, 255, 0.1));
            border: 1px solid rgba(138, 43, 226, 0.3);
            border-radius: 8px;
            text-align: center;
            font-size: 18px;
            font-weight: 700;
            color: #9945ff;
            letter-spacing: 2px;
            min-height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .plate-preview.active {
            box-shadow: 0 0 20px rgba(138, 43, 226, 0.3);
        }

        /* Password Row */
        .password-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        /* Password Strength */
        .password-strength {
            margin-top: 8px;
            height: 4px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
            overflow: hidden;
        }

        .strength-bar {
            height: 100%;
            width: 0;
            transition: all 0.3s;
            box-shadow: 0 0 10px currentColor;
        }

        .strength-weak { 
            background: #ff4757; 
            width: 33%; 
        }
        .strength-medium { 
            background: #ffa502; 
            width: 66%; 
        }
        .strength-strong { 
            background: #26de81; 
            width: 100%; 
        }

        .strength-text {
            font-size: 12px;
            margin-top: 4px;
            color: rgba(255, 255, 255, 0.5);
        }

        /* Vehicle Preview Styles */
        .preview-header {
            text-align: center;
            margin-bottom: 24px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(138, 43, 226, 0.2);
        }

        .preview-title {
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .preview-subtitle {
            color: rgba(255, 255, 255, 0.5);
            font-size: 13px;
        }

        .vehicle-image-container {
            background: rgba(138, 43, 226, 0.05);
            border: 1px solid rgba(138, 43, 226, 0.2);
            border-radius: 16px;
            padding: 30px;
            min-height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .vehicle-image {
            max-width: 100%;
            max-height: 200px;
            width: auto;
            height: auto;
            object-fit: contain;
            filter: drop-shadow(0 10px 30px rgba(138, 43, 226, 0.3));
            animation: vehicleFloat 3s ease-in-out infinite;
            transition: all 0.5s ease;
        }

        @keyframes vehicleFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .no-vehicle {
            text-align: center;
            color: rgba(255, 255, 255, 0.3);
        }

        .no-vehicle-icon {
            font-size: 60px;
            margin-bottom: 15px;
            opacity: 0.3;
        }

        .vehicle-info {
            margin-top: 24px;
            padding: 20px;
            background: rgba(138, 43, 226, 0.05);
            border-radius: 12px;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .info-label {
            color: rgba(255, 255, 255, 0.5);
        }

        .info-value {
            color: #9945ff;
            font-weight: 600;
        }

        /* Submit Button */
        .register-btn {
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
            margin-top: 32px;
        }

        .register-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .register-btn:hover::before {
            left: 100%;
        }

        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 
                0 10px 30px rgba(138, 43, 226, 0.4),
                0 0 40px rgba(138, 43, 226, 0.3);
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

        /* Login Link */
        .login-link {
            text-align: center;
            margin-top: 32px;
            padding-top: 32px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
        }

        .login-link a {
            color: #8a2be2;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .login-link a:hover {
            color: #9945ff;
            text-shadow: 0 0 10px rgba(153, 69, 255, 0.5);
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

        .error-message.show {
            display: block;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }

        /* Image Error Fallback */
        .image-error {
            padding: 40px;
            text-align: center;
            color: rgba(255, 255, 255, 0.4);
        }

        .image-error-icon {
            font-size: 48px;
            margin-bottom: 10px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .main-container {
                flex-direction: column;
                max-width: 600px;
            }

            .vehicle-preview {
                width: 100%;
                position: static;
            }
        }

        @media (max-width: 600px) {
            .register-box,
            .vehicle-preview {
                padding: 32px 24px;
            }

            .password-row {
                grid-template-columns: 1fr;
            }

            .license-plate-group {
                grid-template-columns: 1fr;
            }

            body {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="bg-grid"></div>
    <div class="neon-orb orb1"></div>
    <div class="neon-orb orb2"></div>
    <div class="neon-orb orb3"></div>

    <div class="main-container">
        <!-- Register Form -->
        <div class="register-box">
            <div class="header-section">
                <div class="logo-container">
                    <svg class="logo-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7V12C2 16.5 4.23 20.68 7.62 23.15L12 24L16.38 23.15C19.77 20.68 22 16.5 22 12V7L12 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 7V17M7 12H17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h1>Buat Akun Baru</h1>
                <p class="subtitle">Bergabunglah dengan Sistem Tol Digital</p>
            </div>

            <div class="error-message" id="errorMessage"></div>

            <form id="registerForm">
                <div class="form-group">
                    <label for="fullName">Nama Lengkap</label>
                    <input type="text" id="fullName" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" placeholder="nama@email.com" required>
                </div>

                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="tel" id="phone" placeholder="+62 812-3456-7890" required>
                </div>

                <div class="form-group">
                    <label for="licensePlate">Plat Nomor Kendaraan</label>
                    <div class="license-plate-group">
                        <select id="plateRegion" required>
                            <option value="">Kode</option>
                            <option value="B">B - Jakarta</option>
                            <option value="D">D - Bandung</option>
                            <option value="F">F - Bogor</option>
                            <option value="E">E - Cirebon</option>
                            <option value="T">T - Karawang</option>
                            <option value="Z">Z - Garut</option>
                            <option value="G">G - Pekalongan</option>
                            <option value="H">H - Semarang</option>
                            <option value="K">K - Pati</option>
                            <option value="R">R - Banyumas</option>
                            <option value="AA">AA - Magelang</option>
                            <option value="AD">AD - Surakarta</option>
                            <option value="AB">AB - Yogyakarta</option>
                            <option value="L">L - Surabaya</option>
                            <option value="M">M - Madura</option>
                            <option value="N">N - Malang</option>
                            <option value="S">S - Jember</option>
                            <option value="W">W - Sidoarjo</option>
                            <option value="P">P - Banyuwangi</option>
                            <option value="AE">AE - Madiun</option>
                            <option value="AG">AG - Kediri</option>
                        </select>
                        <input type="text" id="plateNumber" placeholder="1234" maxlength="4" pattern="[0-9]{1,4}" required>
                        <input type="text" id="plateSuffix" placeholder="ABC" maxlength="3" pattern="[A-Za-z]{1,3}" required>
                    </div>
                    <div class="plate-preview" id="platePreview">
                        <span id="plateDisplay">- - - - -</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="vehicleType">Golongan Kendaraan</label>
                    <select id="vehicleType" required>
                        <option value="">Pilih golongan kendaraan</option>
                        <option value="1" data-tarif="15000">Golongan I - Sedan, Jip, Pick Up</option>
                        <option value="2" data-tarif="22500">Golongan II - Truk 2 Sumbu</option>
                        <option value="3" data-tarif="30000">Golongan III - Truk 3 Sumbu</option>
                        <option value="4" data-tarif="37500">Golongan IV - Truk 4 Sumbu</option>
                        <option value="5" data-tarif="45000">Golongan V - Truk 5+ Sumbu</option>
                    </select>
                </div>

                <div class="password-row">
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" id="password" placeholder="Min. 8 karakter" required>
                        <div class="password-strength">
                            <div class="strength-bar" id="strengthBar"></div>
                        </div>
                        <div class="strength-text" id="strengthText"></div>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Konfirmasi Kata Sandi</label>
                        <input type="password" id="confirmPassword" placeholder="Ulangi kata sandi" required>
                    </div>
                </div>

                <button type="submit" class="register-btn">
                    <span class="btn-text">Daftar Sekarang</span>
                    <div class="loading"></div>
                </button>
            </form>

            <div class="login-link">
                Sudah memiliki akun? <a href="login.html">Masuk</a>
            </div>
        </div>

        <!-- Vehicle Preview -->
        <div class="vehicle-preview">
            <div class="preview-header">
                <div class="preview-title">Preview Kendaraan</div>
                <div class="preview-subtitle">Pilih golongan untuk melihat preview</div>
            </div>

            <div class="vehicle-image-container" id="vehicleImageContainer">
                <div class="no-vehicle">
                    <div class="no-vehicle-icon">🚗</div>
                    <p>Pilih golongan kendaraan</p>
                </div>
            </div>

            <div class="vehicle-info" id="vehicleInfo" style="display: none;">
                <div class="info-item">
                    <span class="info-label">Golongan:</span>
                    <span class="info-value" id="infoGolongan">-</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Jenis:</span>
                    <span class="info-value" id="infoJenis">-</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Tarif/km:</span>
                    <span class="info-value" id="infoTarif">-</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Plat Nomor:</span>
                    <span class="info-value" id="infoPlat">-</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Base path untuk gambar - sesuaikan dengan struktur folder Anda
        const BASE_PATH = './'; // Ubah sesuai kebutuhan, misal: '/namaproject/' atau '../'
        
        // Vehicle images dengan path lokal
        const vehicleImages = {
            '1': BASE_PATH + 'assets/images/G01.png',
            '2': BASE_PATH + 'assets/images/G02.png',
            '3': BASE_PATH + 'assets/images/G03.png',
            '4': BASE_PATH + 'assets/images/G04.png',
            '5': BASE_PATH + 'assets/images/G05.png'
        };

        const vehicleInfo = {
            '1': { name: 'Sedan, Jip, Pick Up', tarif: 'Rp 15.000' },
            '2': { name: 'Truk 2 Sumbu', tarif: 'Rp 22.500' },
            '3': { name: 'Truk 3 Sumbu', tarif: 'Rp 30.000' },
            '4': { name: 'Truk 4 Sumbu', tarif: 'Rp 37.500' },
            '5': { name: 'Truk 5+ Sumbu', tarif: 'Rp 45.000' }
        };

        // License Plate Preview
        const plateRegion = document.getElementById('plateRegion');
        const plateNumber = document.getElementById('plateNumber');
        const plateSuffix = document.getElementById('plateSuffix');
        const plateDisplay = document.getElementById('plateDisplay');
        const platePreview = document.getElementById('platePreview');

        function updatePlatePreview() {
            const region = plateRegion.value;
            const number = plateNumber.value;
            const suffix = plateSuffix.value.toUpperCase();
            
            if (region || number || suffix) {
                const displayText = `${region || '-'} ${number || '----'} ${suffix || '---'}`;
                plateDisplay.textContent = displayText;
                platePreview.classList.add('active');
                
                // Update info panel
                const infoPlat = document.getElementById('infoPlat');
                if (infoPlat) {
                    infoPlat.textContent = displayText;
                }
            } else {
                plateDisplay.textContent = '- - - - -';
                platePreview.classList.remove('active');
                const infoPlat = document.getElementById('infoPlat');
                if (infoPlat) {
                    infoPlat.textContent = '-';
                }
            }
        }

        plateRegion.addEventListener('change', updatePlatePreview);
        plateNumber.addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
            updatePlatePreview();
        });
        plateSuffix.addEventListener('input', function(e) {
            this.value = this.value.replace(/[^a-zA-Z]/g, '').toUpperCase();
            updatePlatePreview();
        });

        // Vehicle Type Selection
        const vehicleType = document.getElementById('vehicleType');
        const vehicleImageContainer = document.getElementById('vehicleImageContainer');
        const vehicleInfoPanel = document.getElementById('vehicleInfo');

        // Function to handle image load error
        function handleImageError(imgElement) {
            console.error('Gambar gagal dimuat');
            vehicleImageContainer.innerHTML = `
                <div class="image-error">
                    <div class="image-error-icon">⚠️</div>
                    <p>Gambar tidak dapat dimuat</p>
                    <small>Periksa path: ${imgElement.src}</small>
                </div>
            `;
        }

        vehicleType.addEventListener('change', function() {
            const selectedValue = this.value;
            
            if (selectedValue) {
                // Create image element
                const img = new Image();
                img.className = 'vehicle-image';
                img.alt = `Golongan ${selectedValue}`;
                
                // Set up error handling
                img.onerror = function() {
                    handleImageError(this);
                };
                
                // Set up success handling
                img.onload = function() {
                    vehicleImageContainer.innerHTML = '';
                    vehicleImageContainer.appendChild(img);
                    console.log('Gambar berhasil dimuat:', img.src);
                };
                
                // Set image source
                img.src = vehicleImages[selectedValue];
                
                // Show loading while image loads
                vehicleImageContainer.innerHTML = `
                    <div class="no-vehicle">
                        <div class="loading" style="display: block;"></div>
                        <p style="margin-top: 20px;">Memuat gambar...</p>
                    </div>
                `;
                
                // Show vehicle info
                vehicleInfoPanel.style.display = 'block';
                document.getElementById('infoGolongan').textContent = `Golongan ${selectedValue}`;
                document.getElementById('infoJenis').textContent = vehicleInfo[selectedValue].name;
                document.getElementById('infoTarif').textContent = vehicleInfo[selectedValue].tarif;
                
                // Debug: log image path
                console.log('Loading image:', vehicleImages[selectedValue]);
            } else {
                // Show placeholder
                vehicleImageContainer.innerHTML = `
                    <div class="no-vehicle">
                        <div class="no-vehicle-icon">🚗</div>
                        <p>Pilih golongan kendaraan</p>
                    </div>
                `;
                vehicleInfoPanel.style.display = 'none';
            }
        });

        // Password strength checker
        const passwordInput = document.getElementById('password');
        const strengthBar = document.getElementById('strengthBar');
        const strengthText = document.getElementById('strengthText');

        passwordInput.addEventListener('input', function(e) {
            const password = e.target.value;
            let strength = 0;
            
            if (password.length >= 8) strength++;
            if (password.length >= 12) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^a-zA-Z0-9]/.test(password)) strength++;
            
            strengthBar.className = 'strength-bar';
            
            if (password.length === 0) {
                strengthBar.style.width = '0';
                strengthText.textContent = '';
            } else if (strength <= 2) {
                strengthBar.className = 'strength-bar strength-weak';
                strengthText.textContent = 'Kata sandi lemah';
                strengthText.style.color = '#ff4757';
            } else if (strength <= 3) {
                strengthBar.className = 'strength-bar strength-medium';
                strengthText.textContent = 'Kata sandi sedang';
                strengthText.style.color = '#ffa502';
            } else {
                strengthBar.className = 'strength-bar strength-strong';
                strengthText.textContent = 'Kata sandi kuat';
                strengthText.style.color = '#26de81';
            }
        });

        // Form validation
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const btn = document.querySelector('.register-btn');
            const btnText = btn.querySelector('.btn-text');
            const loading = btn.querySelector('.loading');
            const errorMsg = document.getElementById('errorMessage');
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            // Reset error
            errorMsg.classList.remove('show');
            errorMsg.textContent = '';
            
            // Validate passwords match
            if (password !== confirmPassword) {
                errorMsg.textContent = 'Kata sandi tidak cocok. Silakan periksa kembali.';
                errorMsg.classList.add('show');
                return;
            }
            
            // Validate password length
            if (password.length < 8) {
                errorMsg.textContent = 'Kata sandi minimal 8 karakter.';
                errorMsg.classList.add('show');
                return;
            }
            
            // Show loading
            btnText.style.display = 'none';
            loading.style.display = 'block';
            
            // Simulate registration process
            setTimeout(() => {
                btnText.style.display = 'block';
                loading.style.display = 'none';
                
                // Success
                alert('Pendaftaran berhasil! Silakan cek email Anda untuk verifikasi.');
                // window.location.href = 'login.html';
            }, 2000);
        });

        // Clear error on input
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('input', () => {
                const errorMsg = document.getElementById('errorMessage');
                if (errorMsg) {
                    errorMsg.classList.remove('show');
                }
            });
        });

        // Debug: Log current path
        console.log('Current base path:', BASE_PATH);
        console.log('Image paths:', vehicleImages);
    </script>
</body>
</html>
