<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Me — Chatchai Booranawiselkul</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Prompt:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #0b1726;
            --deep: #111a2b;
            --card: #151f31;
            --muted: #c9d6f0;
            --brand: #2ea1ff;
            --accent: #ff8f4e;
            --line: rgba(255, 255, 255, .12);
            --ok: #6ee7b7;
            --warn: #fbbf24;
            --err: #f87171;
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: linear-gradient(180deg, var(--deep), #0a1020 60%);
            color: #eaf1ff;
            font-family: Inter, Prompt, system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
        }

        a {
            color: var(--brand);
            text-decoration: none
        }

        img {
            max-width: 100%;
            display: block
        }

        img.circle {
            border-radius: 50%;
            width: 100%;
            height: auto;
            aspect-ratio: 1;
            object-fit: cover;
        }

        .container {
            width: min(1120px, 92vw);
            margin: 0 auto;
            padding: 0 20px
        }

        .grid {
            display: grid;
            gap: 24px
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 18px;
            border-radius: 12px;
            background: linear-gradient(90deg, var(--brand), #7ac7ff);
            color: #001833;
            font-weight: 700
        }

        header.nav {
            position: sticky;
            top: 0;
            backdrop-filter: blur(8px);
            background: rgba(10, 16, 32, .6);
            border-bottom: 1px solid var(--line);
            z-index: 30
        }

        header.nav .inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 0
        }

        .logo {
            font-weight: 800;
            letter-spacing: .2px
        }

        .pill {
            border: 1px solid var(--line);
            border-radius: 999px;
            padding: 6px 12px;
            color: #b9c6e4
        }

        /* ===== HERO ===== */
        .hero {
            position: relative;
            isolation: isolate
        }

        .hero-wrap {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 36px;
            align-items: center;
            padding: 64px 0 32px
        }

        .kpis {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-top: 24px
        }

        .kpi {
            background: rgba(255, 255, 255, .05);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 16px
        }

        .kpi b {
            font-size: 22px
        }

        .hero .bg-shape {
            position: absolute;
            inset: -10% -20% auto -20%;
            height: 60vmin;
            background: radial-gradient(60% 60% at 30% 30%, rgba(46, 161, 255, .25), transparent 60%), radial-gradient(50% 50% at 70% 60%, rgba(255, 143, 78, .18), transparent 60%);
            filter: blur(30px);
            z-index: -1
        }

        /* ===== SCENES / STORY TIMELINE ===== */
        .section {
            padding: 42px 0
        }

        .headline {
            font-size: 12px;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: #9fb3da
        }

        h1 {
            font-family: Prompt, Inter, sans-serif;
            font-size: clamp(28px, 4vw, 44px);
            line-height: 1.1;
            margin: 0 0 8px
        }

        h2 {
            font-family: Prompt, Inter, sans-serif;
            font-size: clamp(22px, 3vw, 32px);
            line-height: 1.15;
            margin: 0 0 12px
        }

        p.lead {
            color: #cfe3ff
        }

        .scenes {
            display: grid;
            gap: 24px;
            margin-top: 18px
        }

        .scene {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            align-items: stretch;
            background: rgba(255, 255, 255, .03);
            border: 1px solid var(--line);
            border-radius: 20px;
            overflow: hidden
        }

        .scene .pic {
            position: relative;
            min-height: 220px;
            overflow: hidden
        }

        .scene .pic img {
            object-fit: cover;
            width: 100%;
            height: auto;
            min-height: 220px
        }

        .scene .cap {
            padding: 18px 18px 22px
        }

        .tag {
            display: inline-block;
            padding: 6px 10px;
            border: 1px solid var(--line);
            border-radius: 999px;
            color: #9fb3da;
            font-size: 12px
        }

        .chips {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px
        }

        .chip {
            background: rgba(255, 255, 255, .06);
            border: 1px solid var(--line);
            padding: 6px 10px;
            border-radius: 999px;
            color: #cfe3ff;
            font-size: 12px
        }

        /* ===== PROJECTS ===== */
        .cards {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 16px;
            align-items: stretch
        }

        .card {
            grid-column: span 12;
            background: rgba(255, 255, 255, .03);
            border: 1px solid var(--line);
            border-radius: 18px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%
        }

        .card .thumb {
            height: 180px;
            background: #0f1a30;
            overflow: hidden
        }

        .card .thumb img {
            width: 100%;
            height: auto;
            object-fit: cover
        }

        .card .body {
            padding: 16px;
            flex: 1;
            display: flex;
            flex-direction: column
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 10px;
            border-radius: 999px;
            background: rgba(110, 231, 183, .12);
            color: var(--ok);
            border: 1px solid rgba(110, 231, 183, .22);
            font-size: 12px
        }

        /* ===== SKILLS ===== */
        .skills {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px
        }

        .skill {
            background: rgba(255, 255, 255, .03);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 14px
        }

        .skill h4 {
            margin: 0 0 6px;
            font-size: 14px;
            color: #cfe3ff
        }

        .skill .list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px
        }

        /* ===== FOOTER ===== */
        footer {
            padding: 28px 0 56px;
            color: #9fb3da;
            border-top: 1px solid var(--line);
            margin-top: 42px
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 980px) {
            .hero-wrap {
                grid-template-columns: 1fr
            }

            .kpis {
                grid-template-columns: repeat(3, 1fr)
            }

            .scene {
                grid-template-columns: 1fr
            }

            .skills {
                grid-template-columns: repeat(2, 1fr)
            }
        }

        @media (max-width: 640px) {
            .kpis {
                grid-template-columns: 1fr 1fr
            }

            .skills {
                grid-template-columns: 1fr
            }

            img.circle {
                max-width: 280px;
                margin: 0 auto;
            }
        }

        /* Work */
        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 10px 0 18px
        }

        .fbtn {
            background: transparent;
            border: 1px solid var(--bord, #1e2733);
            color: var(--text, #e7edf5);
            padding: 8px 12px;
            border-radius: 999px;
            cursor: pointer;
            font-weight: 700
        }

        .fbtn.active {
            background: var(--pri, #3ea6ff);
            color: #081018;
            border-color: transparent
        }

        .work-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px
        }

        .work-card {
            background: var(--card, #131a23);
            border: 1px solid var(--bord, #1e2733);
            border-radius: 14px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            gap: 8px
        }

        .work-card header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px
        }

        .work-card h3 {
            margin: 0;
            font-size: 1rem
        }

        .mini-icons img {
            width: 22px;
            height: 22px;
            opacity: .9
        }

        .work-card p {
            color: var(--muted, #a3b1c2);
            margin: 2px 0 4px
        }

        .work-card .chips {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 6px 0 0
        }

        .work-card .chips li {
            list-style: none;
            background: #0f141c;
            padding: 6px 10px;
            border: 1px solid var(--bord, #1e2733);
            border-radius: 999px;
            color: var(--muted, #a3b1c2);
            font-size: .85rem
        }

        /* Stack */
        .stack-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            align-items: stretch
        }

        .stack-group {
            background: var(--card, #131a23);
            border: 1px solid var(--bord, #1e2733);
            border-radius: 14px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            height: 100%
        }

        .stack-group h4 {
            margin: 0 0 10px
        }

        .icons {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 12px
        }

        .icons figure {
            margin: 0;
            text-align: center
        }

        .icons img {
            width: 34px;
            height: 34px;
            display: block;
            margin: 0 auto 6px;
            filter: drop-shadow(0 0 0 rgba(0, 0, 0, 0.2))
        }

        .icons figcaption {
            font-size: .78rem;
            color: var(--muted, #a3b1c2)
        }

        /* Responsive */
        @media (max-width:1000px) {
            .work-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .icons {
                grid-template-columns: repeat(4, 1fr)
            }
        }

        @media (max-width:700px) {
            .work-grid {
                grid-template-columns: 1fr
            }

            .stack-grid {
                grid-template-columns: 1fr
            }

            .icons {
                grid-template-columns: repeat(3, 1fr)
            }
        }
    </style>
</head>

<body>
    <!-- NAV -->
    <header class="nav">
        <div class="container inner">
            <div class="logo">Chatchai Booranawiselkul</div>
            <nav class="grid" style="grid-auto-flow:column;gap:14px;align-items:center">
                <a class="pill" href="#story">Story</a>
                <a class="pill" href="#projects">Projects</a>
                <a class="pill" href="#skills">Skills</a>
                <a class="pill" href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="bg-shape"></div>
        <div class="container hero-wrap">
            <div>
                <span class="headline">About Me</span>
                <h1>Senior Programmer · Full‑Stack Dev · System Integrator</h1>
                <p class="lead">จากพนักงานจัดส่งวันละ 190 บาท → Senior Programmer ของบริษัทมหาชน ด้วยหลักคิด "สร้างระบบให้คนอยู่ได้ โดยไม่ต้องพึ่งคนเดียว".</p>
                <div class="kpis">
                    <div class="kpi"><b>50+</b>
                        <div>Projects Delivered</div>
                    </div>
                    <div class="kpi"><b>7</b>
                        <div>Countries Supported</div>
                    </div>
                    <div class="kpi"><b>99.6%</b>
                        <div>System Uptime</div>
                    </div>
                </div>
                <div style="margin-top:18px;display:flex;gap:10px;flex-wrap:wrap">
                    <a href="#contact" class="btn">ติดต่อร่วมงาน</a>
                    <a href="#projects" class="pill">ดูผลงานเด่น</a>
                </div>
            </div>
            <figure style="border:1px solid var(--line);border-radius:20px;overflow:hidden;background:rgba(255,255,255,.03); padding-top:5px">
                <!-- เปลี่ยนรูปโปรไฟล์ที่นี่ -->
                <img src="./img/68.jpg" alt="Chatchai — working scene" loading="lazy" class="circle" />
                <figcaption style="padding:10px 14px;color:#9fb3da">Chatchai — Senior Programmer / System Owner</figcaption>
            </figure>
        </div>
    </section>

    <section id="story" class="section">
        <div class="container">
            <span class="headline">Story in Scenes</span>
            <h2>ฉากชีวิต — จากศูนย์สู่ Senior Programmer</h2>
            <p class="lead">
                เพิ่มรูปภาพประกอบแต่ละฉากเพื่อเล่าเรื่องให้ทรงพลัง — คลิกแก้ URL รูปในแท็ก
                <code>&lt;img&gt;</code> ได้ทันที
            </p>

            <div class="scenes">
                <!-- Scene 1: โรงงาน → แรงงานวันละ 190 บาท + กศน.วันอาทิตย์ -->
                <article class="scene">
                    <div class="pic">
                        <img src="./img/54.png" alt="เริ่มต้นจากโรงงานและงานหนัก" loading="lazy" />
                    </div>
                    <div class="cap">
                        <span class="tag">2015–2016 · จุดเริ่มต้น</span>
                        <h3>โรงงานไทยเอ็นเค — พนักงานจัดส่ง (190 บาท/วัน) + เรียน กศน.วันอาทิตย์</h3>
                        <p>
                            ทำงาน จ–ส ไม่มีวันหยุดประจำ อาทิตย์ไปเรียน กศน. ม.ปลาย จนจบ —
                            ฝึกวินัย อดออม และตั้งเป้าเดียวว่า “ยืนให้ได้ด้วยตัวเอง”
                        </p>
                        <div class="chips">
                            <span class="chip">วินัย</span><span class="chip">รับผิดชอบ</span><span class="chip">ฐานชีวิต</span>
                        </div>
                    </div>
                </article>

                <!-- Scene 2: ทหารอากาศ หน่วยปฏิบัติการพิเศษ -->
                <article class="scene">
                    <div class="pic">
                        <img src="./img/55.jpg" alt="วินัยทหารและการฝึกหนัก" loading="lazy" />
                    </div>
                    <div class="cap">
                        <span class="tag">2016–2017 · สร้างต้นทุนภายใน</span>
                        <h3>สมัครใจเป็นทหารประจำการ — กองทัพอากาศ (หน่วยปฏิบัติการพิเศษ)</h3>
                        <p>
                            ผ่านการฝึกที่เข้มข้น เรียนรู้การทำงานเป็นทีม ภาวะผู้นำ และการแก้ปัญหาในภาวะกดดัน —
                            ความยากไม่ใช่ศัตรู แต่เป็นครู
                        </p>
                        <div class="chips">
                            <span class="chip">วินัยเหล็ก</span><span class="chip">ใจนิ่ง</span><span class="chip">ทำจริง</span>
                        </div>
                    </div>
                </article>

                <!-- Scene 3: เกษตร → ฟาร์มกุ้ง -->
                <article class="scene">
                    <div class="pic">
                        <img src="./img/60.jpg" alt="เกษตร ฟาร์มกุ้ง และการบริหารความเสี่ยง" loading="lazy" />
                    </div>
                    <div class="cap">
                        <span class="tag">2018 · ผู้ประกอบการ</span>
                        <h3>ฟาร์มกุ้งเชิงเกษตร — บริหารความเสี่ยงและเงินทุน</h3>
                        <p>
                            จับจังหวะ ต้นทุน คุณภาพน้ำ และข้อมูลหน้างาน —
                            ได้กำไรต่อรอบตั้งแต่หลักแสนถึงล้าน วางรากคิดแบบ “ระบบ”
                        </p>
                        <div class="chips">
                            <span class="chip">วิเคราะห์</span><span class="chip">กระแสเงินสด</span><span class="chip">การทดลอง</span>
                        </div>
                    </div>
                </article>

                <!-- Scene 4: เข้าสาย IT → Dev เดี่ยว -->
                <!-- Scene 4: เข้าสาย IT เริ่มต้นจากบริษัทแรก -->
                <article class="scene">
                    <div class="pic">
                        <img src="https://images.unsplash.com/photo-1518779578993-ec3579fee39f?q=80&w=1600&auto=format&fit=crop"
                            alt="เริ่มสาย IT ที่บริษัทแรก" loading="lazy" />
                    </div>
                    <div class="cap">
                        <span class="tag">2019–2020 · First Step</span>
                        <h3>T.Logical Co., Ltd. — Programmer (Web MIS / Infrastructure)</h3>
                        <p>
                            ก้าวแรกในสาย IT บริษัทจริง — รับผิดชอบพัฒนา Web MIS,
                            วาง Infrastructure เบื้องต้น, และทำระบบภายใน เช่น Expense และ Campaign Website.
                            ฝึกการดีพลอยระบบจริงและเข้าใจวงจรการทำงานขององค์กร.
                        </p>
                        <div class="chips">
                            <span class="chip">PHP</span><span class="chip">MySQL</span>
                            <span class="chip">Infrastructure</span><span class="chip">MIS</span>
                        </div>
                    </div>
                </article>

                <!-- Scene 5: Successmore → System Integrator -->
                <article class="scene">
                    <div class="pic">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=1600&auto=format&fit=crop"
                            alt="ดูแลระบบองค์กรใหญ่" loading="lazy" />
                    </div>
                    <div class="cap">
                        <span class="tag">2020–Now · System Integrator</span>
                        <h3>Successmore Being PCL — Programmer / System Integrator</h3>
                        <p>
                            พัฒนาและดูแลระบบสำคัญในองค์กรกว่า 50 โปรเจกต์ เช่น POS, E-Learning, Mobile App, Web Campaign,
                            Affiliate และ Corporate Portal ทั้งไทยและต่างประเทศ (7 ประเทศ).
                            เชื่อม API ระหว่าง Mobile POS กับ ระบบ PHP 5.2/CI2, อัปเกรดสู่ Laravel 8 และ NestJS/Nuxt บน AWS.
                        </p>
                        <div class="chips">
                            <span class="chip">Laravel 8</span><span class="chip">NestJS</span>
                            <span class="chip">Nuxt 3</span><span class="chip">AWS EC2</span>
                            <span class="chip">DevOps CI/CD</span><span class="chip">Automation</span>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- =======================
     Selected Work
======================= -->
    <section id="work" class="section">
        <div class="container">
            <span class="headline">Selected Work</span>
            <h2>ผลงานเด่น</h2>

            <!-- Filters -->
            <div class="filters">
                <button class="fbtn active" data-filter="all">ทั้งหมด</button>
                <button class="fbtn" data-filter="web">Web</button>
                <button class="fbtn" data-filter="api">API</button>
                <button class="fbtn" data-filter="mobile">Mobile</button>
                <button class="fbtn" data-filter="data">Data/ETL</button>
                <button class="fbtn" data-filter="infra">Infra/Ops</button>
            </div>

            <!-- Cards -->
            <div class="work-grid">
                <!-- POS Modernization -->
                <article class="work-card" data-tags="api mobile infra web">
                    <header>
                        <h3>POS Modernization (AWS)</h3>
                        <div class="mini-icons">
                            <img src="icons/nuxtdotjs.svg" alt="Nuxt" onerror="this.outerHTML='<span>Nuxt</span>'">
                            <img src="icons/nodedotjs.svg" alt="Node/Nest" onerror="this.outerHTML='<span>Nest</span>'">
                            <img src="icons/amazonaws.svg" alt="AWS" onerror="this.outerHTML='<span>AWS</span>'">
                        </div>
                    </header>
                    <p>แยก Front/Back (Nuxt3 + NestJS), เชื่อม Mobile App, ย้ายขึ้น EC2 + Auto backup/monitor</p>
                    <ul class="chips">
                        <li>Nuxt3</li>
                        <li>NestJS</li>
                        <li>AWS EC2</li>
                        <li>CI/CD</li>
                    </ul>
                </article>

                <!-- E-Learning -->
                <article class="work-card" data-tags="web api">
                    <header>
                        <h3>E-Learning Platform</h3>
                        <div class="mini-icons">
                            <img src="icons/laravel.svg" alt="Laravel" onerror="this.outerHTML='<span>Laravel</span>'">
                            <img src="icons/mysql.svg" alt="MySQL" onerror="this.outerHTML='<span>MySQL</span>'">
                        </div>
                    </header>
                    <p>คอร์สออนไลน์ + วิดีโอ, Progress Tracking, รายงานผู้บริหาร</p>
                    <ul class="chips">
                        <li>Laravel</li>
                        <li>MySQL</li>
                        <li>Vimeo API</li>
                    </ul>
                </article>

                <!-- MLM Commission & Data -->
                <article class="work-card" data-tags="data api">
                    <header>
                        <h3>MLM Commission & Data</h3>
                        <div class="mini-icons">
                            <img src="icons/python.svg" alt="Python" onerror="this.outerHTML='<span>Python</span>'">
                            <img src="icons/postgresql.svg" alt="Postgres" onerror="this.outerHTML='<span>Postgres</span>'">
                        </div>
                    </header>
                    <p>ETL รวมข้อมูลคำสั่งซื้อ/สมาชิก → คลังข้อมูล → คำนวณค่าคอมมิชชัน พร้อม audit</p>
                    <ul class="chips">
                        <li>Python ETL</li>
                        <li>PostgreSQL</li>
                        <li>Scheduler</li>
                    </ul>
                </article>

                <!-- CRM/Support Suite -->
                <article class="work-card" data-tags="web api">
                    <header>
                        <h3>CRM / Ticket / Callcenter</h3>
                        <div class="mini-icons">
                            <img src="icons/php.svg" alt="PHP" onerror="this.outerHTML='<span>PHP</span>'">
                            <img src="icons/apache.svg" alt="Apache" onerror="this.outerHTML='<span>Apache</span>'">
                        </div>
                    </header>
                    <p>ระบบลูกค้าสัมพันธ์ ทิกเก็ตซัพพอร์ต และคอลเซ็นเตอร์ ครอบคลุมหลายประเทศ</p>
                    <ul class="chips">
                        <li>PHP</li>
                        <li>Apache</li>
                        <li>REST API</li>
                    </ul>
                </article>

                <!-- Web Campaigns -->
                <article class="work-card" data-tags="web">
                    <header>
                        <h3>Web Campaigns (Top Spender, Songkran, Angpao)</h3>
                        <div class="mini-icons">
                            <img src="icons/vue-dot-js.svg" alt="Vue" onerror="this.outerHTML='<span>Vue</span>'">
                            <img src="icons/javascript.svg" alt="JS" onerror="this.outerHTML='<span>JS</span>'">
                        </div>
                    </header>
                    <p>แคมเปญการตลาด/จัดอันดับ เชื่อมระบบหลังบ้านและรายงานเรียลไทม์</p>
                    <ul class="chips">
                        <li>Vue</li>
                        <li>JS</li>
                        <li>Realtime</li>
                    </ul>
                </article>

                <!-- Infra/Automation -->
                <article class="work-card" data-tags="infra">
                    <header>
                        <h3>Infra & Automation</h3>
                        <div class="mini-icons">
                            <img src="icons/ubuntu.svg" alt="Ubuntu" onerror="this.outerHTML='<span>Ubuntu</span>'">
                            <img src="icons/docker.svg" alt="Docker" onerror="this.outerHTML='<span>Docker</span>'">
                            <img src="icons/gitlab.svg" alt="GitLab" onerror="this.outerHTML='<span>GitLab</span>'">
                        </div>
                    </header>
                    <p>โครงสร้างเซิร์ฟเวอร์, Backup/Healthcheck, CI/CD ด้วย GitLab/GitHub Actions</p>
                    <ul class="chips">
                        <li>Linux</li>
                        <li>Docker</li>
                        <li>CI/CD</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- =======================
     Stack & Tools
======================= -->
    <section id="stack" class="section">
        <div class="container">
            <span class="headline">Stack & Tools</span>
            <h2>สิ่งที่ใช้ทำงานจริง</h2>

            <div class="stack-grid">
                <!-- Backend -->
                <div class="stack-group">
                    <h4>Backend</h4>
                    <div class="icons">
                        <figure><img src="icons/php.svg" alt="PHP">
                            <figcaption>PHP</figcaption>
                        </figure>
                        <figure><img src="icons/laravel.svg" alt="Laravel">
                            <figcaption>Laravel</figcaption>
                        </figure>
                        <figure><img src="icons/nodedotjs.svg" alt="Node">
                            <figcaption>Node.js</figcaption>
                        </figure>
                        <figure><img src="icons/nestjs.svg" alt="NestJS">
                            <figcaption>NestJS</figcaption>
                        </figure>
                        <figure><img src="icons/typescript.svg" alt="TypeScript">
                            <figcaption>TypeScript</figcaption>
                        </figure>
                        <figure><img src="icons/python.svg" alt="Python">
                            <figcaption>Python</figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Frontend -->
                <div class="stack-group">
                    <h4>Frontend</h4>
                    <div class="icons">
                        <figure><img src="icons/vue-dot-js.svg" alt="Vue">
                            <figcaption>Vue 3</figcaption>
                        </figure>
                        <figure><img src="icons/nuxtdotjs.svg" alt="Nuxt">
                            <figcaption>Nuxt 3</figcaption>
                        </figure>
                        <figure><img src="icons/html5.svg" alt="HTML5">
                            <figcaption>HTML5</figcaption>
                        </figure>
                        <figure><img src="icons/css3.svg" alt="CSS3">
                            <figcaption>CSS3</figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Database -->
                <div class="stack-group">
                    <h4>Database</h4>
                    <div class="icons">
                        <figure><img src="icons/mysql.svg" alt="MySQL">
                            <figcaption>MySQL</figcaption>
                        </figure>
                        <figure><img src="icons/postgresql.svg" alt="PostgreSQL">
                            <figcaption>PostgreSQL</figcaption>
                        </figure>
                        <figure><img src="icons/mongodb.svg" alt="MongoDB">
                            <figcaption>MongoDB</figcaption>
                        </figure>
                        <figure><img src="icons/redis.svg" alt="Redis">
                            <figcaption>Redis</figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Infra / DevOps -->
                <div class="stack-group">
                    <h4>Infra / DevOps</h4>
                    <div class="icons">
                        <figure><img src="icons/apache.svg" alt="Apache">
                            <figcaption>Apache</figcaption>
                        </figure>
                        <figure><img src="icons/ubuntu.svg" alt="Ubuntu">
                            <figcaption>Ubuntu</figcaption>
                        </figure>
                        <figure><img src="icons/centos.svg" alt="CentOS">
                            <figcaption>CentOS</figcaption>
                        </figure>
                        <figure><img src="icons/amazonaws.svg" alt="AWS">
                            <figcaption>AWS EC2</figcaption>
                        </figure>
                        <figure><img src="icons/docker.svg" alt="Docker">
                            <figcaption>Docker</figcaption>
                        </figure>
                        <figure><img src="icons/githubactions.svg" alt="GitHub Actions">
                            <figcaption>GHA</figcaption>
                        </figure>
                        <figure><img src="icons/gitlab.svg" alt="GitLab CI">
                            <figcaption>GitLab CI</figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Tools -->
                <div class="stack-group">
                    <h4>Tools</h4>
                    <div class="icons">
                        <figure><img src="icons/postman.svg" alt="Postman">
                            <figcaption>Postman</figcaption>
                        </figure>
                        <figure><img src="icons/visualstudiocode.svg" alt="VS Code">
                            <figcaption>VS Code</figcaption>
                        </figure>
                        <figure><img src="icons/navicat.svg" alt="Navicat">
                            <figcaption>Navicat</figcaption>
                        </figure>
                        <figure><img src="icons/termius.svg" alt="Termius">
                            <figcaption>Termius</figcaption>
                        </figure>
                        <figure><img src="icons/git.svg" alt="Git">
                            <figcaption>Git</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PROJECT HIGHLIGHTS -->
    <section id="projects" class="section">
        <div class="container">
            <span class="headline">Project Highlights</span>
            <h2>ผลงานเด่น</h2>
            <div class="cards">
                <!-- Card 1 -->
                <article class="card" style="grid-column:span 6">
                    <div class="thumb"><img src="./project/stock.png" alt="SCM Stock System" loading="lazy" style="width:100%;height:100%;object-fit:cover" /></div>
                    <div class="body">
                        <div class="badge">SCM Stock System · 7 Countries</div>
                        <h3 style="margin:10px 0 6px">สต็อกข้ามประเทศ · ตรงเวลา · เสถียร</h3>
                        <p style="margin:0;color:#cfe3ff">ออกแบบและดูแลระบบสต็อก 7 ประเทศ พร้อม ETL, API Integration และ Dashboard ตรวจสุขภาพระบบ</p>
                    </div>
                </article>
                <!-- Card 2 -->
                <article class="card" style="grid-column:span 6">
                    <div class="thumb"><img src="https://images.unsplash.com/photo-1555949963-aa79dcee981d?q=80&w=1600&auto=format&fit=crop" alt="SCM E‑Learning" loading="lazy" style="width:100%;height:100%;object-fit:cover" /></div>
                    <div class="body">
                        <div class="badge">SCM E‑Learning Platform</div>
                        <h3 style="margin:10px 0 6px">วิดีโอ · Progress · Vimeo API</h3>
                        <p style="margin:0;color:#cfe3ff">ระบบเรียนออนไลน์ครบวงจร เชื่อม Vimeo, จัดการคอร์ส, ติดตามความก้าวหน้า และวิเคราะห์การใช้งาน</p>
                    </div>
                </article>
                <!-- Card 3 -->
                <article class="card" style="grid-column:span 6">
                    <div class="thumb"><img src="https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?q=80&w=1600&auto=format&fit=crop" alt="POS on AWS" loading="lazy" style="width:100%;height:100%;object-fit:cover" /></div>
                    <div class="body">
                        <div class="badge">SCM POS on AWS</div>
                        <h3 style="margin:10px 0 6px">แยก Backend/Nuxt + Payment/Shipping API</h3>
                        <p style="margin:0;color:#cfe3ff">สถาปัตยกรรมทันสมัย รองรับสเกล และการชำระเงิน/จัดส่งแบบเรียลไทม์</p>
                    </div>
                </article>
                <!-- Card 4 -->
                <article class="card" style="grid-column:span 6">
                    <div class="thumb"><img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f?q=80&w=1600&auto=format&fit=crop" alt="Automation Pipeline" loading="lazy" style="width:100%;height:100%;object-fit:cover" /></div>
                    <div class="body">
                        <div class="badge">Automation · Python ETL</div>
                        <h3 style="margin:10px 0 6px">รวมข้อมูลหลายระบบ → PostgreSQL + GDrive</h3>
                        <p style="margin:0;color:#cfe3ff">ออกแบบ ETL แปลง/โหลดข้อมูลแบบตั้งเวลา เชื่อม Google Drive API และตรวจสอบความสมบูรณ์อัตโนมัติ</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="section">
        <div class="container">
            <span class="headline">Skill Stack</span>
            <h2>เครื่องมือและทักษะ</h2>
            <div class="skills">
                <div class="skill">
                    <h4>Languages & Frameworks</h4>
                    <div class="list">
                        <span class="chip">PHP (Laravel 8, CI2–4)</span><span class="chip">JS (Vue3, Nuxt.js, Node.js, NestJS, TS)</span><span class="chip">Python (pandas, SQLAlchemy, ETL)</span>
                    </div>
                </div>
                <div class="skill">
                    <h4>Database</h4>
                    <div class="list"><span class="chip">MySQL</span><span class="chip">PostgreSQL</span><span class="chip">MS SQL Server</span><span class="chip">MongoDB</span></div>
                </div>
                <div class="skill">
                    <h4>Infra & Tools</h4>
                    <div class="list"><span class="chip">Apache2</span><span class="chip">Ubuntu/CentOS</span><span class="chip">AWS EC2</span><span class="chip">Docker</span><span class="chip">GitLab CI/CD</span><span class="chip">Redis</span><span class="chip">RabbitMQ</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section">
        <div class="container">
            <span class="headline">Contact</span>
            <h2>ติดต่อร่วมงาน</h2>
            <div class="grid" style="grid-template-columns:1.2fr .8fr;align-items:center">
                <div>
                    <p class="lead">สนใจทำระบบ ออกแบบสถาปัตยกรรม วาง DevOps/Automation หรือทำ Product จริงจัง สามารถติดต่อได้ที่</p>
                    <ul style="list-style:none;padding:0;margin:12px 0 0;color:#cfe3ff">
                        <li>📧 อีเมล: <a href="mailto:chatchai@example.com">chatchai@example.com</a></li>
                        <li>🐙 GitHub: <a href="#">github.com/chatchai</a></li>
                        <li>💼 LinkedIn: <a href="#">linkedin.com/in/chatchai</a></li>
                        <li>📍 นนทบุรี · กรุงเทพฯ</li>
                    </ul>
                </div>
                <figure style="border:1px solid var(--line);border-radius:16px;overflow:hidden;background:rgba(255,255,255,.03)">
                    <!-- เปลี่ยนภาพฉากทำงาน/ทีม -->
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=1600&auto=format&fit=crop" alt="Team working scene" loading="lazy" />
                    <figcaption style="padding:10px 14px;color:#9fb3da">ทีมเล็กที่ขับเคลื่อนระบบใหญ่</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            © <span id="y"></span> Chatchai Booranawiselkul · Senior Programmer · System Integrator
        </div>
    </footer>

    <script>
        // ปีปัจจุบัน
        document.getElementById('y').textContent = new Date().getFullYear();
    </script>
</body>

</html>