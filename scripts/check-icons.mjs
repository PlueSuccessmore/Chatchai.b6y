import puppeteer from 'puppeteer-core';

const chrome = '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome';
const browser = await puppeteer.launch({
  executablePath: chrome,
  headless: true,
  args: ['--disable-gpu', '--no-sandbox'],
});
const page = await browser.newPage();
await page.setViewport({ width: 1280, height: 900, deviceScaleFactor: 1 });
await page.goto('http://localhost/AboutMe/index.php', { waitUntil: 'networkidle0', timeout: 60000 });

const broken = await page.evaluate(() => {
  return [...document.images].map(img => ({
    src: img.currentSrc || img.src,
    w: img.naturalWidth,
    h: img.naturalHeight,
    complete: img.complete,
    alt: img.alt,
  })).filter(i => !i.complete || i.w === 0);
});
const svgCount = await page.evaluate(() => document.querySelectorAll('svg').length);
const iconFigs = await page.evaluate(() => document.querySelectorAll('.icon-fig').length);
console.log(JSON.stringify({ broken, svgCount, iconFigs }, null, 2));

for (const id of ['architecture', 'work', 'stack']) {
  const el = await page.$(`#${id}`);
  if (el) await el.screenshot({ path: `/tmp/portfolio-shots/section-${id}.png` });
}

const mobile = await browser.newPage();
await mobile.setViewport({ width: 390, height: 844, deviceScaleFactor: 2 });
await mobile.goto('http://localhost/AboutMe/index.php', { waitUntil: 'networkidle0', timeout: 60000 });
await mobile.screenshot({ path: '/tmp/portfolio-shots/mobile-hero.png', clip: { x: 0, y: 0, width: 390, height: 844 } });
const stack = await mobile.$('#stack');
if (stack) {
  await stack.scrollIntoViewIfNeeded();
  await stack.screenshot({ path: '/tmp/portfolio-shots/mobile-stack.png' });
}

await browser.close();
