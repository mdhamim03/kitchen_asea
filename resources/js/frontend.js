/** Counter Js Code Start */

const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);

const formatNumber = (value, format) => {
  switch (format) {
    case "k":
      return Math.floor(value / 1000) + "k";
    case "m":
      return (value / 1_000_000).toFixed(1) + "M";
    default:
      return value.toLocaleString();
  }
};

const animateCounter = (el) => {
  const target = Number(el.dataset.count);
  const suffix = el.dataset.suffix || "";
  const format = el.dataset.format || "none";

  const duration = 2000;
  const startTime = performance.now();

  const tick = (now) => {
    const progress = Math.min((now - startTime) / duration, 1);
    const value = Math.floor(easeOutCubic(progress) * target);

    el.textContent = formatNumber(value, format) + suffix;

    if (progress < 1) {
      requestAnimationFrame(tick);
    }
  };

  requestAnimationFrame(tick);
};

const initCounters = () => {
  const counters = document.querySelectorAll(".counter");

  if (!counters.length) return; // early exit (performance)

  const observer = new IntersectionObserver((entries, obs) => {
    for (const entry of entries) {
      if (!entry.isIntersecting) continue;

      animateCounter(entry.target);
      obs.unobserve(entry.target); // per element cleanup
    }
  }, { threshold: 0.4 });

  counters.forEach(el => observer.observe(el));
};

document.addEventListener("DOMContentLoaded", initCounters);

/** Counter Js Code End */