import puppeteer from 'puppeteer-core';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const chrome = '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome';
const outDir = '/tmp/portfolio-shots';

const browser = await puppeteer.launch({
  executablePath: chrome,
  headless: true,
  args: ['--disable-gpu', '--no-sandbox'],
});

async function shot(url, name, width, height = 900) {
  const page = await browser.newPage();
  await page.setViewport({ width, height, deviceScaleFactor: 1 });
  await page.goto(url, { waitUntil: 'networkidle0', timeout: 60000 });
  await page.screenshot({ path: `${outDir}/${name}.png`, fullPage: true });
  await page.close();
  console.log('saved', name);
}

await import('node:fs').then(fs => fs.mkdirSync(outDir, { recursive: true }));
await shot('http://localhost/AboutMe/index.php', 'desktop-home', 1280, 900);
await shot('http://localhost/AboutMe/index.php', 'mobile-home', 390, 844);
await shot('http://localhost/AboutMe/resume.php', 'resume-screen', 1100, 900);

await browser.close();
