<div class="footerContainer">
  <div class="footerReachOutContainer">
    <span class="footerReachOutTitle">Let's work together</span>
    <a href="mailto:raidakrich@akdev.com" class="footerReachOutLink" id="reachLink">GET IN TOUCH</a>
  </div>

  <div class="copyrightsContainer">
    <span class="footerLogo">AKDEV</span>
    <span class="copyrightsTitle"><span class="copyrightSymbol">©</span> AKDEV All Rights Reserved</span>
  </div>
</div>

<script src="https://unpkg.com/@studio-freight/lenis/dist/lenis.min.js"></script>

<script>
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);

  if (!prefersReducedMotion && !isChrome) {
    const lenis = new Lenis({
      duration: 1, 
      smooth: true, 
      smoothTouch: true,   
      direction: 'vertical',
      gestureOrientation: 'vertical'
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    window._lenis = lenis;
  }

  // Hover morph text effect
  const link = document.getElementById("reachLink");
  const original = "GET IN TOUCH";
  const target = "RAIDAKRICH@AKDEV.COM";
  let interval = null;
  let speed = 40;

  function morph(from, to, callback) {
    clearInterval(interval);
    let maxLength = Math.max(from.length, to.length);
    let current = from.padEnd(maxLength, " ");
    let final = to.padEnd(maxLength, " ");
    let index = 0;

    interval = setInterval(() => {
      index++;
      let output = final.substring(0, index) + current.substring(index);
      link.innerText = output.trimRight();
      if (index >= maxLength) {
        clearInterval(interval);
        link.innerText = to;
        if (callback) callback();
      }
    }, speed);
  }

  link.addEventListener("mouseenter", () => {
    link.classList.add("active");
    morph(original, target);
  });

  link.addEventListener("mouseleave", () => {
    link.classList.remove("active");
    morph(target, original);
  });
</script>