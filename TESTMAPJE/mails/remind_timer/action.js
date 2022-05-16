var timer= document.querySelector("#timer");


timer.addEventListener("click", function() {
    alert("works")
  });



// var timerElement = document.querySelector("#timer"); 
// var seconds = 3600;

//     // elke second de h1 aanpassen tot 10 seconden
//     var timer = setInterval(function() {
//         seconds--; // aftelling
            
//             // definieren uur,min,secs
            
//             var minutes = Math.floor(seconds / 60);
//             var hours = Math.floor(minutes / 60);
            
//             //begone uur,min,secs
//             var seconde = seconds % 60; 
//             minutes %= 60;
//             hours %= 60;

//         timerElement.innerHTML = hours+ "uur"+ minutes + "minuten" + seconde + "seconden";

//         if (seconds <= 0) {
//             clearInterval(timer);
//         }
//     }, 1000);