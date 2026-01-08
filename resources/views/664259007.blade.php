<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume — ธนกฤต จันทร์หลง</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts (vite or fallback styles) -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Minimal fallback styles so page looks acceptable without building assets */
            body {
                font-family: Instrument Sans, ui-sans-serif, system-ui, sans-serif;
                margin: 0;
                background: #F8FAFB;
                color: #111
            }

            .container {
                max-width: 1100px;
                margin: 32px auto;
                padding: 20px
            }

            .card {
                background: #fff;
                border-radius: 8px;
                padding: 24px;
                box-shadow: 0 6px 18px rgba(20, 20, 30, 0.06)
            }

            h1 {
                margin: 0 0 6px;
                font-size: 28px
            }

            h2 {
                margin: 18px 0 8px;
                font-size: 16px
            }

            p,
            li {
                color: #444;
                line-height: 1.45
            }

            .muted {
                color: #717171;
                font-size: 13px
            }

            .grid {
                display: grid;
                grid-template-columns: 1fr;
                gap: 20px
            }

            @media(min-width:1024px) {
                .grid {
                    grid-template-columns: 1fr 360px
                }
            }
        </style>
    @endif
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18]">
    <div class="container">
        <div class="card grid">
            <section>
                <header class="mb-4">
                    <h1 class="font-medium">ธนกฤต จันทร์หลง</h1>
                    <p class="muted">นักศึกษาสาขาวิศวกรรมซอฟต์แวร์</p>
                    <p class="muted">Student ID: 664259007</p>
                </header>

                <div>
                    <h2>สรุปสั้น ๆ</h2>
                    <p>นักศึกษาสาขาวิศวกรรมซอฟต์แวร์ มีพื้นฐานด้านการพัฒนาเว็บและการออกแบบระบบ สนใจงานพัฒนาซอฟต์แวร์ด้าน
                        backend และ full‑stack พร้อมเรียนรู้เทคโนโลยีใหม่ ๆ และร่วมงานเป็นทีม</p>
                </div>

                <div>
                    <h2>การศึกษา</h2>
                    <ul>
                        <li><strong>ปริญญาตรี สาขาวิศวกรรมซอฟต์แวร์</strong> — (มหาวิทยาลัย / สถาบัน) <span
                                class="muted">(ปีที่เข้า – ปัจจุบัน)</span></li>
                    </ul>
                </div>

                <div>
                    <h2>ทักษะ</h2>
                    <ul>
                        <li>ภาษาโปรแกรม: PHP, JavaScript, Python</li>
                        <li>Framework / Tools: Laravel, Vue.js / React (พื้นฐาน), Git, MySQL</li>
                        <li>อื่น ๆ: REST API, SQL, TDD (เริ่มต้น)</li>
                    </ul>
                </div>

                <div>
                    <h2>ผลงาน / โครงการ</h2>
                    <ul>
                        <li><strong>โปรเจกต์: ระบบจัดการคลาสเรียน</strong> — พัฒนา backend ด้วย Laravel,
                            จัดการผู้ใช้และตารางเรียน</li>
                        <li><strong>โปรเจกต์: เว็บพอร์ตโฟลิโอ</strong> — หน้าเว็บส่วนตัว แสดงผลงานและประวัติ</li>
                    </ul>
                </div>

                <div>
                    <h2>กิจกรรมและรางวัล</h2>
                    <ul>
                        <li>เข้าร่วมโครงการ Hackathon ของมหาวิทยาลัย</li>
                        <li>เข้าร่วมชมรมพัฒนาซอฟต์แวร์</li>
                    </ul>
                </div>

                <div>
                    <h2>ภาษา</h2>
                    <ul>
                        <li>ไทย (เจ้าของภาษา)</li>
                        <li>อังกฤษ (ระดับดี – อ่านเอกสารเทคนิคได้)</li>
                    </ul>
                </div>
            </section>

            <aside class="p-4 bg-[#fff2f2] dark:bg-[#1D0002] rounded-lg">
                <div class="mb-4">
                    <h2>ข้อมูลติดต่อ</h2>
                    <p class="muted">อีเมล: <a href="mailto:your.email@example.com">your.email@example.com</a></p>
                    <p class="muted">โทร: <a href="tel:+66xxxxxxxxx">+66 xxxxxxxx</a></p>
                    <p class="muted">GitHub / LinkedIn: <a href="#">(ลิงก์)</a></p>
                </div>

                <div class="mb-4">
                    <h2>เป้าหมาย</h2>
                    <p>มุ่งพัฒนาทักษะด้านระบบ backend และสถาปัตยกรรมซอฟต์แวร์ เพื่อร่วมทีมพัฒนาโปรดักต์ที่มีผู้ใช้จริง
                    </p>
                </div>

                <div>
                    <h2>ความสนใจ</h2>
                    <p class="muted">ระบบกระจาย, DevOps เบื้องต้น, การเรียนของเครื่อง, การออกแบบ API</p>
                </div>
            </aside>
        </div>

        <p class="muted mt-4 text-sm">แก้ไขข้อมูลได้ที่ <code>resources/views/664259007.blade.php</code></p>
    </div>
</body>

</html>