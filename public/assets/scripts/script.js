function toggleMenu() {
  const menuToggle = document.querySelector(".menu-toggle");
  menuToggle.addEventListener("click", () => {
    const body = document.querySelector("body");
    body.classList.toggle("hide-sidebar");
  });
}
toggleMenu();

function activateClock() {
  const activeClock = document.querySelector("[active-clock]");
  if (!activeClock) return;

  function addOneSecond(hours, minutes, seconds) {
    const d = new Date();
    d.setHours(parseInt(hours));
    d.setMinutes(parseInt(minutes));
    d.setSeconds(parseInt(seconds) + 1);

    const h = `${d.getHours()}`.padStart(2, 0);
    const m = `${d.getMinutes()}`.padStart(2, 0);
    const s = `${d.getSeconds()}`.padStart(2, 0);
    return `${h}:${m}:${s}`;
  }

  setInterval(() => {
    const parts = activeClock.innerHTML.split(":");
    activeClock.innerHTML = addOneSecond(...parts);
  }, 1000);

  activeClock.classList.add("active");

  function createActiveClock() {
    const activeClock = document.createElement("div");
    activeClock.setAttribute("active-clock", "");
    document.body.appendChild(activeClock);
    return activeClock;
  }

  function createClock() {
    const clock = document.createElement("div");
    clock.classList.add("clock");
    clock.innerText = "00:00:00";
    document.body.appendChild(clock);
    return clock;
  }

  createClock();
  createActiveClock();
}
