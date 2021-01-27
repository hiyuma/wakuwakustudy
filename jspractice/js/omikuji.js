'use strict';

  const btn = document.getElementById('btn');

  btn.addEventListener('click',() =>{
    const results = ['超大吉','大吉','中吉','末吉','小吉','凶','大凶','超大凶'];
    btn.classList.toggle('win');
    
    const n = Math.random();
    if (n < 0.10) {
      btn.textContent = '😸超大吉'; // 5％
    } else if (n < 0.25) {
      btn.textContent = '😺大吉'; // 15％
    } else if (n < 0.4) {
      btn.textContent = '🐈普通'; // 15％
    } else if (n < 0.5) {
      btn.textContent = '😺末吉'; // 10％
    } else if (n < 0.66) {
      btn.textContent = '😽小吉'; // 16％
    } else if (n < 0.77) {
      btn.textContent = '😿凶'; // 11％
    } else if (n < 0.88) {
      btn.textContent = '🙀大凶'; // 11％
    } else if (n < 0.97) {
      btn.textContent = '🙀超大凶'; // 9％
    } else  {
      btn.textContent = '🎊😻ねこ😻🎊'; // 3％
    }
  });