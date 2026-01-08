<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume - ธันวา อาจคงหาญ</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Noto Sans", "Helvetica Neue", Arial;
            background: #f6f7fb;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            padding: 28px;
            border-radius: 8px;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .name {
            font-size: 28px;
            font-weight: 700;
        }

        .role {
            color: #666;
        }

        .contact {
            text-align: right;
            font-size: 14px;
            color: #555;
        }

        .section {
            margin-top: 22px;
        }

        .section h3 {
            margin-bottom: 10px;
            font-size: 16px;
            color: #0b63a8;
        }

        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }

        ul {
            margin: 0;
            padding-left: 18px;
        }

        .skill {
            display: inline-block;
            background: #eef5ff;
            color: #064b7b;
            padding: 6px 10px;
            border-radius: 6px;
            margin: 6px 6px 0 0;
            font-size: 13px;
        }

        footer {
            margin-top: 26px;
            color: #777;
            font-size: 13px;
        }

        @media (max-width:640px) {
            .two-col {
                grid-template-columns: 1fr;
            }

            .contact {
                text-align: left;
                margin-top: 8px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div>
                <div class="name">ธันวา อาจคงหาญ</div>
                <div class="role">นักศึกษาสาขาวิศวกรรมซอฟต์แวร์</div>
            </div>
            <div class="contact">
                <div>โทร: 081-234-5678</div>
                <div>Email: thanwa@example.com</div>
                <div>GitHub: github.com/thanwa</div>
            </div>
        </header>

        <div class="section">
            <h3>สรุปสั้น ๆ</h3>
            <p>นักศึกษาสาขาวิศวกรรมซอฟต์แวร์ มีความสนใจในการพัฒนาเว็บและระบบซอฟต์แวร์ ใช้ภาษาโปรแกรมหลายภาษา
                มีประสบการณ์ทำโปรเจกต์ทั้งด้าน frontend และ backend พร้อมเรียนรู้เทคโนโลยีใหม่ ๆ อย่างรวดเร็ว</p>
        </div>

        <div class="section two-col">
            <div>
                <h3>การศึกษา</h3>
                <p><strong>ปริญญาตรี วิศวกรรมซอฟต์แวร์</strong><br>
                    มหาวิทยาลัยตัวอย่าง — คาดว่าจะจบปี 2569</p>

                <h3>ทักษะ</h3>
                <div>
                    <span class="skill">PHP / Laravel</span>
                    <span class="skill">JavaScript / Vue / React</span>
                    <span class="skill">Node.js</span>
                    <span class="skill">Python</span>
                    <span class="skill">MySQL / PostgreSQL</span>
                    <span class="skill">Git</span>
                    <span class="skill">Docker (พื้นฐาน)</span>
                </div>

                <h3 class="section">ภาษา</h3>
                <ul>
                    <li>ภาษาไทย — ระดับเจ้าของภาษา</li>
                    <li>ภาษาอังกฤษ — ระดับกลาง (สามารถอ่านเอกสารทางเทคนิคได้)</li>
                </ul>
            </div>

            <div>
                <h3>ประสบการณ์ / โครงการเด่น</h3>
                <ul>
                    <li><strong>ระบบจัดการสมาชิก</strong> — พัฒนาเว็บแอปด้วย Laravel, Vue.js
                        สำหรับจัดการข้อมูลสมาชิกและรายงาน</li>
                    <li><strong>แอปจองห้องเรียน</strong> — ทำเป็นโปรเจกต์ในชั้นเรียน ใช้ Node.js, Express และ MongoDB
                    </li>
                    <li><strong>เว็บพอร์ตโฟลิโอส่วนตัว</strong> — แสดงโปรเจกต์และโปรไฟล์การศึกษา (GitHub:
                        github.com/thanwa)</li>
                </ul>

                <h3 class="section">กิจกรรม / รางวัล</h3>
                <ul>
                    <li>เข้าร่วม Hackathon ในมหาวิทยาลัย (ทีมได้รางวัลรองชนะเลิศ)</li>
                    <li>อาสาสอนโปรแกรมมิงพื้นฐานให้กับนักเรียนชั้นมัธยมปลาย</li>
                </ul>

            </div>
        </div>

        <div class="section">
            <h3>ความสนใจ</h3>
            <p>พัฒนาเว็บแอป, สถาปัตยกรรมซอฟต์แวร์, ปัญญาประดิษฐ์ และระบบที่ขยายได้</p>
        </div>

        <footer>
            อัปเดตล่าสุด: มกราคม 2026
        </footer>
    </div>
</body>

</html>
