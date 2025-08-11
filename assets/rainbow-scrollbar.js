document.addEventListener('DOMContentLoaded', () => {
  const indicator = document.querySelector('.lx-rainbow-indicator');
  if (!indicator) return;

  document.addEventListener('scroll', () => {
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight;
    const clientHeight = document.documentElement.clientHeight;
    const scrolled = (scrollTop / (scrollHeight - clientHeight)) * 100;
    indicator.style.width = `${scrolled}%`;
  });
});
