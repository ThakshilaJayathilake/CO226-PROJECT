
document.getElementById('profpic').addEventListener('click', function(){
    document.querySelector('.updateppwindow').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click', function(){
    document.querySelector('.updateppwindow').style.display = 'none';
});

document.getElementById('cancel').addEventListener('click', function(){
    document.querySelector('.updateppwindow').style.display = 'none';
});