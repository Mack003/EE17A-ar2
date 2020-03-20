/* Element vi jobbar med */
const eCanvas = document.querySelector('canvas');

/* canvas context till js */
const ctx = eCanvas.getContext('2d');

/* solens startvärden */
const sol = {
    x: 0, // solens X
    y: 0, // solens Y
    img: new Image(100, 100), //ladda bildbehållare
    steg: 4, // hur långt solen åker per knapptryck
};

/* Funktion för att rita solen */
function ritaSol() {
ctx.drawImage(sol.img, sol.x - sol.img.width/2, sol.y - sol.img.height/2, 100, 100);
}

/* Bildens adress */
sol.img.src = './sun.png';

/* Se till att programmet startas efter att solen laddas in i canvas */
sol.img.onload = function(e) {
loop();
}

/* Gör slumpade koordinater i övre hörnet åt solen */
let x = 265 + Math.random() * 265
let y = Math.random() * 200

// variabler för solens koordinater
sol.x = x;
sol.y = y;

/* Flytta på solen efter knapptryck */
/* Upp */
document.querySelector('#pilv').addEventListener('click', function() {
    sol.y -= sol.steg;
    loop();
});
/* Ner */
document.querySelector('#pilh').addEventListener('click', function() {
    sol.y += sol.steg;
    loop();
});

// molnets startvärden
const moln = {
    x: 200, /* Molnets Y-värde */
    y: 200, /* Molnets X-värde */
    w: 80,
    steg: 7,/* Hur snabbt molnet åker */
    animation: false
}

/* funktion för att rita molnet */
function ritaMoln() {
    ctx.fillStyle = "gray";
    // sätt ner pennan
    ctx.beginPath();
    
    /* Rita 2 olika halvcirklar som moln */
        ctx.arc(moln.x, moln.y, moln.w, 0, Math.PI, true);
        ctx.arc(moln.x + 60, moln.y, moln.w - 20, 0, Math.PI, true);

    ctx.fill();
}
/* Funktion för att animera molnet */
function flyttaMoln() {
    /* Om molnet passerar kanten, flytta till andra sidan */
    if (moln.x > 650) {moln.x = -moln.w - 60};

    if (moln.animation) {
    moln.x += moln.steg;
    }
}
document.querySelector('#moln').addEventListener('click', function() {
    /* kolla efter så att molnet inte redan är animerat */
    if (!moln.animation) {
    moln.animation = true;
    loop();
    }
    
});

/* Genomför */
function loop() {
    /* Rengör canvas för varje uppdatering */
    ctx.clearRect(0, 0, 530, 400);
    /* rita objekt */
    ritaSol();
    ritaMoln();

    /* Animera molnet */
    if (moln.animation) {
        flyttaMoln();
        requestAnimationFrame(loop);
    }
}