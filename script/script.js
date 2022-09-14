console.clear();

// let footer_txt = document.querySelector("#footer-text");
// footer_txt.addEventListener('click', footerclk);

// function footerclk(evt) {
//     var x = document.querySelector("#footer-text");
//     x.innerText += " haha";
//     console.log(evt);
// }

// var gameobj = document.querySelector(".object");
// window.addEventListener('keydown', arrow);
// var x = 0;
// var y = 0;
// function arrow(evt) {
//     if (evt.code == 'ArrowUp' || evt.code == 'KeyW') {
//         if (y > 0) {
//             y -= 50;
//         }
//         gameobj.style.transform = `translate(${x}px,${y}px)`;
//         console.log(gameobj.style.transform);
//     }
//     if (evt.code == 'ArrowDown' || evt.code == 'KeyS') {
//         if (y < 400) {
//             y += 50;
//         }
//         gameobj.style.transform = `translate(${x}px,${y}px)`;
//         console.log(gameobj.style.transform);
//     }
//     if (evt.code == 'ArrowLeft' || evt.code == 'KeyA') {
//         if (x > 0) {
//             x -= 50;
//         }
//         gameobj.style.transform = `translate(${x}px,${y}px)`;
//         console.log(gameobj.style.transform);
//     }
//     if (evt.code == 'ArrowRight' || evt.code == 'KeyD') {
//         if (x < 400) {
//             x += 50;
//         }
//         gameobj.style.transform = `translate(${x}px,${y}px)`;
//         console.log(gameobj.style.transform);
//     }
//     console.log(evt);
// }
// axios.get('http://worldtimeapi.org/api/timezone/Africa/Cairo')
//     .then((res) => {
//         console.log(res.data.datetime);
//         return axios.get('http://worldtimeapi.org/api/timezone/Europe/London');
//     })
//     .then(
//         (res) => {
//             console.log(res.data.datetime);
//         }
//     )

// async function makereq() {
//     try {
//         let res = await axios.get('http://worldtimeapi.org/api/timezone/Africa/Cairo')
//         console.log(res.data.datetime);
//         res = await axios.get('http://worldtimeapi.org/api/timezone/Europe/London')
//         console.log(res.data.datetime);
//     } catch (error) {
//         console.log("OH SHIT!!!!!", error.message);
//     }
// }

// makereq();

// setTimeout(() => { console.log("normal sync one"); }, 1000);
const coe = new Date("September 19, 2022 14:30:00").getTime();
const now = new Date().getTime();
var days = '00';
var hours = '00';
var min = '00';
var sec = '00';

// let time = parseInt(sec) + parseInt(min * 60) + parseInt(hours * 60 * 60) + parseInt(days * 60 * 60 * 24);
let time = (coe - now) / 1000;
console.log(time);

let daycnt = document.querySelector('.Days');
let hrcnt = document.querySelector('.Hours');
let mincnt = document.querySelector('.Minutes');
let seccnt = document.querySelector('.Seconds');
daycnt.innerText = `${days}`;
hrcnt.innerText = `${hours}`;
mincnt.innerText = `${min}`;
seccnt.innerText = `${sec}`;

setInterval(updatecounter, 1000);

function updatecounter() {
    let days = Math.floor(time / 60 / 60 / 24);
    let hours = Math.floor((time - days * 24 * 60 * 60) / 60 / 60);
    let min = Math.floor((time - hours * 60 * 60 - days * 24 * 60 * 60) / 60);
    let sec = Math.ceil(time - min * 60 - hours * 60 * 60 - days * 24 * 60 * 60);

    // console.log(sec); console.log(min); console.log(hours); console.log(days);

    sec = (sec < 10) ? '0' + sec : sec;
    min = (min < 10) ? '0' + min : min;
    hours = (hours < 10) ? '0' + hours : hours;
    days = (days < 10) ? '0' + days : days;

    daycnt.innerText = `${days}`;
    hrcnt.innerText = `${hours}`;
    mincnt.innerText = `${min}`;
    seccnt.innerText = `${sec}`;
    time--;
}