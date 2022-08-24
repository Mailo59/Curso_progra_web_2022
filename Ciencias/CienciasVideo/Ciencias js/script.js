let hideText_btn = document.getElementById('hideText_btn');
let hidetext = document.getElementById('hidetext');


hideText_btn.addEventListener('click', toggleText);

function toggleText(){
    hidetext.classList.toggle('show');

    if(hidetext.classList.contains('show')){
        hideText_btn.innerHTML = 'Leer Menos'

    }else{
        hideText_btn.innerHTML = 'Leer Mas'
        
    }
}