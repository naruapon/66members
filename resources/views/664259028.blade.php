<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เรซูเม่ — Siwakorn Kleebmek</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
            color: #111;
            line-height: 1.4;
            margin: 0;
            padding: 24px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 24px;
            border: 1px solid #eee
        }

        h1 {
            margin: 0;
            font-size: 26px
        }

        h2 {
            margin: 12px 0 6px;
            font-size: 16px;
            color: #333
        }

        .muted {
            color: #666;
            font-size: 14px
        }

        .section {
            margin: 18px 0
        }

        .row {
            display: flex;
            gap: 12px
        }

        .col {
            flex: 1
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px
        }

        .skill {
            background: #f1f1f1;
            padding: 6px 8px;
            border-radius: 6px;
            font-size: 13px
        }

        .meta a {
            color: #1a73e8;
            text-decoration: none
        }

        .actions {
            margin-top: 14px
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 6px;
            background: #1a73e8;
            color: #fff;
            text-decoration: none;
            font-size: 14px
        }

        @media print {
            .actions {
                display: none
            }
        }

        pre {
            white-space: pre-wrap;
            background: #fafafa;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #eee
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="row">
            <div class="col">
                <h1>Siwakorn Kleebmek</h1>
                <div class="muted">Major: Software Engineering</div>
                <div class="meta" style="margin-top:8px">
                    <div>โทร: <strong>[เบอร์โทรศัพท์]</strong> • อีเมล: <strong>[email@example.com]</strong></div>
                    <div>GitHub: <a href="https://github.com/siwakorn" target="_blank">github.com/siwakorn</a> •
                        LinkedIn: <a href="https://linkedin.com/in/siwakorn"
                            target="_blank">linkedin.com/in/siwakorn</a></div>
                </div>
            </div>
            <div style="width:200px;text-align:right;align-self:flex-start">
                <div class="actions">
                    <a class="btn" href="{{ route('resume.show', 'th') }}">ดูหน้า</a>
                    <a class="btn" href="{{ route('resume.download.html', ['lang' => 'th']) }}"
                        style="background:#0b8043">ดาวน์โหลด HTML</a>
                    <a class="btn" href="{{ route('resume.download.markdown', ['lang' => 'th']) }}"
                        style="background:#6c757d">ดาวน์โหลด MD</a>
                    <a class="btn" href="{{ route('resume.download.pdf', ['lang' => 'th']) }}"
                        style="background:#c0392b">ดาวน์โหลด PDF</a>
                </div>
            </div>
        </header>

        <section class="section">
            <h2>โปรไฟล์สั้น ๆ</h2>
            <p>วิศวกรซอฟต์แวร์ที่มีพื้นฐานด้านการพัฒนาเว็บแอป ทั้ง frontend และ backend ใช้เทคโนโลยีเช่น JavaScript, PHP
                (Laravel), MySQL, และ Git ทำงานร่วมกับทีมแบบ Agile ได้ดี และมุ่งเน้นการเขียนโค้ดที่อ่านง่าย ทดสอบได้
                และยืดหยุ่นต่อการขยาย</p>
        </section>

        <section class="section">
            <h2>ทักษะหลัก</h2>
            <div class="skills">
                <div class="skill">JavaScript</div>
                <div class="skill">PHP (Laravel)</div>
                <div class="skill">TypeScript</div>
                <div class="skill">Vue.js / React</div>
                <div class="skill">MySQL / PostgreSQL</div>
                <div class="skill">RESTful API</div>
                <div class="skill">Git</div>
                <div class="skill">Docker</div>
            </div>
        </section>

        <section class="section">
            <h2>ประสบการณ์ (ตัวอย่าง)</h2>
            <div>
                <strong>Junior Software Engineer</strong> — <span class="muted">[ชื่อบริษัท]</span>
                <ul>
                    <li>พัฒนาโมดูลการจัดการผู้ใช้ด้วย Laravel และ MySQL</li>
                    <li>ออกแบบและสร้าง REST API สำหรับ frontend และทดสอบด้วย unit tests</li>
                    <li>ปรับปรุงประสิทธิภาพ query ลดเวลาการโหลดหน้าได้ ~30%</li>
                </ul>
            </div>

            <div style="margin-top:8px">
                <strong>Project: Web Application (University / Personal)</strong>
                <ul>
                    <li>สร้างระบบสมาชิกและระบบสั่งซื้อด้วย Vue.js + Laravel</li>
                    <li>ตั้งค่า Git workflow และ CI เบื้องต้นสำหรับการทดสอบอัตโนมัติ</li>
                </ul>
            </div>
        </section>

        <section class="section">
            <h2>โครงการเด่น</h2>
            <div>
                <strong>ระบบจัดการสมาชิก</strong> — Laravel, Vue.js, MySQL
                <div class="muted">ฟีเจอร์: ลงทะเบียน, ยืนยันอีเมล, กำหนดสิทธิ์, export รายงาน</div>
            </div>
            <div style="margin-top:6px">
                <strong>ระบบจองนัดออนไลน์</strong> — Node.js, Express, PostgreSQL, React
                <div class="muted">ฟีเจอร์: ตารางเวลา, แจ้งเตือนอีเมล, ยืนยันการจองแบบเรียลไทม์</div>
            </div>
        </section>

        <section class="section">
            <h2>การศึกษา</h2>
            <div>
                <strong>ปริญญาตรี สาขา Software Engineering</strong> — <span class="muted">[ชื่อมหาวิทยาลัย] •
                    [ปีจบ]</span>
            </div>
        </section>

        <section class="section">
            <h2>ใบรับรอง / คอร์ส</h2>
            <ul>
                <li>[ชื่อใบรับรอง] — [ปี]</li>
                <li>คอร์ส: Data Structures, Algorithms, Web Development</li>
            </ul>
        </section>

        <hr>
        <div class="muted" style="font-size:13px">แก้ไขข้อมูลได้ที่ไฟล์:
            <code>resources/views/664259028.blade.php</code> • ดู English version: <a
                href="{{ route('resume.show', 'en') }}">Resume (EN)</a>
        </div>
    </div>
</body>

</html>