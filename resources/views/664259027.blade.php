<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suparwit Sittisungoen - Resume</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #ec4899;
            --accent: #06b6d4;
            --dark: #0f172a;
            --darker: #020617;
            --light: #f8fafc;
            --gray: #94a3b8;
            --glass: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--darker);
            color: var(--light);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .bg-animation::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background:
                radial-gradient(circle at 20% 80%, rgba(99, 102, 241, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(236, 72, 153, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(6, 182, 212, 0.1) 0%, transparent 40%);
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(30px, -30px) rotate(5deg);
            }

            66% {
                transform: translate(-20px, 20px) rotate(-5deg);
            }
        }

        /* Floating Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.3;
            animation: rise 15s infinite;
        }

        .particle:nth-child(1) {
            left: 10%;
            animation-delay: 0s;
            background: var(--secondary);
        }

        .particle:nth-child(2) {
            left: 20%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            left: 30%;
            animation-delay: 4s;
            background: var(--accent);
        }

        .particle:nth-child(4) {
            left: 40%;
            animation-delay: 1s;
        }

        .particle:nth-child(5) {
            left: 50%;
            animation-delay: 3s;
            background: var(--secondary);
        }

        .particle:nth-child(6) {
            left: 60%;
            animation-delay: 5s;
        }

        .particle:nth-child(7) {
            left: 70%;
            animation-delay: 2.5s;
            background: var(--accent);
        }

        .particle:nth-child(8) {
            left: 80%;
            animation-delay: 4.5s;
        }

        .particle:nth-child(9) {
            left: 90%;
            animation-delay: 1.5s;
            background: var(--secondary);
        }

        @keyframes rise {
            0% {
                transform: translateY(100vh) scale(0);
                opacity: 0;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                transform: translateY(-100vh) scale(1);
                opacity: 0;
            }
        }

        /* Container */
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Header Section */
        .header {
            text-align: center;
            padding: 60px 40px;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            backdrop-filter: blur(20px);
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 60px;
            font-weight: 700;
            color: white;
            box-shadow:
                0 0 0 4px var(--darker),
                0 0 0 8px var(--primary),
                0 20px 40px rgba(99, 102, 241, 0.3);
            animation: pulse-ring 2s infinite;
        }

        @keyframes pulse-ring {

            0%,
            100% {
                box-shadow: 0 0 0 4px var(--darker), 0 0 0 8px var(--primary), 0 20px 40px rgba(99, 102, 241, 0.3);
            }

            50% {
                box-shadow: 0 0 0 4px var(--darker), 0 0 0 12px rgba(99, 102, 241, 0.5), 0 20px 40px rgba(99, 102, 241, 0.5);
            }
        }

        .name {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--light), var(--gray));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
            letter-spacing: -1px;
        }

        .title {
            font-size: 1.25rem;
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .title i {
            color: var(--secondary);
        }

        .university {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.2), rgba(236, 72, 153, 0.2));
            border: 1px solid var(--glass-border);
            border-radius: 50px;
            font-size: 0.9rem;
            color: var(--gray);
        }

        .university i {
            color: var(--accent);
        }

        /* Contact Bar */
        .contact-bar {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-top: 25px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            color: var(--gray);
            font-size: 0.85rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .contact-item:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
        }

        .contact-item i {
            font-size: 1rem;
        }

        /* Main Grid */
        .main-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        @media (max-width: 768px) {
            .main-grid {
                grid-template-columns: 1fr;
            }

            .name {
                font-size: 2rem;
            }
        }

        /* Cards */
        .card {
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 30px;
            backdrop-filter: blur(20px);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
            box-shadow: 0 20px 40px rgba(99, 102, 241, 0.15);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 25px;
        }

        .card-icon {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 12px;
            font-size: 1.2rem;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--light);
        }

        /* Skills */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .skill-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .skill-item:hover {
            background: rgba(99, 102, 241, 0.2);
            border-color: var(--primary);
        }

        .skill-item i {
            font-size: 1.2rem;
            width: 25px;
            text-align: center;
        }

        .skill-item span {
            font-size: 0.85rem;
            color: var(--gray);
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding-left: 30px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 8px;
            top: 5px;
            bottom: 5px;
            width: 2px;
            background: linear-gradient(180deg, var(--primary), var(--secondary));
        }

        .timeline-item {
            position: relative;
            margin-bottom: 25px;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -26px;
            top: 5px;
            width: 12px;
            height: 12px;
            background: var(--primary);
            border-radius: 50%;
            border: 3px solid var(--darker);
        }

        .timeline-date {
            font-size: 0.75rem;
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 5px;
            font-family: 'JetBrains Mono', monospace;
        }

        .timeline-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--light);
            margin-bottom: 5px;
        }

        .timeline-subtitle {
            font-size: 0.85rem;
            color: var(--gray);
        }

        /* Projects */
        .project-item {
            padding: 20px;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .project-item:last-child {
            margin-bottom: 0;
        }

        .project-item:hover {
            border-color: var(--secondary);
            background: rgba(236, 72, 153, 0.1);
        }

        .project-name {
            font-weight: 600;
            color: var(--light);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .project-name i {
            color: var(--secondary);
        }

        .project-desc {
            font-size: 0.85rem;
            color: var(--gray);
            line-height: 1.6;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 12px;
        }

        .tag {
            padding: 4px 12px;
            background: rgba(6, 182, 212, 0.2);
            border: 1px solid rgba(6, 182, 212, 0.3);
            border-radius: 20px;
            font-size: 0.7rem;
            color: var(--accent);
            font-family: 'JetBrains Mono', monospace;
        }

        /* Languages */
        .language-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid var(--glass-border);
        }

        .language-item:last-child {
            border-bottom: none;
        }

        .language-name {
            font-weight: 500;
            color: var(--light);
        }

        .language-level {
            display: flex;
            gap: 4px;
        }

        .level-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--glass-border);
        }

        .level-dot.active {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        /* Interests */
        .interests-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .interest-item {
            padding: 10px 18px;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 50px;
            font-size: 0.85rem;
            color: var(--gray);
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .interest-item:hover {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.3), rgba(236, 72, 153, 0.3));
            color: var(--light);
        }

        /* Full Width Card */
        .full-width {
            grid-column: 1 / -1;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 40px;
            margin-top: 30px;
            color: var(--gray);
            font-size: 0.85rem;
        }

        .footer-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .footer-icon {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            color: var(--gray);
            font-size: 1.2rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .footer-icon:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-3px) rotate(5deg);
        }

        .footer-icon:nth-child(2):hover {
            background: var(--secondary);
        }

        .footer-icon:nth-child(3):hover {
            background: var(--accent);
        }
    </style>
</head>

<body>
    <div class="bg-animation"></div>
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container">
        <!-- Header -->
        <header class="header">
            <div class="profile-image">
                <img src="/Profile.jpg" alt="Suparwit Sittisungoen"
                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
            </div>
            <h1 class="name">Suparwit Sittisungoen</h1>
            <div class="title">
                <i class="fas fa-code"></i>
                Software Engineering Student
            </div>
            <div class="university">
                <i class="fas fa-graduation-cap"></i>
                Nakhon Pathom Rajabhat University
            </div>
            <div class="contact-bar">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    664259027@npru.ac.th
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    +66 XX-XXX-XXXX
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    Nakhon Pathom, Thailand
                </div>
                <div class="contact-item">
                    <i class="fab fa-github"></i>
                    github.com/0ARTKUNG0
                </div>
            </div>
        </header>

        <!-- Main Grid -->
        <div class="main-grid">
            <!-- About Me -->
            <div class="card full-width">
                <div class="card-header">
                    <div class="card-icon"><i class="fas fa-user"></i></div>
                    <h2 class="card-title">About Me</h2>
                </div>
                <p style="color: var(--gray); line-height: 1.8; font-size: 0.95rem;">
                    A passionate Software Engineering student at Nakhon Pathom Rajabhat University with a keen interest
                    in full-stack web development and emerging technologies. I thrive on solving complex problems and
                    creating innovative solutions that make a positive impact. Always eager to learn new technologies
                    and collaborate on exciting projects.
                </p>
            </div>

            <!-- Education -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h2 class="card-title">Education</h2>
                </div>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-date">2023 - Present</div>
                        <div class="timeline-title">Bachelor of Science</div>
                        <div class="timeline-subtitle">Software Engineering • NPRU</div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">2020 - 2023</div>
                        <div class="timeline-title">High School Diploma</div>
                        <div class="timeline-subtitle">Science-Mathematics Program</div>
                    </div>
                </div>
            </div>

            <!-- Skills -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon"><i class="fas fa-laptop-code"></i></div>
                    <h2 class="card-title">Technical Skills</h2>
                </div>
                <div class="skills-grid">
                    <div class="skill-item">
                        <i class="fab fa-html5" style="color: #e34f26;"></i>
                        <span>HTML5</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-css3-alt" style="color: #1572b6;"></i>
                        <span>CSS3</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-js" style="color: #f7df1e;"></i>
                        <span>JavaScript</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-react" style="color: #61dafb;"></i>
                        <span>React</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-php" style="color: #777bb4;"></i>
                        <span>PHP</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-laravel" style="color: #ff2d20;"></i>
                        <span>Laravel</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-node" style="color: #339933;"></i>
                        <span>Node.js</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-database" style="color: #4479a1;"></i>
                        <span>MySQL</span>
                    </div>
                </div>
            </div>

            <!-- Projects -->
            <div class="card full-width">
                <div class="card-header">
                    <div class="card-icon"><i class="fas fa-rocket"></i></div>
                    <h2 class="card-title">Featured Projects</h2>
                </div>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
                    <div class="project-item">
                        <div class="project-name">
                            <i class="fas fa-blog"></i>
                            SE NPRU Blog Platform
                        </div>
                        <p class="project-desc">A full-stack blog application with user authentication, post management,
                            and responsive design.</p>
                        <div class="project-tags">
                            <span class="tag">React</span>
                            <span class="tag">Node.js</span>
                            <span class="tag">MongoDB</span>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-name">
                            <i class="fas fa-users"></i>
                            66 Members Portal
                        </div>
                        <p class="project-desc">A member management system built with Laravel for tracking and
                            organizing class members.</p>
                        <div class="project-tags">
                            <span class="tag">Laravel</span>
                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-name">
                            <i class="fas fa-shopping-cart"></i>
                            E-Commerce Demo
                        </div>
                        <p class="project-desc">An e-commerce prototype with product catalog, cart functionality, and
                            payment integration.</p>
                        <div class="project-tags">
                            <span class="tag">JavaScript</span>
                            <span class="tag">Express</span>
                            <span class="tag">Stripe</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Languages -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon"><i class="fas fa-language"></i></div>
                    <h2 class="card-title">Languages</h2>
                </div>
                <div class="language-item">
                    <span class="language-name">Thai</span>
                    <div class="language-level">
                        <span class="level-dot active"></span>
                        <span class="level-dot active"></span>
                        <span class="level-dot"></span>
                        <span class="level-dot"></span>
                        <span class="level-dot"></span>
                    </div>
                </div>
                <div class="language-item">
                    <span class="language-name">English</span>
                    <div class="language-level">
                        <span class="level-dot active"></span>
                        <span class="level-dot active"></span>
                        <span class="level-dot active"></span>
                        <span class="level-dot active"></span>
                        <span class="level-dot"></span>
                    </div>
                </div>
            </div>

            <!-- Interests -->
            <div class="card">
                <div class="card-header">
                    <div class="card-icon"><i class="fas fa-heart"></i></div>
                    <h2 class="card-title">Interests</h2>
                </div>
                <div class="interests-grid">
                    <div class="interest-item">
                        <i class="fas fa-code"></i>
                        Web Development
                    </div>
                    <div class="interest-item">
                        <i class="fas fa-mobile-alt"></i>
                        Mobile Apps
                    </div>
                    <div class="interest-item">
                        <i class="fas fa-robot"></i>
                        AI/ML
                    </div>
                    <div class="interest-item">
                        <i class="fas fa-gamepad"></i>
                        Gaming
                    </div>
                    <div class="interest-item">
                        <i class="fas fa-music"></i>
                        Music
                    </div>
                    <div class="interest-item">
                        <i class="fas fa-camera"></i>
                        Photography
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-icons">
                <a class="footer-icon" href="https://github.com/0ARTKUNG0"><i class="fab fa-github"></i></a>
                <a class="footer-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="footer-icon" href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <p>© 2026 Suparwit Sittisungoen • Built with ❤️ and lots of ☕</p>
        </footer>
    </div>
</body>

</html>