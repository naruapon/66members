"Set-Content -Path 'c:\66members\resources\views\664259013.blade.php' -Value @'
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume — Ratchanon Leechareon</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
            background: #f8fafc;
            color: #0f172a;
            margin: 0;
            padding: 24px;
        }

        .container {
            max-width: 900px;
            margin: 24px auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(15, 23, 42, .06);
            overflow: hidden
        }

        .header {
            display: flex;
            gap: 16px;
            align-items: center;
            padding: 28px;
            border-bottom: 1px solid #e6edf5
        }

        .avatar {
            width: 96px;
            height: 96px;
            border-radius: 8px;
            background: linear-gradient(135deg, #60a5fa, #7c3aed);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 22px
        }

        .name {
            font-size: 20px;
            font-weight: 700
        }

        .title {
            color: #475569;
            margin-top: 4px
        }

        .section {
            padding: 20px 28px;
            border-bottom: 1px dashed #edf2f7
        }

        .section h3 {
            margin: 0 0 12px 0;
            font-size: 14px;
            color: #0f172a
        }

        .meta {
            color: #475569;
            font-size: 14px
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px
        }

        .chip {
            background: #eef2ff;
            color: #3730a3;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 13px
        }

        .two-cols {
            display: grid;
            grid-template-columns: 1fr 320px;
            gap: 24px
        }

        .project {
            margin-bottom: 12px
        }

        @media (max-width:820px) {
            .two-cols {
                grid-template-columns: 1fr
            }

            .header {
                flex-direction: row
            }

            .avatar {
                width: 72px;
                height: 72px
            }
        }
    </style>
</head>

<body>
    <div class="container" role="main">
        <div class="header">
            <div class="avatar">RL</div>
            <div>
                <div class="name">ราชนอน ลี้เจริญ (Ratchanon Leechareon)</div>
                <div class="title">นักศึกษาสาขาวิศวกรรมซอฟต์แวร์</div>
                <div class="meta">อีเมล: <a href="mailto:example@example.com">example@example.com</a> · โทร: 0X-XXX-XXXX
                    · GitHub: <a href="#">github.com/username</a></div>
            </div>
        </div>

        <div class="section two-cols">
            <div>
                <h3>ประวัติการศึกษา</h3>
                <p class="meta"><strong>ปริญญาตรี</strong> วิศวกรรมซอฟต์แวร์ — มหาวิทยาลัยตัวอย่าง (2022 — ปัจจุบัน)</p>

                <h3 style="margin-top:20px">โครงการเด่น</h3>
                <div class="project">
                    <div style="font-weight:600">ระบบจัดการงาน (Web Application)</div>
                    <div class="meta">พัฒนาโดยใช้ Laravel, Vue.js — ออกแบบฐานข้อมูลและ API, เขียน unit tests</div>
                </div>
                <div class="project">
                    <div style="font-weight:600">แอปมือถือสำหรับจองเรียนพิเศษ</div>
                    <div class="meta">React Native, Firebase — จัดการ auth และ push notifications</div>
                </div>

                <h3 style="margin-top:20px">ประสบการณ์</h3>
                <div class="project">
                    <div style="font-weight:600">นักศึกษาฝึกงาน — บริษัทตัวอย่าง (มิ.ย. 2024 - ส.ค. 2024)</div>
                    <div class="meta">ร่วมพัฒนาฟีเจอร์ backend, ปรับปรุงประสิทธิภาพ API, ทำงานร่วมกับทีมแบบ Agile</div>
                </div>

                <h3 style="margin-top:20px">ความสามารถพิเศษ</h3>
                <ul class="meta" style="padding-left:18px;">
                    <li>ออกแบบและพัฒนาซอฟต์แวร์ด้วย MVC / RESTful API</li>
                    <li>เขียนภาษา PHP, JavaScript (Node, Vue, React)</li>
                    <li>ฐานข้อมูล MySQL, PostgreSQL และ Git workflow</li>
                </ul>
            </div>
            <aside style="padding:0 10px">
                <h3>ทักษะ</h3>
                <div class="skills" style="margin-bottom:14px">
                    <span class="chip">PHP</span>
                    <span class="chip">Laravel</span>
                    <span class="chip">JavaScript</span>
                    <span class="chip">Vue.js</span>
                    <span class="chip">React</span>
                    <span class="chip">SQL</span>
                    <span class="chip">Git</span>
                    <span class="chip">Docker</span>
                </div>

                <h3>ภาษา</h3>
                <div class="meta">ไทย (เจ้าของภาษา) · อังกฤษ (ระดับดี)</div>

                <h3 style="margin-top:16px">รางวัล/กิจกรรม</h3>
                <ul class="meta" style="padding-left:18px;">
                    <li>ร่วมทีมแข่งขัน Hackathon มหาวิทยาลัย — ชนะรองชนะเลิศ</li>
                    <li>สมาชิกชมรมโปรแกรมมิ่ง</li>
                </ul>
            </aside>
        </div>

        <div class="section" style="text-align:center">
            <div class="meta">ต้องการปรับรายละเอียดเพิ่มเติม (เช่น อีเมล, โปรเจกต์, ลิงก์) แจ้งมาได้เลยครับ</div>
        </div>
    </div>
</body>

</html>
'@ -Encoding UTF8"