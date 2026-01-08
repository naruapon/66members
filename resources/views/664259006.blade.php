<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>เรซูเม่ — ณัฐ์สุดา รงทอง</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Minimal fallback styles (Tailwind is preferred and bundled in the project) */
            body {
                font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
                margin: 0;
            }
        </style>
    @endif
</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">Log
                        in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <div
        class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <!-- Resume content -->
            <div
                class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                <h1 class="mb-1 font-medium text-2xl">ณัฐ์สุดา รงทอง</h1>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">นักศึกษาสาขาวิศวกรรมซอฟต์แวร์ — นักพัฒนเว็บ /
                    นักศึกษา</p>

                <section class="mb-4">
                    <h2 class="font-medium mb-2">ข้อมูลติดต่อ</h2>
                    <ul class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                        <li>อีเมล: <a href="mailto:natthasuda@example.com"
                                class="text-[#f53003] underline">natthasuda@example.com</a></li>
                        <li>โทรศัพท์: 08x-xxx-xxxx</li>
                        <li>ที่ตั้ง: กรุงเทพมหานคร, ประเทศไทย</li>
                        <li>GitHub: <a href="https://github.com/" target="_blank"
                                class="text-[#f53003] underline">github.com/natthasuda</a> · LinkedIn: <a href="#"
                                class="text-[#f53003] underline">linkedin.com/in/natthasuda</a></li>
                    </ul>
                </section>

                <section class="mb-4">
                    <h2 class="font-medium mb-2">การศึกษา</h2>
                    <div class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                        <strong>ปริญญาตรี วิศวกรรมซอฟต์แวร์</strong><br>
                        สถาบัน/มหาวิทยาลัย (กำลังศึกษา) — คาดว่าจะสำเร็จการศึกษา: 20xx
                    </div>
                </section>

                <section class="mb-4">
                    <h2 class="font-medium mb-2">ทักษะ</h2>
                    <ul class="flex flex-wrap gap-2 text-sm">
                        <li class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] rounded-sm">PHP</li>
                        <li class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] rounded-sm">Laravel</li>
                        <li class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] rounded-sm">JavaScript</li>
                        <li class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] rounded-sm">HTML / CSS</li>
                        <li class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] rounded-sm">Git</li>
                        <li class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] rounded-sm">SQL</li>
                    </ul>
                </section>

                <section class="mb-4">
                    <h2 class="font-medium mb-2">ผลงานเด่น (ตัวอย่าง)</h2>
                    <ul class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                        <li class="mb-2">
                            <strong>ระบบจัดการสมาชิก (Laravel)</strong> — พัฒนาเว็บแอปสำหรับจัดการข้อมูลสมาชิก
                            พร้อมระบบล็อกอินและสิทธิ์ผู้ใช้ (PHP, Laravel, MySQL)
                        </li>
                        <li>
                            <strong>เว็บแอปสำหรับบันทึกงานนักศึกษา</strong> — SPA ขนาดเล็กสำหรับบันทึกและแชร์งาน (Vue.js
                            / React, Tailwind CSS)
                        </li>
                    </ul>
                </section>

                <section class="mb-4">
                    <h2 class="font-medium mb-2">ประสบการณ์</h2>
                    <div class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                        <strong>นักศึกษาฝึกงาน / โครงการนักศึกษา</strong><br>
                        ร่วมพัฒนาโปรเจกต์ทีมในมหาวิทยาลัย: ออกแบบฐานข้อมูล, เขียน REST API, ทดสอบหน่วยและบูรณาการ
                    </div>
                </section>

                <section class="mb-6">
                    <h2 class="font-medium mb-2">ภาษา</h2>
                    <ul class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                        <li>ไทย (เจ้าของภาษา)</li>
                        <li>อังกฤษ (ระดับกลาง, สามารถอ่านและสื่อสารสำหรับงานทางเทคนิค)</li>
                    </ul>
                </section>

                <div class="flex gap-3">
                    <a href="#" class="inline-block px-5 py-1.5 bg-[#1b1b18] text-white rounded-sm">ดาวน์โหลด CV
                        (PDF)</a>
                    <a href="mailto:natthasuda@example.com"
                        class="inline-block px-5 py-1.5 border border-[#19140035] rounded-sm">ติดต่อ</a>
                </div>
            </div>

            <!-- Side panel / visual -->
            <div
                class="bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
                <div class="p-6 lg:p-12">
                    <div class="mb-4 text-[#F53003] dark:text-[#F61500] font-medium text-lg">เรซูเม่</div>
                    <h3 class="text-2xl font-medium mb-2">ณัฐ์สุดา รงทอง</h3>
                    <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">นักศึกษาสาขาวิศวกรรมซอฟต์แวร์
                        ที่มุ่งเน้นการพัฒนาเว็บและระบบฐานข้อมูล</p>

                    <div class="mt-6 text-sm">
                        <p class="mb-2"><strong>เป้าหมาย</strong></p>
                        <p class="text-[#706f6c]">
                            มุ่งหวังพัฒนาทักษะด้านการออกแบบและพัฒนาแอปพลิเคชันบนเว็บและเข้าร่วมทีมพัฒนาที่มุ่งเน้นคุณภาพโค้ดและการทำงานร่วมกัน
                        </p>
                    </div>

                    <div class="mt-6 text-sm">
                        <p class="mb-2"><strong>เครื่องมือที่ใช้บ่อย</strong></p>
                        <ul class="text-[#706f6c]">
                            <li>- VS Code · Composer · npm · Git · MySQL</li>
                        </ul>
                    </div>
                </div>
                <div
                    class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                </div>
            </div>
        </main>
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>