let navCenter = document.querySelector('.navCenter');
document.querySelector('.toggle').onclick = function(){
    this.classList.toggle('active');
    navCenter.classList.toggle('active');
}