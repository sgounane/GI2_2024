function User(nom, prenom, age){

    this.nom=nom;
    this.prenom=prenom;
    this.age = age

}
User.prototype.direBonjour=function(){
    console.log("Bonjour")
}

let u1=new User("Said","Gounane",24)
let u2=new User("ANas","Baroudi",26)