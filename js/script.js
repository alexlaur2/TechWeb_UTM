function Nav_bar() {
    var x = document.getElementById("cont");
    var y = document.getElementById("btn");
    
    y.addEventListener("click", ()=>{
        if(y.innerText === "Ascunde bara de navigare"){
            y.innerText = "Afișează bara de navigare";
            x.style.display = "none";
        }else{
            y.innerText= "Ascunde bara de navigare";
            x.style.display = "block";
        }
    });
}

function play() {
    var audio = new Audio('../sound/Total.mp3');
    audio.play();
};
