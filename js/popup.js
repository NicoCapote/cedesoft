

var abrir = document.getElementById('inicio'),
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    overlay2 = document.getElementById('overlay2'),
    popup2 = document.getElementById('popup2'),
    cerrar = document.getElementById('close');

abrir.addEventListener('click',function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});

cerrar.addEventListener('click',function(){
    overlay.classList.remove('active');
    popup.classList.remove('active');
});

abrir.addEventListener('click',function(){
    overlay2.classList.add('active');
    popup2.classList.add('active');
});

cerrar.addEventListener('click',function(){
    overlay2.classList.remove('active');
    popup2.classList.remove('active');
});



