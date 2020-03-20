// hämta canvas element
const eCanvas = document.querySelector('canvas');
// få js context till canvas, använd canvas2d
const ctx = eCanvas.getContext('2d');

const WIDTH = eCanvas.width;
const HEIGHT = eCanvas.height;

// håll reda på sol
const sol = {
    x: 0, // sol x koordinat
    y: 0, // sol y koordinat
    steg: 5, // hur mycket solen hoppar på knapptryck
    img: new Image(100, 100), // obestämd bild med bredd 100 och höjd 100
};

function ritasol() {
    // rita bild centrerat på solens koordinater med bredd 100 och höjd 100
    ctx.drawImage(sol.img, sol.x - sol.img.width/2, sol.y - sol.img.height/2, 100, 100);
}

// var solens bild kan hittas
sol.img.src = './images/sun.png';
// rita efter att bilden laddats så vi får upp den så snart som möjligt

sol.img.onload = function(e) {
    loop();
}



// slumpa fram koordinater inom övre halvan och högra halvan
let x = WIDTH/2 + Math.random() * WIDTH/2
let y = Math.random() * HEIGHT/2

// sätt koordinater
sol.x = x;
sol.y = y;

// molnets objekt
const moln = {
    x: WIDTH/2, // sätt den i mitten i förväg
    y: HEIGHT/2,
    w: 200, // proportionellt med molnets bredd men är inte nödvändigtvis molnets riktiga bredd
    steg: 5, // hur mycket molnet flyttar sig varje uppdatering när den animeras
    animering: false, // om sann så ska det automatiskt uppdatera och solen ska inte har något påverkan på molnet,
}

function ritamoln() {
    // vit färg
    ctx.fillStyle = "#FFF";
    // börja rita
    ctx.beginPath();
    // 1 inklusive 2
    for (let i = 1; i <= 2; i++) {
        // en halv cirkel
        ctx.arc(moln.x + i*moln.w/3, moln.y, i*moln.w/5, -Math.PI, 0);
    }
    // fyll i hela ritningen
    ctx.fill();
}

function animeramoln() {
    if (moln.x > WIDTH) moln.x = -moln.w;

    moln.x += moln.steg;
}

// när man trycker på knappen med pilv id
// har som syfte att flytta upp solen åt användaren
document.querySelector('#pilv').addEventListener('click', ()=>{
    // flytta solen upp
    sol.y -= sol.steg;
    // om det inte är live animerat, rita om
    if (!moln.animering) loop();
});

// har som syfte att flytta ned solen åt användaren
document.querySelector('#pilh').addEventListener('click', ()=>{
    sol.y += sol.steg;
    if (!moln.animering) loop();
});

// har som syfte att få molnet att röra på sig åt användaren
document.querySelector('#moln').addEventListener('click', ()=>{
    // checka så att vi inte starta animeringen
    if (!moln.animering) {
        // säg att vi har startat animeringen
        moln.animering = true;
        // rita om samt att lite logik körs nu
        loop();
    }
});

// rensar, ritar, och uppdatera
function loop() {
    // gör rent canvas
    ctx.clearRect(0, 0, WIDTH, HEIGHT);

    // rita våra 2 teckningar
    ritasol();
    ritamoln();

    // om molnet vill animeras
    if (moln.animering) {
        // animera molnet
        animeramoln();
        // gör om hela loopen efter ungefär 1/60 dels sekund
        requestAnimationFrame(loop);
    }
}