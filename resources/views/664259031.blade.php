<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume — นายอลงกร ณัฐพูลวัฒน์</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,600" rel="stylesheet" />

    <!-- Use Vite if available for Tailwind / app styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @else
        <style>
            /* Minimal fallback styles (keeps it "เท่") */
            :root {
                --bg: #0b1020;
                --panel: #0f1724;
                --muted: #94a3b8;
                --accent: #7c3aed
            }

            * {
                box-sizing: border-box
            }

            html,
            body {
                height: 100%;
                margin: 0;
                font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial
            }

            body {
                background: linear-gradient(180deg, #070812 0%, #0b0f1a 100%);
                color: #e6eef8;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 28px
            }

            .container {
                max-width: 960px;
                width: 100%;
                background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
                border: 1px solid rgba(255, 255, 255, 0.04);
                border-radius: 12px;
                padding: 28px;
                display: grid;
                grid-template-columns: 1fr 320px;
                gap: 24px
            }

            .header {
                display: flex;
                align-items: center;
                gap: 16px
            }

            .avatar {
                width: 96px;
                height: 96px;
                border-radius: 12px;
                background: linear-gradient(135deg, var(--accent), #2dd4bf);
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 700;
                color: #051029
            }

            h1 {
                margin: 0;
                font-size: 20px
            }

            .sub {
                color: var(--muted);
                font-size: 13px;
                margin-top: 4px
            }

            .section {
                background: rgba(255, 255, 255, 0.02);
                padding: 14px;
                border-radius: 10px
            }

            .skills {
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
                margin-top: 8px
            }

            .tag {
                background: rgba(255, 255, 255, 0.03);
                padding: 6px 10px;
                border-radius: 999px;
                font-size: 13px;
                color: #cfe7ff
            }

            .muted {
                color: var(--muted);
                font-size: 13px
            }

            .contact {
                display: flex;
                flex-direction: column;
                gap: 8px
            }

            .project {
                margin-bottom: 12px
            }

            @media (max-width:900px) {
                .container {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    @endif
</head>

<body>
    <main class="container" role="main">
        <section>
            <div class="header">
                <div class="avatar">อล</div>
                <div>
                    <h1>นายอลงกร ณัฐพูลวัฒน์</h1>
                    <div class="sub">นักศึกษาสาขา วิศวกรรมซอฟต์แวร์</div>
                    <div class="muted" style="margin-top:8px">สงวนลิขสิทธิ์ &middot; Resume สั้น ๆ &middot; Responsive
                    </div>
                </div>
            </div>

            <div style="height:12px"></div>

            <div class="section">
                <h3 style="margin:0 0 8px 0">ประวัติย่อ</h3>
                <p class="muted" style="margin:0">ผมเป็นนักศึกษาสาขาวิศวกรรมซอฟต์แวร์ สนใจพัฒนาเว็บแอปพลิเคชัน
                    และการออกแบบระบบที่ใช้งานได้จริง มีพื้นฐานใน PHP (Laravel), JavaScript, และการทำงานร่วมกับฐานข้อมูล
                </p>
            </div>

            <div style="height:12px"></div>

            <div class="section">
                <h3 style="margin:0 0 8px 0">โปรเจ็กต์เด่น</h3>
                <div class="project">
                    <strong>ระบบจัดการกิจกรรมนักศึกษา</strong>
                    <div class="muted">Laravel, MySQL, Vue.js —
                        ระบบลงทะเบียนและติดตามกิจกรรมที่ออกแบบมาสำหรับมหาวิทยาลัย</div>
                </div>
                <div class="project">
                    <strong>Portfolio เว็บไซต์</strong>
                    <div class="muted">HTML/CSS, Tailwind, Vite — เว็บไซต์ส่วนตัวที่แสดงผลงานพร้อมหน้าแนะนำและติดต่อ
                    </div>
                </div>
            </div>

            <div style="height:12px"></div>

            <div class="section">
                <h3 style="margin:0 0 8px 0">ทักษะ</h3>
                <div class="skills">
                    <span class="tag">Laravel</span>
                    <span class="tag">PHP</span>
                    <span class="tag">JavaScript</span>
                    <span class="tag">Tailwind CSS</span>
                    <span class="tag">MySQL</span>
                    <span class="tag">Git</span>
                    <span class="tag">REST API</span>
                </div>
            </div>

            <div style="height:12px"></div>

            <div class="section">
                <h3 style="margin:0 0 8px 0">การศึกษา</h3>
                <div class="muted">ปัจจุบัน: นักศึกษาสาขาวิศวกรรมซอฟต์แวร์ — (มหาวิทยาลัย / สถาบัน)</div>
            </div>
        </section>

        <aside>
            <div class="section">
                <h4 style="margin:0 0 8px 0">ข้อมูลติดต่อ</h4>
                <div class="contact">
                    <div class="muted">อีเมล: <strong>example@email.com</strong></div>
                    <div class="muted">โทร: <strong>+66 8x-xxx-xxxx</strong></div>
                    <div class="muted">LinkedIn: <strong>linkedin.com/in/yourprofile</strong></div>
                    <div class="muted">GitHub: <strong>github.com/yourusername</strong></div>
                </div>
            </div>

            <div style="height:12px"></div>

            <div class="section">
                <h4 style="margin:0 0 8px 0">ความสนใจ</h4>
                <div class="muted">Web Development, DevOps, System Design, UX</div>
            </div>

            <div style="height:12px"></div>

            <div class="section">
                <h4 style="margin:0 0 8px 0">ภาษา</h4>
                <div class="muted">ไทย (Native), อังกฤษ (สื่อสารได้)</div>
            </div>

            <div style="height:12px"></div>

            <div class="section" style="text-align:center">
                <small class="muted">ดาวน์โหลด PDF / พิมพ์ได้ง่าย</small>
            </div>
        </aside>
    </main>
</body>

</html>