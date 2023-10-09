let h=document.querySelector(".heures")
let m=document.querySelector(".minutes")
let s=document.querySelector(".secondes")

let ch=document.querySelector(".cminutes")
let cm=document.querySelector(".csecondes")
let cs=document.querySelector(".cds")

let ctrl=document.querySelector("#ctrl")
let reset=document.querySelector("#reset")



function updateClock(){
    let d=new Date()
    let hr=d.getHours()
    let min=d.getMinutes()
    let sec=d.getSeconds()
    let z=360/12
    let hd=z*hr + min*z/60
    let md=min*6
    let sd=sec*6

    h.style.transform=`rotate(${hd-90}deg)`
    m.style.transform=`rotate(${md-90}deg)`
    s.style.transform=`rotate(${sd-90}deg)`
}

let t=0
function updateChrono(){

    let md=0.001
    let sd=0.006
 

    ch.style.transform=`rotate(${md*t-90}deg)`
    cm.style.transform=`rotate(${sd*t-90}deg)`
    cs.innerHTML=t%1000

    t+=10
}
let CI;
let pause=true
ctrl.addEventListener("click",()=>{

    if(pause){
        CI=setInterval(updateChrono,10)
        ctrl.value="Stop"
    }
    else{
        clearInterval(CI)
        ctrl.value="Start"
    }
    pause=!pause
    

} )

reset.addEventListener("click",()=>{
    clearInterval(CI)
    console.log("Reset")
    t=0
    updateChrono()
    t=0
})

I=setInterval(updateClock,1000)

t=0
updateChrono()
