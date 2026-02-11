function updateJam() {
    const sekarang = new Date();

    const jam = sekarang.toLocaleTimeString('id-ID');
    const tanggal = sekarang.toLocaleDateString('id-ID', {
        weekday: 'long',
        day: 'numeric',
        month: 'long',
        year: 'numeric'
    });

    document.getElementById("jam").innerHTML = jam;
    document.getElementById("tanggal").innerHTML = tanggal;
}

setInterval(updateJam, 1000);
updateJam();

window.onload = function() {
    alert("Selamat datang di Biodata Finza!");
    updateJam();
    setInterval(updateJam, 1000);}


function gantiWarna() {
    const card = document.querySelector(".card");
    const warna = ["#6840f8", "#5d985d", "#ccccff", "#fff0b3", "#e2f874"];
    const random = warna[Math.floor(Math.random() * warna.length)];
    card.style.background = random;
}
function toggleDarkMode() {
    document.body.classList.toggle("dark");
}
const canvasPetir = document.getElementById("petirCanvas");
const ctxPetir = canvasPetir.getContext("2d");

canvasPetir.width = 220;
canvasPetir.height = 200;

let bolts = [];

function buatPetir() {
    let points = [];
    let x = canvasPetir.width / 2;
    let y = 0;

    points.push({x, y});

    while (y < canvasPetir.height) {
        x += (Math.random() - 0.5) * 30;
        y += Math.random() * 20;
        points.push({x, y});
    }

    bolts.push({ points: points, life: 1 });
}

function gambarPetir() {
    ctxPetir.clearRect(0, 0, canvasPetir.width, canvasPetir.height);

    for (let i = bolts.length - 1; i >= 0; i--) {
        const bolt = bolts[i];
        ctxPetir.beginPath();
        ctxPetir.moveTo(bolt.points[0].x, bolt.points[0].y);

        for (let p = 1; p < bolt.points.length; p++) {
            ctxPetir.lineTo(bolt.points[p].x, bolt.points[p].y);
        }

        ctxPetir.strokeStyle = `rgba(255,255,255,${bolt.life})`;
        ctxPetir.lineWidth = 2;
        ctxPetir.shadowBlur = 20;
        ctxPetir.shadowColor = "cyan";
        ctxPetir.stroke();

        bolt.life -= 0.03;

        if (bolt.life <= 0) {
            bolts.splice(i, 1);
        }
    }

    requestAnimationFrame(gambarPetir);
}

gambarPetir();

setInterval(() => {
    buatPetir();
}, 2000 + Math.random() * 2000);