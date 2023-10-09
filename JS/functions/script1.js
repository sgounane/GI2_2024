let nom = "Gounane";
(function(){
    console.log("Script 1......")
const PI=3.14

function fact(n){
    let f=1
    for(let i=2;i<n;i++){
        f*=i
    } 

    //console.log(i)
    return f
}
console.log(fact(4))

function droite(a,b){
    function f(x){
        return a*x+b
    }

    return f
}
let d1=droite(2,0)


console.log("......Fin script1")
})()