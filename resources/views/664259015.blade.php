<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - วิศรุต แซ่เล้า</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Instrument Sans', sans-serif;
                background-color: #FDFDFC;
                color: #1b1b18;
                line-height: 1.6;
            }

            .dark {
                background-color: #0a0a0a;
                color: #EDEDEC;
            }

            .container {
                max-width: 900px;
                margin: 0 auto;
                padding: 40px 20px;
            }

            header {
                background: white;
                padding: 40px;
                border-radius: 8px;
                margin-bottom: 30px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            }

            header h1 {
                font-size: 28px;
                margin-bottom: 8px;
            }

            header p {
                color: #706f6c;
                margin-bottom: 4px;
            }

            .section {
                background: white;
                padding: 30px;
                border-radius: 8px;
                margin-bottom: 20px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            }

            .section h2 {
                font-size: 18px;
                margin-bottom: 20px;
                color: #1b1b18;
                border-bottom: 2px solid #f53003;
                padding-bottom: 10px;
            }

            .entry {
                margin-bottom: 20px;
            }

            .entry-title {
                font-weight: 600;
                font-size: 16px;
                color: #1b1b18;
            }

            .entry-subtitle {
                color: #706f6c;
                font-size: 14px;
                margin: 5px 0;
            }

            .entry-date {
                color: #999;
                font-size: 13px;
            }

            .entry-description {
                color: #666;
                font-size: 14px;
                line-height: 1.6;
                margin-top: 8px;
            }

            .skills-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                gap: 12px;
            }

            .skill-tag {
                background: #f5f5f5;
                padding: 10px 15px;
                border-radius: 6px;
                text-align: center;
                font-size: 13px;
            }

            .contact-info {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                font-size: 13px;
                margin-top: 15px;
            }

            .contact-info span {
                display: flex;
                align-items: center;
            }

            footer {
                text-align: center;
                padding: 20px;
                color: #999;
                font-size: 12px;
            }
        </style>
    @endif
</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <header>
            <h1>วิศรุต แซ่เล้า</h1>
            <p>Wisarut Saelao</p>
            <p>นักศึกษาวิศวกรรมซอฟต์แวร์ | Software Engineering Student</p>
            <div class="contact-info">
                <span>📧 wisarut.saelao@student.edu</span>
                <span>📱 +66 XX-XXX-XXXX</span>
                <span>📍 Thailand</span>
                <span>💼 <a href="https://linkedin.com"
                        style="color: #f53003; text-decoration: none;">LinkedIn</a></span>
                <span>🐙 <a href="https://github.com" style="color: #f53003; text-decoration: none;">GitHub</a></span>
            </div>
        </header>

        <!-- About Section -->
        <div class="section">
            <h2>ข้อมูลส่วนบุคคล | About</h2>
            <p>นักศึกษาวิศวกรรมซอฟต์แวร์ที่มีความสนใจในการพัฒนาแอปพลิเคชัน web และมือถือ
                มีพื้นฐานด้านการเขียนโปรแกรมที่มั่นคง และความปรารถนาในการเรียนรู้เทคโนโลยีใหม่ ๆ ต่อไป
                เป้าหมายคือการเป็นวิศวกรซอฟต์แวร์ที่สามารถสร้างสรรค์โซลูชันด้านเทคโนโลยีที่เป็นประโยชน์ต่อสังคม</p>
        </div>

        <!-- Education Section -->
        <div class="section">
            <h2>การศึกษา | Education</h2>
            <div class="entry">
                <div class="entry-title">วิศวกรรมศาสตรบัณฑิต สาขาวิศวกรรมซอฟต์แวร์</div>
                <div class="entry-subtitle">Bachelor of Software Engineering</div>
                <div class="entry-date">มหาวิทยาลัย... | University... | 2022 - Present</div>
                <div class="entry-description">
                    • GPA: 3.50 / 4.00<br>
                    • ศึกษากิจการพื้นฐานของการเขียนโปรแกรม และหลักการออกแบบซอฟต์แวร์<br>
                    • วิชาเอก: Web Development, Database Design, Mobile Application Development
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="section">
            <h2>ทักษะ | Skills</h2>
            <div class="skills-grid">
                <div class="skill-tag">JavaScript</div>
                <div class="skill-tag">PHP / Laravel</div>
                <div class="skill-tag">React</div>
                <div class="skill-tag">Vue.js</div>
                <div class="skill-tag">HTML / CSS</div>
                <div class="skill-tag">MySQL</div>
                <div class="skill-tag">Git</div>
                <div class="skill-tag">RESTful APIs</div>
                <div class="skill-tag">OOP</div>
                <div class="skill-tag">Responsive Design</div>
                <div class="skill-tag">Python</div>
                <div class="skill-tag">English</div>
            </div>
        </div>

        <!-- Experience Section -->
        <div class="section">
            <h2>ประสบการณ์ | Experience</h2>
            <div class="entry">
                <div class="entry-title">Web Developer Intern</div>
                <div class="entry-subtitle">บริษัท... | Company...</div>
                <div class="entry-date">มิถุนายน 2023 - สิงหาคม 2023 | June 2023 - August 2023</div>
                <div class="entry-description">
                    • ร่วมพัฒนาเว็บแอปพลิเคชันโดยใช้ Laravel และ Vue.js<br>
                    • ออกแบบและจัดการฐานข้อมูล MySQL<br>
                    • ทดสอบและแก้ไขข้อผิดพลาดในโครงการ<br>
                    • ร่วมมือกับทีมในการแก้ไขปัญหาและการปรับปรุงระบบ
                </div>
            </div>
        </div>

        <!-- Projects Section -->
        <div class="section">
            <h2>โครงการ | Projects</h2>
            <div class="entry">
                <div class="entry-title">ระบบจัดการร้านค้าออนไลน์ | E-Commerce Management System</div>
                <div class="entry-date">2023</div>
                <div class="entry-description">
                    เพลตฟอร์มการเลือกซื้อสินค้าออนไลน์ที่สมบูรณ์ พัฒนาด้วย Laravel, Vue.js และ MySQL<br>
                    • ระบบจัดการสินค้า ลูกค้า และคำสั่งซื้อ<br>
                    • ระบบชำระเงิน (Payment Gateway Integration)<br>
                    • แดชบอร์ดสำหรับการวิเคราะห์ข้อมูลการขาย
                </div>
            </div>
            <div class="entry">
                <div class="entry-title">แอปพลิเคชันจดบันทึกการศึกษา | Study Notes Application</div>
                <div class="entry-date">2022</div>
                <div class="entry-description">
                    แอปพลิเคชันสำหรับจดบันทึกและจัดระเบียบหลักสูตรการศึกษา พัฒนาด้วย React<br>
                    • อินเทอร์เฟซเข้าใจง่าย และระบบค้นหาที่มีประสิทธิภาพ<br>
                    • ระบบแท็กสำหรับการจัดเรียงหลักสูตร<br>
                    • การสำรองข้อมูลแบบ Cloud
                </div>
            </div>
        </div>

        <!-- Certifications Section -->
        <div class="section">
            <h2>ใบรับรอง | Certifications</h2>
            <div class="entry">
                <div class="entry-title">Web Development Bootcamp Certificate</div>
                <div class="entry-date">2023</div>
                <div class="entry-description">หลักสูตรการพัฒนาเว็บที่ครอบคลุม HTML, CSS, JavaScript และ Backend
                    Development</div>
            </div>
        </div>

        <!-- Languages Section -->
        <div class="section">
            <h2>ภาษา | Languages</h2>
            <div class="entry">
                <div class="entry-title">ไทย | Thai - ภาษาแม่ | Native</div>
            </div>
            <div class="entry">
                <div class="entry-title">อังกฤษ | English - ระดับกลางขึ้นไป | Intermediate-Advanced</div>
            </div>
        </div>

        <!-- Interests Section -->
        <div class="section">
            <h2>ความสนใจ | Interests</h2>
            <div class="skills-grid">
                <div class="skill-tag">Web Development</div>
                <div class="skill-tag">Mobile Apps</div>
                <div class="skill-tag">AI & Machine Learning</div>
                <div class="skill-tag">Cloud Computing</div>
                <div class="skill-tag">DevOps</div>
                <div class="skill-tag">Open Source</div>
            </div>
        </div>

        <footer>
            <p>📄 Resume - วิศรุต แซ่เล้า | Last Updated: 2024</p>
        </footer>
    </div>
</body>

</html>