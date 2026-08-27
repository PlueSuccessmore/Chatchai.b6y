<?php require __DIR__ . '/inc/icons.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Chatchai Booranawiselkul — Senior Programmer</title>
<meta name="description" content="Resume of Chatchai Booranawiselkul, Senior Programmer — full-stack engineering, system integration, cloud and AI engineering." />
<style>
  :root {
    --navy: #0e1a2b;
    --navy-2: #15253d;
    --accent: #2ea1ff;
    --text: #1a2433;
    --muted: #5b6b80;
    --line: #d7dee8;
    --soft: #f3f6fb;
    --card: #ffffff;
  }
  * { box-sizing: border-box; }
  html, body {
    margin: 0;
    padding: 0;
    background: #e8eef6;
    color: var(--text);
    font: 15px/1.5 Inter, "Segoe UI", Helvetica, Arial, sans-serif;
  }
  a { color: inherit; text-decoration: none; }
  .screen-bar {
    position: sticky;
    top: 0;
    z-index: 20;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    padding: 12px 18px;
    background: var(--navy);
    color: #eaf1ff;
  }
  .screen-bar a, .screen-bar button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    border: 1px solid rgba(255,255,255,.18);
    background: transparent;
    color: #eaf1ff;
    border-radius: 999px;
    padding: 8px 14px;
    cursor: pointer;
    font-weight: 650;
    font-size: 13px;
  }
  .screen-bar .primary {
    background: linear-gradient(90deg, var(--accent), #7ac7ff);
    color: #001833;
    border-color: transparent;
  }
  .sheet {
    width: min(210mm, calc(100% - 24px));
    margin: 24px auto 48px;
    background: var(--card);
    box-shadow: 0 18px 50px rgba(14, 26, 43, .18);
    border-radius: 12px;
    overflow: hidden;
  }
  .masthead {
    background: linear-gradient(160deg, var(--navy) 0%, var(--navy-2) 70%, #1a3a63 100%);
    color: #eaf1ff;
    padding: 22px 32px 16px;
  }
  .masthead h1 {
    margin: 0 0 6px;
    font-size: 28px;
    letter-spacing: .02em;
    line-height: 1.15;
  }
  .role {
    margin: 0 0 10px;
    font-size: 16px;
    font-weight: 700;
    color: #7ec8ff;
  }
  .focus {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin: 0 0 14px;
  }
  .focus span {
    border: 1px solid rgba(126, 200, 255, .35);
    color: #d7ecff;
    border-radius: 999px;
    padding: 4px 10px;
    font-size: 12px;
    letter-spacing: .02em;
  }
  .contact-row {
    display: flex;
    flex-wrap: wrap;
    gap: 8px 16px;
    font-size: 12.5px;
    color: #c9d6f0;
  }
  .contact-row a { border-bottom: 1px dotted rgba(255,255,255,.25); }
  .body {
    padding: 16px 32px 18px;
  }
  .resume-section { margin: 0 0 11px; }
  .section-heading {
    margin: 0 0 8px;
    font-size: 11.5px;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: var(--navy);
    border-bottom: 1.5px solid var(--navy);
    padding-bottom: 4px;
    font-weight: 800;
  }
  .keep-with-next {
    break-inside: avoid;
    page-break-inside: avoid;
    break-after: auto;
  }
  .section-heading {
    break-after: avoid;
    page-break-after: avoid;
  }
  .pipeline {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    align-items: center;
    background: var(--soft);
    border: 1px solid var(--line);
    border-radius: 10px;
    padding: 10px 12px;
    margin: 0 0 8px;
  }
  .pipeline b {
    font-size: 10.5px;
    font-weight: 750;
    color: var(--navy);
  }
  .pipeline i {
    font-style: normal;
    color: var(--accent);
    font-weight: 800;
  }
  .lead {
    margin: 0;
    color: var(--text);
    font-size: 13.5px;
    line-height: 1.55;
  }
  .job, .project, .edu, .arch-block, .skill-group {
    break-inside: avoid;
    page-break-inside: avoid;
  }
  .job { margin: 0 0 8px; }
  .job-continue { margin-top: -6px; }
  .job-head, .edu-head {
    display: flex;
    justify-content: space-between;
    gap: 12px;
    align-items: baseline;
  }
  .job h3, .project h3, .edu h3 {
    margin: 0;
    font-size: 14px;
    line-height: 1.3;
  }
  .muted { color: var(--muted); font-weight: 600; font-size: 12.5px; white-space: nowrap; }
  .org { color: var(--muted); font-size: 12.5px; margin: 2px 0 4px; }
  ul {
    margin: 4px 0 0;
    padding: 0 0 0 18px;
  }
  li {
    margin: 3px 0;
    font-size: 13px;
    line-height: 1.45;
    break-inside: avoid;
    page-break-inside: avoid;
    orphans: 3;
    widows: 3;
  }
  .project {
    display: block;
    width: 100%;
    padding: 5px 0;
    border-bottom: 1px solid var(--line);
    break-inside: avoid;
    page-break-inside: avoid;
  }
  .project h3 {
    break-after: avoid;
    page-break-after: avoid;
  }
  .project:last-child { border-bottom: 0; }
  .project p {
    margin: 3px 0 6px;
    font-size: 13px;
    line-height: 1.45;
    color: #243044;
  }
  .tags {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
  }
  .tag {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: var(--soft);
    border: 1px solid var(--line);
    border-radius: 999px;
    padding: 2px 8px 2px 5px;
    font-size: 11px;
    color: #334155;
    line-height: 1;
  }
  .tech-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 1em;
    height: 1em;
    flex: 0 0 auto;
    vertical-align: middle;
  }
  .tech-icon svg {
    width: 16px;
    height: 16px;
    display: block;
  }
  .arch {
    display: grid;
    gap: 10px;
  }
  .flow {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    align-items: center;
  }
  .flow span {
    background: var(--navy);
    color: #eaf1ff;
    border-radius: 8px;
    padding: 5px 8px;
    font-size: 10.5px;
    font-weight: 700;
  }
  .flow i {
    font-style: normal;
    color: var(--accent);
    font-weight: 800;
  }
  .support {
    color: var(--muted);
    font-size: 12.5px;
    margin: 0;
  }
  .skills {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 8px 12px;
  }
  .skill-group h4 {
    margin: 0 0 6px;
    font-size: 12.5px;
    color: var(--navy);
  }
  .icon-row {
    display: flex;
    flex-wrap: wrap;
    gap: 6px 8px;
  }
  .icon-fig {
    margin: 0;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: var(--soft);
    border: 1px solid var(--line);
    border-radius: 999px;
    padding: 3px 8px 3px 5px;
  }
  .icon-fig .tech-icon svg { width: 16px; height: 16px; }
  .icon-fig figcaption {
    font-size: 11.5px;
    color: #334155;
  }
  .print-footer-note {
    margin-top: 8px;
    font-size: 11px;
    color: var(--muted);
  }
  @page {
    size: A4;
    margin: 11mm 12mm 15mm 12mm;
    @bottom-left {
      content: "Chatchai Booranawiselkul  ·  Senior Programmer";
      font-size: 8pt;
      color: #5b6b80;
      font-family: Helvetica, Arial, sans-serif;
    }
    @bottom-right {
      content: "Page " counter(page);
      font-size: 8pt;
      color: #5b6b80;
      font-family: Helvetica, Arial, sans-serif;
    }
  }
  @media print {
    html, body { background: #fff; }
    .screen-bar { display: none !important; }
    .sheet {
      width: auto;
      margin: 0;
      box-shadow: none;
      border-radius: 0;
      overflow: visible;
    }
    .masthead, .body { padding-left: 0; padding-right: 0; }
    .masthead {
      padding: 0 0 12px;
      background: #0e1a2b !important;
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
      border-radius: 0;
    }
    .masthead { padding: 12px 8px 10px; }
    .body { padding: 10px 2px 0; }
    .skills { grid-template-columns: 1fr 1fr 1fr; }
    .print-footer-note { display: none; }
    a { border: 0; }
    * {
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
    }
  }
  @media (max-width: 720px) {
    .sheet { width: calc(100% - 16px); margin: 12px auto 32px; }
    .masthead, .body { padding: 18px 16px; }
    .skills { grid-template-columns: 1fr; }
    .job-head, .edu-head { flex-direction: column; gap: 2px; }
  }
</style>
</head>
<body>
  <div class="screen-bar">
    <a href="./index.php">← Portfolio</a>
    <button class="primary" type="button" onclick="window.print()">Print / Save PDF</button>
  </div>

  <main class="sheet">
    <header class="masthead">
      <h1>CHATCHAI BOORANAWISELKUL</h1>
      <p class="role">Senior Programmer</p>
      <div class="focus">
        <span>Full-Stack Engineering</span>
        <span>System Integration</span>
        <span>Cloud &amp; AI Engineering</span>
      </div>
      <div class="contact-row">
        <span>Ngamwongwan, Nonthaburi</span>
        <a href="tel:+66811445263">081-144-5263</a>
        <a href="mailto:plue3496@gmail.com">plue3496@gmail.com</a>
        <a href="https://github.com/PlueSuccessmore" target="_blank" rel="noopener">github.com/PlueSuccessmore</a>
      </div>
    </header>

    <div class="body">
      <section class="resume-section">
        <div class="keep-with-next">
          <h2 class="section-heading">Engineering Scope</h2>
          <div class="pipeline">
            <b>Requirement</b><i>→</i>
            <b>Architecture</b><i>→</i>
            <b>Database</b><i>→</i>
            <b>Development</b><i>→</i>
            <b>Integration</b><i>→</i>
            <b>Testing</b><i>→</i>
            <b>CI/CD</b><i>→</i>
            <b>Deployment</b><i>→</i>
            <b>Production</b>
          </div>
          <p class="lead">Hands-on Senior Programmer working end-to-end on production systems: POS, member, order, payment, SCM, logistics, reporting, mobile API, and e-commerce integration. Scope includes architecture, database, development, vendor/bank/payment/logistics coordination, UAT, GitLab CI/CD, deployment, and production troubleshooting.</p>
        </div>
      </section>

      <section class="resume-section">
        <div class="keep-with-next">
          <h2 class="section-heading">Experience</h2>
          <article class="job">
            <div class="job-head">
              <h3>Senior Programmer / System Integrator</h3>
              <span class="muted">2020–Present</span>
            </div>
            <div class="org">Successmore Being PCL</div>
            <ul>
              <li>Build and operate production systems across POS → Member → Order → Payment → SCM → Logistics → Reporting → Mobile API → E-Commerce.</li>
            </ul>
          </article>
        </div>
        <article class="job job-continue">
          <ul>
            <li>Backend APIs in NestJS / TypeScript; web clients in Nuxt.js; data stores in PostgreSQL and Redis; containers with Docker; infrastructure on AWS.</li>
            <li>Integrate payment, banking, and logistics APIs (including KEX / DHL) and keep them running in production.</li>
            <li>Python ETL/ELT for operational reporting; GitLab CI/CD for build and deploy; backup and production support.</li>
            <li>Code review, pull request review, task breakdown, debugging, architecture design, UAT, and vendor coordination.</li>
          </ul>
        </article>
        <article class="job">
          <div class="job-head">
            <h3>Programmer</h3>
            <span class="muted">2019–2020</span>
          </div>
          <div class="org">T.Logical Co., Ltd.</div>
          <ul>
            <li>Web MIS, corporate campaigns, expense system, and early mobile-POS APIs on PHP 5.2–7.x and MongoDB-backed services.</li>
          </ul>
        </article>
      </section>

      <section class="resume-section">
        <div class="keep-with-next">
          <h2 class="section-heading">Selected Technical Projects</h2>
          <article class="project">
            <h3>POS / Enterprise Platform</h3>
            <p>Core production POS covering member, order, payment, SCM, logistics, reporting, mobile API, and e-commerce integration. Includes transaction processing, PV / MLM business logic, commission, and day-to-day production operation on AWS.</p>
            <div class="tags">
              <span class="tag"><?= tech_icon('nuxtdotjs', 14) ?>Nuxt.js</span>
              <span class="tag"><?= tech_icon('nestjs', 14) ?>NestJS</span>
              <span class="tag"><?= tech_icon('typescript', 14) ?>TypeScript</span>
              <span class="tag"><?= tech_icon('postgresql', 14) ?>PostgreSQL</span>
              <span class="tag"><?= tech_icon('redis', 14) ?>Redis</span>
              <span class="tag"><?= tech_icon('docker', 14) ?>Docker</span>
              <span class="tag"><?= tech_icon('amazonaws', 14) ?>AWS</span>
              <span class="tag"><?= tech_icon('gitlab', 14) ?>GitLab CI/CD</span>
            </div>
          </article>
        </div>

        <article class="project">
          <h3>TikTok Shop → POS → SCM</h3>
          <p>Order and stock integration path from TikTok Shop into POS and SCM so catalog, inventory, and fulfillment stay on one operational flow.</p>
          <div class="tags">
            <span class="tag"><?= tech_icon('rest', 14) ?>REST API</span>
            <span class="tag"><?= tech_icon('webhook', 14) ?>Webhook</span>
            <span class="tag"><?= tech_icon('nestjs', 14) ?>NestJS</span>
            <span class="tag"><?= tech_icon('nuxtdotjs', 14) ?>POS / SCM</span>
          </div>
        </article>

        <article class="project">
          <h3>Payment &amp; Banking Integration</h3>
          <p>Payment and banking API integration for POS and related operational systems, including production troubleshooting with providers.</p>
          <div class="tags">
            <span class="tag"><?= tech_icon('payment', 14) ?>Payment API</span>
            <span class="tag"><?= tech_icon('banking', 14) ?>Banking API</span>
            <span class="tag"><?= tech_icon('rest', 14) ?>REST API</span>
            <span class="tag"><?= tech_icon('webhook', 14) ?>Webhook</span>
          </div>
        </article>

        <article class="project">
          <h3>KEX / DHL Logistics</h3>
          <p>Logistics API integration for shipment creation, tracking, and operational handoff from POS / SCM.</p>
          <div class="tags">
            <span class="tag"><?= tech_icon('rest', 14) ?>REST API</span>
            <span class="tag"><?= tech_icon('nestjs', 14) ?>NestJS</span>
            <span class="tag"><?= tech_icon('docker', 14) ?>Production</span>
          </div>
        </article>

        <article class="project">
          <h3>Python ETL / ELT Reporting</h3>
          <p>Production ETL/ELT to collect, validate, and transform data from multiple systems into reporting datasets.</p>
          <div class="tags">
            <span class="tag"><?= tech_icon('python', 14) ?>Python</span>
            <span class="tag"><?= tech_icon('postgresql', 14) ?>PostgreSQL</span>
            <span class="tag"><?= tech_icon('fastapi', 14) ?>Data pipeline</span>
          </div>
        </article>

        <article class="project">
          <h3>Enterprise AI / AECP</h3>
          <p>Internal AI assistance over operational knowledge using LLM, RAG, and pgvector on PostgreSQL.</p>
          <div class="tags">
            <span class="tag"><?= tech_icon('python', 14) ?>Python</span>
            <span class="tag"><?= tech_icon('fastapi', 14) ?>FastAPI</span>
            <span class="tag"><?= tech_icon('postgresql', 14) ?>PostgreSQL</span>
            <span class="tag"><?= tech_icon('pgvector', 14) ?>pgvector</span>
            <span class="tag"><?= tech_icon('llm', 14) ?>LLM</span>
            <span class="tag"><?= tech_icon('rag', 14) ?>RAG</span>
          </div>
        </article>

        <article class="project">
          <h3>Online Face Verification</h3>
          <p>Online face verification integrated into an operational identity-check flow via API.</p>
          <div class="tags">
            <span class="tag"><?= tech_icon('rest', 14) ?>REST API</span>
            <span class="tag"><?= tech_icon('webhook', 14) ?>Webhook</span>
            <span class="tag"><?= tech_icon('nestjs', 14) ?>Integration</span>
          </div>
        </article>
      </section>

      <section class="resume-section">
        <div class="keep-with-next">
          <h2 class="section-heading">Production Architecture</h2>
          <div class="arch-block arch">
            <div class="flow">
              <span>User</span><i>→</i>
              <span>Cloudflare</span><i>→</i>
              <span>Load Balancer</span><i>→</i>
              <span>Nuxt.js</span><i>→</i>
              <span>NestJS</span><i>→</i>
              <span>PostgreSQL / Redis / Object Storage</span>
            </div>
            <p class="support">Docker · Docker Compose · GitLab CI/CD · AWS · Nginx · Linux · Monitoring · Backup / DR</p>
          </div>
        </div>
      </section>

      <section class="resume-section">
        <div class="keep-with-next">
          <h2 class="section-heading">Skill Stack</h2>
          <div class="skills">
            <div class="skill-group">
              <h4>Backend</h4>
              <div class="icon-row">
                <?= tech_icon_caption('php', 'PHP', 16) ?>
                <?= tech_icon_caption('laravel', 'Laravel', 16) ?>
                <?= tech_icon_caption('nodedotjs', 'Node.js', 16) ?>
                <?= tech_icon_caption('nestjs', 'NestJS', 16) ?>
                <?= tech_icon_caption('typescript', 'TypeScript', 16) ?>
                <?= tech_icon_caption('python', 'Python', 16) ?>
              </div>
            </div>
            <div class="skill-group">
              <h4>Frontend</h4>
              <div class="icon-row">
                <?= tech_icon_caption('vuedotjs', 'Vue.js', 16) ?>
                <?= tech_icon_caption('nuxtdotjs', 'Nuxt.js', 16) ?>
                <?= tech_icon_caption('html5', 'HTML5', 16) ?>
                <?= tech_icon_caption('css3', 'CSS3', 16) ?>
                <?= tech_icon_caption('javascript', 'JavaScript', 16) ?>
                <?= tech_icon_caption('jquery', 'jQuery', 16) ?>
              </div>
            </div>
            <div class="skill-group">
              <h4>Database</h4>
              <div class="icon-row">
                <?= tech_icon_caption('mysql', 'MySQL', 16) ?>
                <?= tech_icon_caption('postgresql', 'PostgreSQL', 16) ?>
                <?= tech_icon_caption('mongodb', 'MongoDB', 16) ?>
                <?= tech_icon_caption('redis', 'Redis', 16) ?>
                <?= tech_icon_caption('microsoftsqlserver', 'SQL Server', 16) ?>
              </div>
            </div>
          </div>
        </div>
        <div class="skills">
          <div class="skill-group">
            <h4>Cloud / Infrastructure</h4>
            <div class="icon-row">
              <?= tech_icon_caption('amazonaws', 'AWS', 16) ?>
              <?= tech_icon_caption('docker', 'Docker', 16) ?>
              <?= tech_icon_caption('linux', 'Linux', 16) ?>
              <?= tech_icon_caption('gitlab', 'GitLab CI/CD', 16) ?>
              <?= tech_icon_caption('cloudflare', 'Cloudflare', 16) ?>
              <?= tech_icon_caption('nginx', 'Nginx', 16) ?>
              <?= tech_icon_caption('ubuntu', 'Ubuntu', 16) ?>
              <?= tech_icon_caption('centos', 'CentOS', 16) ?>
            </div>
          </div>
          <div class="skill-group">
            <h4>Tools</h4>
            <div class="icon-row">
              <?= tech_icon_caption('git', 'Git', 16) ?>
              <?= tech_icon_caption('visualstudiocode', 'VS Code', 16) ?>
              <?= tech_icon_caption('postman', 'Postman', 16) ?>
              <?= tech_icon_caption('gnubash', 'Terminal', 16) ?>
            </div>
          </div>
          <div class="skill-group">
            <h4>AI / Data</h4>
            <div class="icon-row">
              <?= tech_icon_caption('python', 'Python', 16) ?>
              <?= tech_icon_caption('fastapi', 'FastAPI', 16) ?>
              <?= tech_icon_caption('pgvector', 'pgvector', 16) ?>
              <?= tech_icon_caption('llm', 'LLM', 16) ?>
              <?= tech_icon_caption('rag', 'RAG', 16) ?>
              <?= tech_icon_caption('vectordb', 'Vector DB', 16) ?>
            </div>
          </div>
        </div>
        <div class="skill-group" style="margin-top:8px">
          <h4>Integration</h4>
          <div class="icon-row">
            <?= tech_icon_caption('rest', 'REST API', 16) ?>
            <?= tech_icon_caption('webhook', 'Webhook', 16) ?>
            <?= tech_icon_caption('payment', 'Payment API', 16) ?>
            <?= tech_icon_caption('banking', 'Banking API', 16) ?>
          </div>
        </div>
      </section>

      <section class="resume-section">
        <div class="keep-with-next">
          <h2 class="section-heading">Education</h2>
          <article class="edu">
            <div class="edu-head">
              <h3>B.Sc. Information Technology</h3>
              <span class="muted">Dhurakij Pundit University</span>
            </div>
            <ul>
              <li>Non-formal high school (กศน.) completed while working.</li>
              <li>Royal Thai Air Force — Special Operations (voluntary enlisted).</li>
            </ul>
          </article>
        </div>
      </section>

      <p class="print-footer-note">Print on A4 · Enable background graphics · Page numbers appear in the PDF footer.</p>
    </div>
  </main>
</body>
</html>
