@extends('layouts.app')

@section('title', 'Resume - Natthakan Jamratphum')

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title">นางสาว/นาย Natthakan Jamratphum</h1>
                        <p class="text-muted">สาขาวิศวกรรมซอฟต์แวร์</p>

                        <hr>

                        <h5>ข้อมูลติดต่อ</h5>
                        <ul>
                            <li>รหัสนักศึกษา: 664259005</li>
                            <li>อีเมล: natthakan@example.com</li>
                            <li>โทรศัพท์: 091-xxx-xxxx</li>
                            <li>GitHub: <a href="#">github.com/natthakan</a></li>
                        </ul>

                        <h5>การศึกษา</h5>
                        <p>ปริญญาตรี สาขาวิศวกรรมซอฟต์แวร์ — มหาวิทยาลัย (กำลังศึกษา)</p>

                        <h5>ทักษะ</h5>
                        <ul>
                            <li>ภาษาโปรแกรม: PHP, JavaScript, Python</li>
                            <li>Frameworks: Laravel, Vue.js</li>
                            <li>ฐานข้อมูล: MySQL, SQLite</li>
                            <li>เครื่องมือ: Git, Docker, PHPUnit</li>
                        </ul>

                        <h5>โครงการเด่น</h5>
                        <ul>
                            <li>ระบบบริหารจัดการคำร้อง — พัฒนาโดยใช้ Laravel + Vue.js</li>
                            <li>เว็บพอร์ตโฟลิโอส่วนตัว — แสดงผลงานและข้อมูลติดต่อ</li>
                        </ul>

                        <h5>ประสบการณ์</h5>
                        <p>นักศึกษาฝึกงาน/ผู้ร่วมพัฒนาโครงการกลุ่มในชั้นเรียน มีประสบการณ์ทำงานเป็นทีม ใช้กระบวนกา
                            ารพัฒนาเช่น Git flow
                            และ Agile</p>

                        <hr>
                        <p class="text-center text-muted mb-0">ปรับปรุงล่าสุด: {{ now()->format('Y-m-d') }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection