$(function(){

    var twoToneButton = document.querySelector('.twoToneButton');

    twoToneButton.addEventListener("click", function() {
        twoToneButton.innerHTML = "Carregando";
        twoToneButton.classList.add('spinning');

      setTimeout(
            function  (){
                twoToneButton.classList.remove('spinning');
                twoToneButton.innerHTML = "PESQUISAR";

            }, 6000);
    }, false);

});
