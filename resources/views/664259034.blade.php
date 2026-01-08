<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apisara Samboonruang - Software Engineer Resume</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .header p {
            font-size: 1.2em;
            margin-bottom: 15px;
            opacity: 0.9;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            font-size: 0.9em;
            margin-top: 15px;
        }

        .contact-info span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .content {
            padding: 30px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 1.4em;
            color: #667eea;
            font-weight: 700;
            border-bottom: 3px solid #667eea;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }

        .summary {
            background: #f8f9ff;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #667eea;
            font-style: italic;
        }

        .skill-group {
            margin-bottom: 15px;
        }

        .skill-group strong {
            color: #667eea;
            display: block;
            margin-bottom: 5px;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .skill-tag {
            background: #e8eaf6;
            color: #667eea;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.9em;
            font-weight: 500;
        }

        .experience-item {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .experience-item:last-child {
            border-bottom: none;
        }

        .experience-item h3 {
            color: #333;
            font-size: 1.1em;
            margin-bottom: 5px;
        }

        .experience-item .meta {
            color: #667eea;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 0.95em;
        }

        .experience-item ul {
            margin-left: 20px;
            margin-top: 10px;
        }

        .experience-item li {
            margin-bottom: 6px;
            line-height: 1.5;
        }

        .education-item {
            margin-bottom: 15px;
            padding: 12px;
            background: #f8f9ff;
            border-radius: 6px;
        }

        .education-item h3 {
            color: #667eea;
            margin-bottom: 5px;
        }

        .project-item {
            background: #f8f9ff;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 15px;
            border-left: 4px solid #764ba2;
        }

        .project-item h3 {
            color: #333;
            margin-bottom: 8px;
        }

        .project-meta {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 10px;
        }

        .project-meta span {
            display: inline-block;
            margin-right: 15px;
        }

        .language-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .language-row:last-child {
            border-bottom: none;
        }

        .language-level {
            background: #e8eaf6;
            color: #667eea;
            padding: 3px 10px;
            border-radius: 15px;
            font-size: 0.85em;
            font-weight: 600;
        }

        .instructions-box {
            background: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            gap: 15px;
            align-items: flex-start;
        }

        .instructions-box h3 {
            color: #856404;
            margin-bottom: 10px;
        }

        .instructions-box ol {
            margin-left: 20px;
            color: #333;
        }

        .instructions-box li {
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .instructions-box code {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: 'Courier New', monospace;
            color: #d63384;
            font-weight: 600;
        }

        .instructions-box .cmd-block {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 12px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            font-size: 0.9em;
            margin-top: 10px;
            overflow-x: auto;
        }

        .footer {
            background: #f5f5f5;
            padding: 20px 30px;
            text-align: center;
            color: #666;
            font-size: 0.9em;
            border-top: 1px solid #eee;
        }

        @media (max-width: 600px) {
            .header h1 {
                font-size: 1.8em;
            }

            .contact-info {
                flex-direction: column;
                gap: 10px;
            }

            .content {
                padding: 15px;
            }

            .skills {
                gap: 6px;
            }

            .skill-tag {
                font-size: 0.85em;
            }
        }

        .print-button {
            text-align: center;
            padding: 20px 0;
            margin-bottom: 20px;
        }

        .print-button button {
            background: #667eea;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
            transition: background 0.3s;
        }

        .print-button button:hover {
            background: #764ba2;
        }

        @media print {
            body {
                background: white;
                padding: 0;
            }

            .print-button {
                display: none;
            }

            .container {
                box-shadow: none;
                border-radius: 0;
            }
        }
    </style>
</head>

<body>
    <div class="print-button">
        <button onclick="window.print()">🖨️ พิมพ์ / ดาวน์โหลด PDF</button>
    </div>

    <div class="container">
        <div class="header">
            <h1>Apisara Samboonruang</h1>
            <p>Software Engineer (B.Sc. Software Engineering)</p>
            <div class="contact-info">
                <span>📧 apisara.samboonruang@email.com</span>
                <span>📱 +66 XX-XXX-XXXX</span>
                <span>📍 Bangkok, Thailand</span>
                <span>🔗 <a href="#" style="color: white; text-decoration: underline;">GitHub</a></span>
                <span>💼 <a href="#" style="color: white; text-decoration: underline;">LinkedIn</a></span>
            </div>
        </div>

        <div class="content">
            <!-- Instructions / วิธีรัน -->


            <!-- Professional Summary -->
            <div class="section">
                <h2 class="section-title">📋 สรุปอาชีพ (Professional Summary)</h2>
                <p class="summary">
                    นักพัฒนาซอฟต์แวร์จบการศึกษาสาขา Software Engineering ที่มีประสบการณ์พัฒนาเว็บแอปพลิเคชันสมัยใหม่ด้วย
                    PHP (Laravel) และ JavaScript (Vue.js/React) มีความเชี่ยวชาญในการออกแบบ RESTful API,
                    จัดการฐานข้อมูลเชิงสัมพันธ์, เขียน Unit Test และทำงานร่วมกับทีมในกระบวนการ Agile/Scrum
                    พร้อมที่จะเรียนรู้เทคโนโลยีใหม่และแก้ไขปัญหาระดับระบบ
                </p>
            </div>

            <!-- Core Skills -->
            <div class="section">
                <h2 class="section-title">🛠️ ทักษะหลัก (Core Skills)</h2>

                <div class="skill-group">
                    <strong>ภาษาโปรแกรม (Programming Languages)</strong>
                    <div class="skills">
                        <span class="skill-tag">PHP 7/8</span>
                        <span class="skill-tag">JavaScript (ES6+)</span>
                        <span class="skill-tag">SQL</span>
                        <span class="skill-tag">Python (Basic)</span>
                    </div>
                </div>

                <div class="skill-group">
                    <strong>Framework & Libraries</strong>
                    <div class="skills">
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">Vue.js</span>
                        <span class="skill-tag">React (Basic)</span>
                        <span class="skill-tag">Blade Template</span>
                    </div>
                </div>

                <div class="skill-group">
                    <strong>ฐานข้อมูล (Databases)</strong>
                    <div class="skills">
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">PostgreSQL</span>
                        <span class="skill-tag">Redis</span>
                    </div>
                </div>

                <div class="skill-group">
                    <strong>เครื่องมือและ DevOps (Tools & DevOps)</strong>
                    <div class="skills">
                        <span class="skill-tag">Git</span>
                        <span class="skill-tag">Docker</span>
                        <span class="skill-tag">Composer</span>
                        <span class="skill-tag">NPM</span>
                        <span class="skill-tag">Vite</span>
                        <span class="skill-tag">CI/CD (Basic)</span>
                    </div>
                </div>

                <div class="skill-group">
                    <strong>Web Development</strong>
                    <div class="skills">
                        <span class="skill-tag">HTML5</span>
                        <span class="skill-tag">CSS3</span>
                        <span class="skill-tag">Tailwind CSS</span>
                        <span class="skill-tag">Bootstrap</span>
                        <span class="skill-tag">RESTful API</span>
                        <span class="skill-tag">Unit Testing</span>
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="section">
                <h2 class="section-title">🎓 การศึกษา (Education)</h2>

                <div class="education-item">
                    <h3>Bachelor of Science in Software Engineering</h3>
                    <p><strong>มหาวิทยาลัย [ชื่อมหาวิทยาลัย]</strong></p>
                    <p>ปีที่จบ: [YYYY] | GPA: [X.XX]</p>
                </div>

                <div class="education-item">
                    <h3>โครงการสำคัญในหลักสูตร</h3>
                    <p><strong>ระบบจัดการสมาชิก (Membership Management System)</strong></p>
                    <p>• ออกแบบฐานข้อมูล ERD และสร้างตาราต่าง ๆ<br>
                        • พัฒนา Backend API ด้วย Laravel<br>
                        • สร้าง Dashboard ด้วย Vue.js สำหรับผู้ดูแลระบบ</p>
                </div>
            </div>

            <!-- Work Experience -->
            <div class="section">
                <h2 class="section-title">💼 ประสบการณ์ทำงาน (Work Experience)</h2>

                <div class="experience-item">
                    <h3>Full-stack Developer (ตัวอย่าง)</h3>
                    <div class="meta">บริษัทตัวอย่าง | 06/2023 — 12/2023</div>
                    <ul>
                        <li>พัฒนาโมดูลสมัครสมาชิกและระบบล็อกอิน (Login/Register) ด้วย Laravel พร้อมการเข้ารหัสรหัสผ่าน
                        </li>
                        <li>ออกแบบและสร้าง REST API สำหรับการจัดการผู้ใช้ สิทธิ์การเข้าถึง และข้อมูลโปรไฟล์</li>
                        <li>ปรับปรุงประสิทธิภาพการค้นหา (Query Performance) ด้วยการเพิ่มดัชนี (Index) และปรับคำสั่ง SQL
                        </li>
                        <li>ทำงานร่วมกับทีมออกแบบ QA และใช้ Git Workflow สำหรับการจัดการเวอร์ชัน</li>
                        <li>เขียน Unit Test ด้วย PHPUnit เพื่อทดสอบฟังก์ชันหลัก</li>
                    </ul>
                </div>

                <div class="experience-item">
                    <h3>Freelance Web Developer</h3>
                    <div class="meta">โปรเจคอิสระ | 2022 — Present</div>
                    <ul>
                        <li>พัฒนาเว็บไซต์พอร์ตโฟลิโอและระบบจองบริการให้ลูกค้าต่าง ๆ</li>
                        <li>จัดการฐานข้อมูล ออกแบบ UI/UX ตอบสนอง (Responsive Design)</li>
                        <li>ติดตั้งและปรับใช้บนเซิร์ฟเวอร์ สนับสนุนลูกค้าหลังการส่งมอบ</li>
                    </ul>
                </div>
            </div>

            <!-- Featured Projects -->
            <div class="section">
                <h2 class="section-title">🚀 โครงการเด่น (Featured Projects)</h2>

                <div class="project-item">
                    <h3>66members — ระบบจัดการสมาชิก (Membership Management System)</h3>
                    <div class="project-meta">
                        <span>🔗 Repository: Local Project</span>
                        <span>👤 Role: Full-stack Developer</span>
                    </div>
                    <p><strong>เทคโนโลยี:</strong> Laravel, Vue.js, MySQL, Docker, Vite</p>
                    <p style="margin-top: 10px;"><strong>รายละเอียด:</strong></p>
                    <ul style="margin-left: 20px; margin-top: 8px;">
                        <li>สร้างระบบลงทะเบียนและล็อกอินด้วย Authentication Token</li>
                        <li>พัฒนา Admin Dashboard เพื่อจัดการสมาชิกและสิทธิ์</li>
                        <li>ออกแบบ REST API ที่ปลอดภัยและใช้งานง่าย</li>
                        <li>ใช้ Docker สำหรับ Development Environment ให้สอดคล้อง</li>
                    </ul>
                </div>

                <div class="project-item">
                    <h3>Portfolio Website</h3>
                    <div class="project-meta">
                        <span>🌐 Hosted: Netlify</span>
                        <span>👤 Role: Frontend Developer</span>
                    </div>
                    <p><strong>เทคโนโลยี:</strong> React, Vite, Tailwind CSS, Responsive Design</p>
                    <p style="margin-top: 10px;"><strong>รายละเอียด:</strong></p>
                    <ul style="margin-left: 20px; margin-top: 8px;">
                        <li>พัฒนา UI component ตามหลัก React Hooks</li>
                        <li>ทำให้ Responsive บนทุกอุปกรณ์ (Mobile, Tablet, Desktop)</li>
                        <li>เชื่อมต่อกับ API ภายนอก เพื่อนำข้อมูลมาแสดงผล</li>
                        <li>เพิ่มประสิทธิภาพ (Performance) ด้วยการ Lazy Loading และ Code Splitting</li>
                    </ul>
                </div>
            </div>

            <!-- Certifications -->
            <div class="section">
                <h2 class="section-title">🏆 ใบรับรองและการอบรม (Certifications & Training)</h2>
                <ul style="margin-left: 20px;">
                    <li style="margin-bottom: 10px;"><strong>Laravel Basic / Intermediate Course</strong> — [Coursera /
                        Udemy] (ถ้ามี)</li>
                    <li style="margin-bottom: 10px;"><strong>Web Development Fundamentals</strong> — [Platform] (ถ้ามี)
                    </li>
                    <li><strong>Database Design & SQL Optimization</strong> — [Platform] (ถ้ามี)</li>
                </ul>
            </div>

            <!-- Languages -->
            <div class="section">
                <h2 class="section-title">🗣️ ภาษา (Languages)</h2>

                <div class="language-row">
                    <span><strong>ไทย (Thai)</strong></span>
                    <span class="language-level">ภาษาแม่ (Native)</span>
                </div>

                <div class="language-row">
                    <span><strong>อังกฤษ (English)</strong></span>
                    <span class="language-level">Professional Working Proficiency</span>
                </div>
            </div>

            <!-- Activities & Volunteer Work -->
            <div class="section">
                <h2 class="section-title">🤝 กิจกรรมและอาสาสมัคร (Activities & Volunteer Work)</h2>
                <ul style="margin-left: 20px;">
                    <li style="margin-bottom: 10px;">เข้าร่วม Hackathon / บ่มเพาะสตาร์ทอัป (ถ้ามี)</li>
                    <li style="margin-bottom: 10px;">สมาชิกชมรมคอมพิวเตอร์และการเขียนโปรแกรม มหาวิทยาลัย (ถ้ามี)</li>
                    <li>อาสาสมัครพัฒนาเว็บไซต์ชุมชน / องค์กร (ถ้ามี)</li>
                </ul>
            </div>
        </div>

        <div class="footer">
            <p>📄 Apisara Samboonruang's Resume — Software Engineer | Bangkok, Thailand</p>
            <p style="margin-top: 10px; font-size: 0.85em; color: #999;">
                ✉️ อีเมล | 📱 โทรศัพท์ | 🔗 GitHub | 💼 LinkedIn — สอบถามข้อมูลอ้างอิงและการติดต่อ
            </p>
        </div>
    </div>
</body>

</html>