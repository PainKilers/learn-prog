let time = prompt('What is the time now?');

if (time >=0 && time <= 6) {
    alert('Naktis');
} 

else if (time >= 6 && time <= 12) {
    alert('Rytas');
} 

else if (time >= 12 && time <= 17) {
    alert('Diena')
} 

else if (time >= 17 && time <= 24) {
    alert('Vakaras');
} 

else {
    alert('Neteisingas laikas');
}