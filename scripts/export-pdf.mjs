import puppeteer from 'puppeteer-core';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const out = path.resolve(__dirname, '..', 'Chatchai_Booranawiselkul_Resume.pdf');
const url = process.env.RESUME_URL || 'http://localhost/AboutMe/resume.php';
const chrome = process.env.CHROME_PATH || '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome';

const browser = await puppeteer.launch({
  executablePath: chrome,
  headless: true,
  args: ['--disable-gpu', '--no-sandbox'],
});

const page = await browser.newPage();
await page.emulateMediaType('print');
await page.goto(url, { waitUntil: 'networkidle0', timeout: 60000 });

await page.pdf({
  path: out,
  printBackground: true,
  preferCSSPageSize: true,
  displayHeaderFooter: false,
});

await browser.close();
console.log('Wrote', out);
