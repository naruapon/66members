<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Chutipong Suebangpra - Resume</title>

<style>
:root {
  --primary: #1f2937;
  --secondary: #374151;
  --accent: #2563eb;
  --bg: #f9fafb;
}

* {
  box-sizing: border-box;
}

body {
  font-family: "Segoe UI", Arial, sans-serif;
  background: var(--bg);
  margin: 0;
  padding: 20px;
  color: var(--secondary);
}

.container {
  max-width: 900px;
  margin: auto;
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

header {
  text-align: center;
  margin-bottom: 30px;
}

header h1 {
  margin: 0;
  font-size: 2.4rem;
  color: var(--primary);
}

header p {
  margin: 6px 0;
  font-size: 0.95rem;
}

.section {
  margin-bottom: 30px;
}

.section h2 {
  font-size: 1.4rem;
  border-left: 5px solid var(--accent);
  padding-left: 10px;
  color: var(--primary);
  margin-bottom: 15px;
}

.item {
  margin-bottom: 18px;
}

.item h3 {
  margin: 0;
  color: var(--primary);
}

.date {
  font-size: 0.9rem;
  color: #6b7280;
  font-style: italic;
}

ul {
  padding-left: 20px;
}

li {
  margin-bottom: 6px;
}

.skills-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 10px;
}

.lang {
  display: flex;
  justify-content: space-between;
  max-width: 300px;
}

.footer {
  text-align: center;
  font-size: 0.85rem;
  color: #6b7280;
  margin-top: 30px;
}

/* Print / PDF */
@media print {
  body {
    background: #fff;
    padding: 0;
  }
  .container {
    box-shadow: none;
    border-radius: 0;
  }
}
</style>
</head>

<body>
<div class="container">

<header>
  <h1>Chutipong Suebangpra</h1>
  <p>
    📧 chutipong.suebangpra@example.com |
    📞 123-456-7890 |
    🌐 linkedin.com/in/chutipong
  </p>
  <p>Bangkok, Thailand</p>
</header>

<section class="section">
  <h2>Professional Summary</h2>
  <p>
    Full-Stack Web Developer with experience in building scalable and
    high-performance web applications. Strong background in Laravel,
    JavaScript, RESTful APIs, and modern frontend frameworks. Passionate
    about clean code, system design, and teamwork.
  </p>
</section>

<section class="section">
  <h2>สรุปประสบการณ์ (ภาษาไทย)</h2>
  <p>
    นักพัฒนาเว็บ Full-Stack มีประสบการณ์ในการพัฒนาเว็บแอปพลิเคชัน
    ด้วย Laravel และ JavaScript เน้นโค้ดที่มีคุณภาพ รองรับการขยายระบบ
    และทำงานร่วมกับทีมได้ดี
  </p>
</section>

<section class="section">
  <h2>Work Experience</h2>

  <div class="item">
    <h3>Software Developer</h3>
    <div class="date">Tech Solutions Co., Ltd. | Jan 2023 – Present</div>
    <ul>
      <li>Developed full-stack web applications using Laravel & Vue.js</li>
      <li>Designed and implemented RESTful APIs</li>
      <li>Optimized SQL queries to improve performance</li>
      <li>Collaborated with UX, QA, and DevOps teams</li>
    </ul>
  </div>

  <div class="item">
    <h3>Junior Developer</h3>
    <div class="date">Startup Innovations | Jun 2022 – Dec 2022</div>
    <ul>
      <li>Built e-commerce features using PHP & MySQL</li>
      <li>Fixed bugs and refactored legacy code</li>
      <li>Worked under Agile/Scrum methodology</li>
    </ul>
  </div>
</section>

<section class="section">
  <h2>Education</h2>
  <div class="item">
    <h3>B.Sc. in Computer Science</h3>
    <div class="date">Chulalongkorn University | 2018 – 2022</div>
    <ul>
      <li>GPA: 3.8 / 4.0</li>
      <li>Data Structures, Algorithms, Web Development</li>
    </ul>
  </div>
</section>

<section class="section">
  <h2>Skills</h2>
  <div class="skills-grid">
    <div><strong>Languages:</strong> PHP, JavaScript, Python, SQL</div>
    <div><strong>Frameworks:</strong> Laravel, Vue.js, React</div>
    <div><strong>Database:</strong> MySQL, PostgreSQL</div>
    <div><strong>Tools:</strong> Git, Docker, REST API</div>
  </div>
</section>

<section class="section">
  <h2>Projects</h2>
  <div class="item">
    <h3>E-Commerce Platform</h3>
    <ul>
      <li>Authentication, payment gateway, order system</li>
      <li>Deployed with Docker & CI/CD</li>
    </ul>
  </div>

  <div class="item">
    <h3>Task Management App</h3>
    <ul>
      <li>Real-time notifications using WebSocket</li>
      <li>Google Calendar API integration</li>
    </ul>
  </div>
</section>

<section class="section">
  <h2>Certifications</h2>
  <ul>
    <li>Certified Laravel Developer (2023)</li>
    <li>AWS Cloud Practitioner (2024)</li>
  </ul>
</section>

<section class="section">
  <h2>Languages</h2>
  <div class="lang"><span>Thai</span><span>Native</span></div>
  <div class="lang"><span>English</span><span>Fluent</span></div>
</section>

<div class="footer">
  Ready for ATS • Print-Friendly • Responsive Resume
</div>

</div>
</body>
</html>
