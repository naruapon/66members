<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - พิธารวัฒน์ เกตุมณี</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
        }
        .glass {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .gradient-text {
            background: linear-gradient(to right, #34d399, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-slate-950 min-h-screen py-10 text-slate-200 selection:bg-emerald-500 selection:text-white">
    <div class="max-w-4xl mx-auto glass shadow-2xl rounded-3xl overflow-hidden relative">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 rounded-full bg-blue-600 opacity-20 blur-[100px]"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-emerald-600 opacity-20 blur-[100px]"></div>

        <!-- Header Section -->
        <div class="relative p-10 md:p-14 text-center md:text-left border-b border-slate-800/50">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-2 gradient-text tracking-tight">นาย พิธารวัฒน์ เกตุมณี</h1>
                    <p class="text-xl md:text-2xl font-light text-slate-400 mt-2">นักศึกษา สาขาวิชาวิศวกรรมซอฟต์แวร์</p>
                    <div class="mt-4 flex flex-wrap justify-center md:justify-start gap-3">
                        <span class="px-4 py-1.5 rounded-full bg-slate-800/50 border border-slate-700 text-sm text-emerald-400 font-medium">Gen Z Developer</span>
                        <span class="px-4 py-1.5 rounded-full bg-slate-800/50 border border-slate-700 text-sm text-blue-400 font-medium">Tech Enthusiast</span>
                    </div>
                </div>
                <div class="w-24 h-24 md:w-32 md:h-32 rounded-full bg-gradient-to-tr from-emerald-500 to-blue-500 p-1 shadow-lg shadow-emerald-500/20">
                    <div class="w-full h-full rounded-full bg-slate-900 flex items-center justify-center text-4xl">
                        👨‍💻
                    </div>
                </div>
            </div>
        </div>

        <div class="p-8 md:p-12 grid grid-cols-1 md:grid-cols-3 gap-10 relative z-10">
            <!-- Left Column (Contact & Info) -->
            <div class="col-span-1 space-y-8">
                <div class="bg-slate-900/40 p-6 rounded-2xl border border-slate-800/50 backdrop-blur-sm">
                    <h2 class="text-lg font-bold text-emerald-400 mb-4 uppercase tracking-wider flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span> ข้อมูลส่วนตัว
                    </h2>
                    <div class="space-y-4 text-sm">
                        <div>
                            <p class="text-slate-500 text-xs uppercase">รหัสนักศึกษา</p>
                            <p class="text-slate-200 font-medium text-lg">664259024</p>
                        </div>
                        <div>
                            <p class="text-slate-500 text-xs uppercase">คณะ</p>
                            <p class="text-slate-200 font-medium">วิทยาศาสตร์และเทคโนโลยี</p>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-900/40 p-6 rounded-2xl border border-slate-800/50 backdrop-blur-sm">
                    <h2 class="text-lg font-bold text-blue-400 mb-4 uppercase tracking-wider flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-blue-400"></span> ข้อมูลติดต่อ
                    </h2>
                    <div class="space-y-4 text-sm">
                        <div>
                            <p class="text-slate-500 text-xs uppercase">อีเมล</p>
                            <p class="text-slate-200 break-all hover:text-blue-400 transition-colors">664259024@example.com</p>
                        </div>
                        <div>
                            <p class="text-slate-500 text-xs uppercase">เบอร์โทรศัพท์</p>
                            <p class="text-slate-200">0XX-XXX-XXXX</p>
                        </div>
                        <div>
                            <p class="text-slate-500 text-xs uppercase">ที่อยู่</p>
                            <p class="text-slate-200">-</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column (Education & Skills) -->
            <div class="col-span-1 md:col-span-2 space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-1.5 h-8 bg-gradient-to-b from-emerald-400 to-blue-500 rounded-full"></span>
                        การศึกษา
                    </h2>
                    <div class="bg-slate-900/40 p-6 rounded-2xl border border-slate-800/50 hover:border-emerald-500/30 transition-all duration-300 group">
                        <h3 class="text-xl font-bold text-white group-hover:text-emerald-400 transition-colors">คณะวิทยาศาสตร์และเทคโนโลยี</h3>
                        <p class="text-blue-400 font-medium text-lg mt-1">สาขาวิชาวิศวกรรมซอฟต์แวร์</p>
                        <p class="text-slate-500 mt-2 text-sm flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span> มหาวิทยาลัยราชภัฏนครปฐม
                        </p>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-1.5 h-8 bg-gradient-to-b from-blue-500 to-purple-500 rounded-full"></span>
                        ทักษะความสามารถ
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Skill Item -->
                        <div class="bg-slate-900/60 p-4 rounded-xl border border-slate-800/50 flex items-center gap-4 hover:bg-slate-800/80 transition-all group">
                            <div class="w-12 h-12 rounded-lg bg-orange-500/10 flex items-center justify-center text-orange-500 font-bold text-xl group-hover:scale-110 transition-transform">
                                &lt;/&gt;
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-slate-200 text-sm">HTML / CSS</h4>
                                <div class="w-full bg-slate-700/50 h-1.5 rounded-full mt-2 overflow-hidden">
                                    <div class="bg-gradient-to-r from-orange-500 to-red-500 h-full rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Skill Item -->
                        <div class="bg-slate-900/60 p-4 rounded-xl border border-slate-800/50 flex items-center gap-4 hover:bg-slate-800/80 transition-all group">
                            <div class="w-12 h-12 rounded-lg bg-indigo-500/10 flex items-center justify-center text-indigo-500 font-bold text-xl group-hover:scale-110 transition-transform">
                                PHP
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-slate-200 text-sm">PHP / Laravel</h4>
                                <div class="w-full bg-slate-700/50 h-1.5 rounded-full mt-2 overflow-hidden">
                                    <div class="bg-gradient-to-r from-indigo-500 to-purple-500 h-full rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Skill Item -->
                        <div class="bg-slate-900/60 p-4 rounded-xl border border-slate-800/50 flex items-center gap-4 hover:bg-slate-800/80 transition-all group">
                            <div class="w-12 h-12 rounded-lg bg-blue-500/10 flex items-center justify-center text-blue-500 font-bold text-xl group-hover:scale-110 transition-transform">
                                SQL
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-slate-200 text-sm">MySQL</h4>
                                <div class="w-full bg-slate-700/50 h-1.5 rounded-full mt-2 overflow-hidden">
                                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 h-full rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Skill Item -->
                        <div class="bg-slate-900/60 p-4 rounded-xl border border-slate-800/50 flex items-center gap-4 hover:bg-slate-800/80 transition-all group">
                            <div class="w-12 h-12 rounded-lg bg-red-500/10 flex items-center justify-center text-red-500 font-bold text-xl group-hover:scale-110 transition-transform">
                                Git
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-slate-200 text-sm">Git Version Control</h4>
                                <div class="w-full bg-slate-700/50 h-1.5 rounded-full mt-2 overflow-hidden">
                                    <div class="bg-gradient-to-r from-red-500 to-orange-500 h-full rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
