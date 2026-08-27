<?php require __DIR__ . '/inc/icons.php'; ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Chatchai Booranawiselkul — Senior Programmer</title>
    <meta name="description" content="Portfolio of Chatchai Booranawiselkul, Senior Programmer — full-stack engineering, system integration, cloud and AI engineering." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Prompt:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #0b1726;
            --deep: #111a2b;
            --card: #151f31;
            --muted: #c9d6f0;
            --brand: #2ea1ff;
            --accent: #7ac7ff;
            --line: rgba(255, 255, 255, .12);
            --ok: #6ee7b7;
            --text: #eaf1ff;
        }

        * { box-sizing: border-box }

        body {
            margin: 0;
            background: linear-gradient(180deg, var(--deep), #0a1020 60%);
            color: var(--text);
            font-family: Prompt, Inter, system-ui, sans-serif;
            font-size: 16px;
            line-height: 1.55;
        }

        a { color: var(--brand); text-decoration: none }

        img {
            max-width: 100%;
            display: block
        }

        img.circle {
            border-radius: 50%;
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover
        }

        .container {
            width: min(1120px, 92vw);
            margin: 0 auto;
            padding: 0 20px
        }

        .grid { display: grid; gap: 24px }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 18px;
            border-radius: 12px;
            background: linear-gradient(90deg, var(--brand), var(--accent));
            color: #001833;
            font-weight: 700
        }

        .btn-ghost {
            background: transparent;
            border: 1px solid var(--line);
            color: #d7ecff;
        }

        header.nav {
            position: sticky;
            top: 0;
            backdrop-filter: blur(8px);
            background: rgba(10, 16, 32, .72);
            border-bottom: 1px solid var(--line);
            z-index: 30
        }

        header.nav .inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 12px 0
        }

        .logo { font-weight: 800; letter-spacing: .2px; color: #eaf1ff }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            align-items: center;
            justify-content: flex-end;
        }

        .pill {
            border: 1px solid var(--line);
            border-radius: 999px;
            padding: 6px 12px;
            color: #b9c6e4;
            font-size: 13px;
        }

        .hero { position: relative; isolation: isolate }

        .hero-wrap {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 36px;
            align-items: center;
            padding: 56px 0 28px
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

        .kpi b { font-size: 22px }

        .hero .bg-shape {
            position: absolute;
            inset: -10% -20% auto -20%;
            height: 60vmin;
            background:
                radial-gradient(60% 60% at 30% 30%, rgba(46, 161, 255, .25), transparent 60%),
                radial-gradient(50% 50% at 70% 60%, rgba(122, 199, 255, .12), transparent 60%);
            filter: blur(30px);
            z-index: -1
        }

        .section { padding: 42px 0; scroll-margin-top: 76px }

        .headline {
            font-size: 12px;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: #9fb3da
        }

        h1 {
            font-size: clamp(28px, 4vw, 42px);
            line-height: 1.15;
            margin: 0 0 10px
        }

        h2 {
            font-size: clamp(22px, 3vw, 32px);
            line-height: 1.2;
            margin: 0 0 12px
        }

        h3 { margin: 8px 0; font-size: 1.05rem; line-height: 1.35 }

        p.lead { color: #cfe3ff; margin: 0 0 12px }

        .role-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 0 0 14px;
            padding: 0;
            list-style: none;
        }

        .role-list li {
            border: 1px solid rgba(46, 161, 255, .35);
            color: #d7ecff;
            border-radius: 999px;
            padding: 5px 12px;
            font-size: 13px;
            font-weight: 650;
        }

        .pipeline {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            align-items: center;
            margin: 16px 0 0;
        }

        .pipeline span {
            background: rgba(255, 255, 255, .05);
            border: 1px solid var(--line);
            border-radius: 999px;
            padding: 6px 10px;
            font-size: 12px;
            font-weight: 700;
            color: #d7ecff;
        }

        .pipeline i {
            font-style: normal;
            color: var(--brand);
            font-weight: 800;
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
            min-height: 220px
        }

        .scene .pic img {
            object-fit: cover;
            width: 100%;
        }

        .scene .cap { padding: 18px 18px 22px }

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
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, .06);
            border: 1px solid var(--line);
            padding: 6px 10px;
            border-radius: 999px;
            color: #cfe3ff;
            font-size: 12px
        }

        .chip .tech-icon,
        .chip .tech-icon svg {
            width: 14px;
            height: 14px;
        }

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
            background: #0f1a30
        }

        .card .thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        .arch-card {
            background: rgba(255, 255, 255, .03);
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 20px;
        }

        .flow {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            align-items: center;
        }

        .flow b {
            background: #0f1a30;
            border: 1px solid var(--line);
            color: #eaf1ff;
            border-radius: 10px;
            padding: 8px 12px;
            font-size: 13px;
            font-weight: 700;
        }

        .flow i {
            font-style: normal;
            color: var(--brand);
            font-weight: 800;
        }

        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 10px 0 18px
        }

        .fbtn {
            background: transparent;
            border: 1px solid var(--line);
            color: var(--text);
            padding: 8px 12px;
            border-radius: 999px;
            cursor: pointer;
            font-weight: 700;
            font-family: inherit;
        }

        .fbtn.active {
            background: var(--brand);
            color: #081018;
            border-color: transparent
        }

        .work-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            align-items: stretch
        }

        .work-card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            height: 100%;
            break-inside: avoid;
        }

        .work-card.featured {
            grid-column: 1 / -1;
        }

        .work-card header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 12px
        }

        .work-card h3 { margin: 0; font-size: 1.05rem }

        .mini-icons {
            display: flex;
            gap: 6px;
            align-items: center;
            flex-shrink: 0;
        }

        .tech-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            flex: 0 0 auto;
        }

        .tech-icon svg {
            width: 22px;
            height: 22px;
            display: block;
        }

        .mini-icons .tech-icon {
            width: 22px;
            height: 22px;
        }

        .mini-icons .tech-icon svg {
            width: 18px;
            height: 18px;
        }

        .work-card p {
            color: var(--muted);
            margin: 2px 0 4px
        }

        .scope {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            align-items: center;
            color: #9fb3da;
            font-size: 12px;
            font-weight: 650;
        }

        .scope i { font-style: normal; color: var(--brand); }

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
            border: 1px solid var(--line);
            border-radius: 999px;
            color: var(--muted);
            font-size: .85rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .work-card .chips .tech-icon,
        .work-card .chips .tech-icon svg {
            width: 14px;
            height: 14px;
        }

        .stack-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            align-items: stretch
        }

        .stack-group {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            height: 100%;
            break-inside: avoid;
        }

        .stack-group h4 { margin: 0 0 10px }

        .icons {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(84px, 1fr));
            gap: 12px
        }

        .icon-fig {
            margin: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
        }

        .icon-fig .tech-icon {
            width: 40px;
            height: 40px;
            background: #f4f7fb;
            border: 1px solid rgba(255,255,255,.14);
            border-radius: 12px;
        }

        .icon-fig .tech-icon svg {
            width: 24px;
            height: 24px;
        }

        .icon-fig figcaption {
            font-size: .78rem;
            color: var(--muted);
            line-height: 1.2;
        }

        footer {
            padding: 28px 0 56px;
            color: #9fb3da;
            border-top: 1px solid var(--line);
            margin-top: 42px
        }

        @media (max-width:980px) {
            .hero-wrap, .contact-grid { grid-template-columns: 1fr !important }
            .kpis { grid-template-columns: repeat(3, 1fr) }
            .scene { grid-template-columns: 1fr }
            .work-grid, .stack-grid { grid-template-columns: 1fr }
            .work-card.featured { grid-column: auto }
        }

        @media (max-width:640px) {
            .kpis { grid-template-columns: 1fr 1fr }
            img.circle { max-width: 280px; margin: 0 auto }
            header.nav .inner { flex-wrap: wrap; }
            .nav-links { justify-content: flex-start; }
        }

        @media print {
            header.nav, .hero .bg-shape, .filters { display: none !important; }
            body { background: #fff; color: #1a2433; font-size: 12pt; }
            a { color: inherit; }
            .section { padding: 16px 0; break-inside: auto; }
            .section-block, .keep-with-next, .work-card, .stack-group, .scene, .card {
                break-inside: avoid;
                page-break-inside: avoid;
            }
            h2 {
                break-after: avoid;
                page-break-after: avoid;
            }
            .sheet-print-hide { display: none !important; }
        }
    </style>
</head>

<body>
    <header class="nav">
        <div class="container inner">
            <a class="logo" href="#top">Chatchai Booranawiselkul</a>
            <nav class="nav-links">
                <a class="pill" href="#story">Story</a>
                <a class="pill" href="#architecture">Architecture</a>
                <a class="pill" href="#work">Projects</a>
                <a class="pill" href="#stack">Skills</a>
                <a class="pill" href="#contact">Contact</a>
                <a class="pill" href="./resume.php">Resume PDF</a>
            </nav>
        </div>
    </header>

    <section class="hero" id="top">
        <div class="bg-shape"></div>
        <div class="container hero-wrap">
            <div>
                <span class="headline">Resume / Portfolio</span>
                <h1>CHATCHAI BOORANAWISELKUL</h1>
                <p class="lead" style="font-weight:800;color:#7ec8ff;margin-bottom:8px">Senior Programmer</p>
                <ul class="role-list">
                    <li>Full-Stack Engineering</li>
                    <li>System Integration</li>
                    <li>Cloud &amp; AI Engineering</li>
                </ul>
                <p class="lead">Hands-on engineer ที่ทำงานครบวงจรจาก Requirement จนถึง Production — ออกแบบ, พัฒนา, เชื่อมระบบ, review, deploy และดูแลระบบจริง</p>
                <div class="pipeline" aria-label="Engineering path">
                    <span>Requirement</span><i>→</i>
                    <span>Architecture</span><i>→</i>
                    <span>Database</span><i>→</i>
                    <span>Development</span><i>→</i>
                    <span>Integration</span><i>→</i>
                    <span>Testing</span><i>→</i>
                    <span>CI/CD</span><i>→</i>
                    <span>Deployment</span><i>→</i>
                    <span>Production</span>
                </div>
                <div class="kpis">
                    <div class="kpi"><b>6+</b><div>Years hands-on</div></div>
                    <div class="kpi"><b>50+</b><div>โปรเจกต์ที่ส่งมอบ</div></div>
                    <div class="kpi"><b>7</b><div>ประเทศที่รองรับ</div></div>
                </div>
                <div style="margin-top:18px;display:flex;gap:10px;flex-wrap:wrap">
                    <a href="./resume.php" class="btn">Resume / PDF</a>
                    <a href="#work" class="pill">ดูผลงานเด่น</a>
                    <a href="#contact" class="pill">ติดต่อร่วมงาน</a>
                </div>
            </div>
            <figure style="border:1px solid var(--line);border-radius:20px;overflow:hidden;background:rgba(255,255,255,.03);padding-top:5px">
                <img src="./img/68.jpg" alt="Chatchai — working scene" loading="lazy" class="circle" />
                <figcaption style="padding:10px 14px;color:#9fb3da">Chatchai — Senior Programmer</figcaption>
            </figure>
        </div>
    </section>

    <section id="story" class="section">
        <div class="container">
            <div class="keep-with-next">
                <span class="headline">เรื่องราวในฉาก</span>
                <h2>ฉากชีวิต — จากศูนย์สู่โปรแกรมเมอร์อาวุโส</h2>
            </div>

            <div class="scenes">
                <article class="scene">
                    <div class="pic">
                        <img src="./img/54.png" alt="เริ่มต้นจากโรงงานและงานหนัก" loading="lazy" />
                    </div>
                    <div class="cap">
                        <span class="tag">2015–2016 · จุดเริ่มต้น</span>
                        <h3>โรงงานไทยเอ็นเค — พนักงานจัดส่ง + เรียน กศน. วันอาทิตย์</h3>
                        <p>ทำงานและเรียนไปพร้อมกันจนจบมัธยมปลาย ฝึกความรับผิดชอบ การตรงต่อเวลา และการจัดการตนเองในสถานการณ์ที่มีแรงกดดันจริง</p>
                        <div class="chips"><span class="chip">วินัย</span><span class="chip">รับผิดชอบ</span><span class="chip">ฐานชีวิต</span></div>
                    </div>
                </article>

                <article class="scene">
                    <div class="pic"><img src="./img/55.jpg" alt="วินัยทหารและการฝึกหนัก" loading="lazy" /></div>
                    <div class="cap">
                        <span class="tag">2016–2017 · สร้างต้นทุนภายใน</span>
                        <h3>สมัครใจเป็นทหารประจำการ — กองทัพอากาศ (หน่วยปฏิบัติการพิเศษ)</h3>
                        <p>เข้ารับการฝึกและทำงานภายใต้ระเบียบของหน่วยปฏิบัติการป้องกันประเทศ เรียนรู้การทำงานเป็นทีม ความพร้อมรับมือกับแรงกดดัน และการรับผิดชอบต่อภารกิจที่ต้องปฏิบัติอย่างแม่นยำ</p>
                        <div class="chips"><span class="chip">วินัยเหล็ก</span><span class="chip">ใจนิ่ง</span><span class="chip">ทำจริง</span></div>
                    </div>
                </article>

                <article class="scene">
                    <div class="pic"><img src="./img/60.jpg" alt="เกษตร ฟาร์มกุ้ง และการบริหารความเสี่ยง" loading="lazy" /></div>
                    <div class="cap">
                        <span class="tag">2018 · ผู้ประกอบการ</span>
                        <h3>ฟาร์มกุ้งเชิงเกษตร — บริหารความเสี่ยงและเงินทุน</h3>
                        <p>เรียนรู้จากการผลิตจริงเรื่องต้นทุน การควบคุมคุณภาพน้ำ การวางแผนและตัดสินใจจากข้อมูลหน้างาน การจัดการความเสี่ยง และการใช้เงินทุนอย่างมีเหตุผล</p>
                        <div class="chips"><span class="chip">วิเคราะห์</span><span class="chip">กระแสเงินสด</span><span class="chip">การทดลอง</span></div>
                    </div>
                </article>

                <article class="scene">
                    <div class="pic" style="place-content: space-around; background-color: white; padding:3px; margin:3px">
                        <img src="https://www.tlogical.com/assets/Tlogical_Logo_Navy-DNyIBgy7.png" alt="เริ่มสาย IT ที่บริษัทแรก" loading="lazy" />
                    </div>
                    <div class="cap">
                        <span class="tag">2019–2020 · First Step</span>
                        <h3>T.Logical Co., Ltd. — Programmer (Web MIS / Infrastructure)</h3>
                        <p>เริ่มต้นเข้าสู่สาย Software Engineering จากการพัฒนา Web MIS, Database, Infrastructure และระบบภายในองค์กร เช่น Expense / Campaign</p>
                        <div class="chips"><span class="chip">PHP</span><span class="chip">MySQL</span><span class="chip">Infrastructure</span><span class="chip">MIS</span></div>
                    </div>
                </article>

                <article class="scene">
                    <div class="pic" style="place-content: space-around; background-color: white; padding:3px; margin:3px">
                        <img src="https://www.successmore.com/layout/images/logo-header.svg" alt="ดูแลระบบองค์กร" loading="lazy" />
                    </div>
                    <div class="cap">
                        <span class="tag">2020–Now · System Integrator</span>
                        <h3>Successmore Being PCL — Senior Programmer / System Integrator</h3>
                        <p>ทำงานกับระบบธุรกิจที่ต้องใช้งานจริงหลายประเทศ ครอบคลุม Solution, Architecture, Development, Integration, Testing, UAT, Deployment และ Production Support — เชื่อม API, POS, SCM, E-Commerce, Logistics และ Reporting ให้ทำงานร่วมกันได้จริง</p>
                        <div class="chips"><span class="chip">Laravel 8</span><span class="chip">NestJS</span><span class="chip">Nuxt 3</span><span class="chip">AWS</span><span class="chip">Docker</span><span class="chip">GitLab CI/CD</span></div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="architecture" class="section">
        <div class="container">
            <div class="keep-with-next">
                <span class="headline">Production Architecture</span>
                <h2>จากแอปพลิเคชันสู่ระบบบนคลาวด์</h2>
                <p class="lead">Frontend Nuxt.js · Backend NestJS / Node.js · PostgreSQL · Redis · Docker · GitLab CI/CD · AWS</p>
                <div class="arch-card">
                    <div class="flow">
                        <b>User</b><i>→</i>
                        <b>Cloudflare</b><i>→</i>
                        <b>Load Balancer</b><i>→</i>
                        <b>Nuxt.js</b><i>→</i>
                        <b>NestJS</b><i>→</i>
                        <b>PostgreSQL / Redis / Object Storage</b>
                    </div>
                    <div class="chips" style="margin-top:14px">
                        <span class="chip"><?= tech_icon('docker', 14) ?> Docker</span>
                        <span class="chip"><?= tech_icon('gitlab', 14) ?> GitLab CI/CD</span>
                        <span class="chip"><?= tech_icon('amazonaws', 14) ?> AWS</span>
                        <span class="chip"><?= tech_icon('nginx', 14) ?> Nginx</span>
                        <span class="chip"><?= tech_icon('linux', 14) ?> Linux</span>
                        <span class="chip"><?= tech_icon('cloudflare', 14) ?> Cloudflare</span>
                        <span class="chip">Monitoring</span>
                        <span class="chip">Backup / DR</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="section">
        <div class="container">
            <div class="keep-with-next">
                <span class="headline">Selected Technical Projects</span>
                <h2>ผลงานเด่น</h2>
            </div>

            <div class="filters">
                <button class="fbtn active" data-filter="all" type="button">ทั้งหมด</button>
                <button class="fbtn" data-filter="web" type="button">Web</button>
                <button class="fbtn" data-filter="api" type="button">API</button>
                <button class="fbtn" data-filter="mobile" type="button">Mobile</button>
                <button class="fbtn" data-filter="data" type="button">Data/ETL</button>
                <button class="fbtn" data-filter="infra" type="button">Infra/Ops</button>
                <button class="fbtn" data-filter="ai" type="button">AI</button>
            </div>

            <div class="work-grid">
                <article class="work-card featured" data-tags="api mobile infra web">
                    <header>
                        <h3>POS / Enterprise Platform</h3>
                        <div class="mini-icons">
                            <?= tech_icon('nuxtdotjs', 18) ?>
                            <?= tech_icon('nestjs', 18) ?>
                            <?= tech_icon('amazonaws', 18) ?>
                        </div>
                    </header>
                    <div class="scope">
                        <span>POS</span><i>→</i><span>Member</span><i>→</i><span>Order</span><i>→</i><span>Payment</span><i>→</i>
                        <span>SCM</span><i>→</i><span>Logistics</span><i>→</i><span>Reporting</span><i>→</i>
                        <span>Mobile API</span><i>→</i><span>E-Commerce</span>
                    </div>
                    <p>ระบบ POS หลักใน production: transaction processing, member, PV / MLM, commission, payment, API integration และดูแลระบบบน AWS</p>
                    <ul class="chips">
                        <li><?= tech_icon('typescript', 14) ?> TypeScript / NestJS</li>
                        <li><?= tech_icon('nuxtdotjs', 14) ?> Nuxt.js</li>
                        <li><?= tech_icon('postgresql', 14) ?> PostgreSQL</li>
                        <li><?= tech_icon('redis', 14) ?> Redis</li>
                        <li><?= tech_icon('docker', 14) ?> Docker</li>
                        <li><?= tech_icon('gitlab', 14) ?> GitLab CI/CD</li>
                    </ul>
                </article>

                <article class="work-card" data-tags="api web">
                    <header>
                        <h3>TikTok Shop → POS → SCM</h3>
                        <div class="mini-icons">
                            <?= tech_icon('rest', 18) ?>
                            <?= tech_icon('webhook', 18) ?>
                        </div>
                    </header>
                    <p>เส้นทางออเดอร์และสต็อกจาก TikTok Shop เข้าสู่ POS และ SCM ให้สินค้า คำสั่งซื้อ และการจัดส่งอยู่ใน flow เดียวกัน</p>
                    <ul class="chips">
                        <li><?= tech_icon('rest', 14) ?> REST API</li>
                        <li><?= tech_icon('webhook', 14) ?> Webhook</li>
                        <li><?= tech_icon('nestjs', 14) ?> NestJS</li>
                    </ul>
                </article>

                <article class="work-card" data-tags="api">
                    <header>
                        <h3>Payment &amp; Banking Integration</h3>
                        <div class="mini-icons">
                            <?= tech_icon('payment', 18) ?>
                            <?= tech_icon('banking', 18) ?>
                        </div>
                    </header>
                    <p>เชื่อม Payment API และ Banking API เข้ากับ POS และระบบปฏิบัติการ รวมถึงการตามปัญหาใน production ร่วมกับผู้ให้บริการ</p>
                    <ul class="chips">
                        <li><?= tech_icon('payment', 14) ?> Payment API</li>
                        <li><?= tech_icon('banking', 14) ?> Banking API</li>
                        <li><?= tech_icon('webhook', 14) ?> Webhook</li>
                    </ul>
                </article>

                <article class="work-card" data-tags="api infra">
                    <header>
                        <h3>KEX / DHL Logistics</h3>
                        <div class="mini-icons">
                            <?= tech_icon('rest', 18) ?>
                            <?= tech_icon('nestjs', 18) ?>
                        </div>
                    </header>
                    <p>เชื่อมระบบขนส่งสำหรับสร้างพัสดุ ติดตามสถานะ และส่งงานจาก POS / SCM ไปยัง logistics partner</p>
                    <ul class="chips">
                        <li><?= tech_icon('rest', 14) ?> REST API</li>
                        <li><?= tech_icon('nestjs', 14) ?> NestJS</li>
                    </ul>
                </article>

                <article class="work-card" data-tags="data api">
                    <header>
                        <h3>Python ETL / ELT Reporting</h3>
                        <div class="mini-icons">
                            <?= tech_icon('python', 18) ?>
                            <?= tech_icon('postgresql', 18) ?>
                        </div>
                    </header>
                    <p>Pipeline รวบรวม ตรวจสอบ และแปลงข้อมูลจากหลายระบบให้อยู่ในรูปแบบที่ใช้รายงานและ audit ได้</p>
                    <ul class="chips">
                        <li><?= tech_icon('python', 14) ?> Python ETL</li>
                        <li><?= tech_icon('postgresql', 14) ?> PostgreSQL</li>
                    </ul>
                </article>

                <article class="work-card" data-tags="ai data api">
                    <header>
                        <h3>Enterprise AI / AECP</h3>
                        <div class="mini-icons">
                            <?= tech_icon('python', 18) ?>
                            <?= tech_icon('pgvector', 18) ?>
                        </div>
                    </header>
                    <p>ระบบ AI ภายในสำหรับค้นและช่วยงานจากข้อมูลปฏิบัติการ ใช้ LLM, RAG และ pgvector บน PostgreSQL</p>
                    <ul class="chips">
                        <li><?= tech_icon('fastapi', 14) ?> FastAPI</li>
                        <li><?= tech_icon('llm', 14) ?> LLM</li>
                        <li><?= tech_icon('rag', 14) ?> RAG</li>
                        <li><?= tech_icon('pgvector', 14) ?> pgvector</li>
                    </ul>
                </article>

                <article class="work-card" data-tags="api mobile">
                    <header>
                        <h3>Online Face Verification</h3>
                        <div class="mini-icons">
                            <?= tech_icon('rest', 18) ?>
                            <?= tech_icon('webhook', 18) ?>
                        </div>
                    </header>
                    <p>เชื่อมการยืนยันใบหน้าออนไลน์เข้ากับ flow การตรวจสอบตัวตนในงานจริงผ่าน API</p>
                    <ul class="chips">
                        <li><?= tech_icon('rest', 14) ?> REST API</li>
                        <li><?= tech_icon('webhook', 14) ?> Integration</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section id="projects" class="section">
        <div class="container">
            <div class="keep-with-next">
                <span class="headline">Project Highlights</span>
                <h2>ระบบที่มีภาพประกอบ</h2>
            </div>
            <div class="cards">
                <article class="card" style="grid-column:span 6">
                    <div class="thumb"><img src="./project/stock.png" alt="SCM Stock System" loading="lazy" /></div>
                    <div class="body">
                        <div class="badge">SCM Stock System · 7 Countries</div>
                        <h3>Stock Distribution · Multi-country Operations</h3>
                        <p style="margin:0;color:#cfe3ff">ระบบสต็อกที่รองรับธุรกิจหลายประเทศ พร้อม ETL, API Integration, Dashboard และ monitoring</p>
                    </div>
                </article>
                <article class="card" style="grid-column:span 6">
                    <div class="thumb"><img src="./project/ele.png" alt="SCM E-Learning" loading="lazy" /></div>
                    <div class="body">
                        <div class="badge">SCM E-Learning Platform</div>
                        <h3>Learning Flow · Progress Tracking · Vimeo API</h3>
                        <p style="margin:0;color:#cfe3ff">ระบบเรียนออนไลน์ รวมประสบการณ์ผู้เรียน การติดตามความก้าวหน้า วิดีโอ และรายงานผู้บริหาร</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="stack" class="section">
        <div class="container">
            <div class="keep-with-next">
                <span class="headline">Skill Stack</span>
                <h2>สิ่งที่ใช้ทำงานจริง</h2>
            </div>
            <div class="stack-grid">
                <div class="stack-group">
                    <h4>Backend</h4>
                    <div class="icons">
                        <?= tech_icon_caption('php', 'PHP') ?>
                        <?= tech_icon_caption('laravel', 'Laravel') ?>
                        <?= tech_icon_caption('nodedotjs', 'Node.js') ?>
                        <?= tech_icon_caption('nestjs', 'NestJS') ?>
                        <?= tech_icon_caption('typescript', 'TypeScript') ?>
                        <?= tech_icon_caption('python', 'Python') ?>
                    </div>
                </div>
                <div class="stack-group">
                    <h4>Frontend</h4>
                    <div class="icons">
                        <?= tech_icon_caption('vuedotjs', 'Vue.js') ?>
                        <?= tech_icon_caption('nuxtdotjs', 'Nuxt.js') ?>
                        <?= tech_icon_caption('html5', 'HTML5') ?>
                        <?= tech_icon_caption('css3', 'CSS3') ?>
                        <?= tech_icon_caption('javascript', 'JavaScript') ?>
                        <?= tech_icon_caption('jquery', 'jQuery') ?>
                    </div>
                </div>
                <div class="stack-group">
                    <h4>Database</h4>
                    <div class="icons">
                        <?= tech_icon_caption('mysql', 'MySQL') ?>
                        <?= tech_icon_caption('postgresql', 'PostgreSQL') ?>
                        <?= tech_icon_caption('mongodb', 'MongoDB') ?>
                        <?= tech_icon_caption('redis', 'Redis') ?>
                        <?= tech_icon_caption('microsoftsqlserver', 'SQL Server') ?>
                    </div>
                </div>
                <div class="stack-group">
                    <h4>Cloud / Infrastructure</h4>
                    <div class="icons">
                        <?= tech_icon_caption('amazonaws', 'AWS') ?>
                        <?= tech_icon_caption('docker', 'Docker') ?>
                        <?= tech_icon_caption('linux', 'Linux') ?>
                        <?= tech_icon_caption('gitlab', 'GitLab CI/CD') ?>
                        <?= tech_icon_caption('cloudflare', 'Cloudflare') ?>
                        <?= tech_icon_caption('nginx', 'Nginx') ?>
                        <?= tech_icon_caption('ubuntu', 'Ubuntu') ?>
                        <?= tech_icon_caption('centos', 'CentOS') ?>
                    </div>
                </div>
                <div class="stack-group">
                    <h4>Tools</h4>
                    <div class="icons">
                        <?= tech_icon_caption('git', 'Git') ?>
                        <?= tech_icon_caption('visualstudiocode', 'VS Code') ?>
                        <?= tech_icon_caption('postman', 'Postman') ?>
                        <?= tech_icon_caption('gnubash', 'Terminal') ?>
                    </div>
                </div>
                <div class="stack-group">
                    <h4>AI / Data</h4>
                    <div class="icons">
                        <?= tech_icon_caption('python', 'Python') ?>
                        <?= tech_icon_caption('fastapi', 'FastAPI') ?>
                        <?= tech_icon_caption('pgvector', 'pgvector') ?>
                        <?= tech_icon_caption('llm', 'LLM') ?>
                        <?= tech_icon_caption('rag', 'RAG') ?>
                        <?= tech_icon_caption('vectordb', 'Vector DB') ?>
                    </div>
                </div>
                <div class="stack-group">
                    <h4>Integration</h4>
                    <div class="icons">
                        <?= tech_icon_caption('rest', 'REST API') ?>
                        <?= tech_icon_caption('webhook', 'Webhook') ?>
                        <?= tech_icon_caption('payment', 'Payment API') ?>
                        <?= tech_icon_caption('banking', 'Banking API') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <div class="keep-with-next">
                <span class="headline">Contact</span>
                <h2>ติดต่อร่วมงาน</h2>
            </div>
            <div class="grid contact-grid" style="grid-template-columns:1.2fr .8fr;align-items:center">
                <div>
                    <p class="lead">งานที่เริ่มจาก Requirement, ออกแบบ Solution, เชื่อมระบบ, Deployment และดูแล Production รวมถึง Web, API Integration, Data Workflow, DevOps หรือ AI-augmented engineering</p>
                    <ul style="list-style:none;padding:0;margin:12px 0 0;color:#cfe3ff">
                        <li>อีเมล: <a href="mailto:plue3496@gmail.com">plue3496@gmail.com</a></li>
                        <li>โทร: <a href="tel:+66811445263">081-144-5263</a></li>
                        <li>GitHub: <a href="https://github.com/PlueSuccessmore" target="_blank" rel="noopener">github.com/PlueSuccessmore</a></li>
                        <li>นนทบุรี · กรุงเทพฯ</li>
                    </ul>
                    <div style="margin-top:16px"><a class="btn" href="./resume.php">เปิด Resume สำหรับพิมพ์ PDF</a></div>
                </div>
                <div class="arch-card">
                    <h3 style="margin-top:0">ตำแหน่งปัจจุบัน</h3>
                    <p class="lead" style="margin:0">Senior Programmer<br>Full-Stack Engineering<br>System Integration<br>Cloud &amp; AI Engineering</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">© <span id="y"></span> Chatchai Booranawiselkul · Senior Programmer · System Integrator</div>
    </footer>

    <script>
        document.getElementById('y').textContent = new Date().getFullYear();
        document.querySelectorAll('.fbtn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.fbtn').forEach(function (b) { b.classList.remove('active'); });
                btn.classList.add('active');
                var f = btn.getAttribute('data-filter');
                document.querySelectorAll('.work-card').forEach(function (card) {
                    var tags = card.getAttribute('data-tags') || '';
                    card.style.display = (f === 'all' || tags.indexOf(f) !== -1) ? '' : 'none';
                });
            });
        });
    </script>
</body>

</html>
