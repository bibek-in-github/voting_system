// console.log("hey i am mueksh");
const msgCard = document.querySelector(".MsgCard");
const crossBtn = document.querySelector(".crossBtn");

setTimeout(()=>{
    console.log("hey ");
    msgCard.style.display = "none";
}, 5000);

crossBtn.addEventListener("click", ()=>{
    msgCard.style.display = "none";
});