// Modern animated cursor
(function() {
  const dot = document.createElement('div');
  dot.className = 'modern-cursor-dot';
  document.body.appendChild(dot);

  const outline = document.createElement('div');
  outline.className = 'modern-cursor-outline';
  document.body.appendChild(outline);

  let mouseX = 0, mouseY = 0;
  let outlineX = 0, outlineY = 0;

  document.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    dot.style.left = mouseX + 'px';
    dot.style.top = mouseY + 'px';
  });

  function animateOutline() {
    outlineX += (mouseX - outlineX) * 0.18;
    outlineY += (mouseY - outlineY) * 0.18;
    outline.style.left = outlineX + 'px';
    outline.style.top = outlineY + 'px';
    requestAnimationFrame(animateOutline);
  }
  animateOutline();

  // Interactive effect
  ['a', 'button', '.work-card', '.filter-btn', '.portfolio-item'].forEach(sel => {
    document.querySelectorAll(sel).forEach(el => {
      el.addEventListener('mouseenter', () => {
        dot.classList.add('active');
        outline.classList.add('active');
      });
      el.addEventListener('mouseleave', () => {
        dot.classList.remove('active');
        outline.classList.remove('active');
      });
    });
  });
})();
