let article=document.querySelector("article");
let cart=document.querySelector("#cartelements")
let totalElement=document.querySelector("#total")

let cartList=[]
let products=[]
let total=0

let req= new XMLHttpRequest();
req.open("get","/ClientSide/articles");
function updateList(id){
    let str=""
    total=0;
    cartList.forEach(e=>{
        total+=e.prix*e.qtt
    str+=`<div class="element">
                    <img src=../${e.image} class="prodimgmin">
                    <div>${e.titre}</div>
                    <div>${e.qtt}</div>
                    <div onclick="deleteProd(${e.id})" class="delete"></div>
                </div>`
    })
    cart.innerHTML=str
    totalElement.innerHTML=`Total: ${total}`   
}
function addProduct(id){
    let p=products.find(e=>e.id===id)
    let e=cartList.find(e=>e.id==p.id)
    if(e) p.qtt++
    else{
        p.qtt=1
        cartList.push(p)
    } 
    updateList()
}
function deleteProd(id){
    cartList=cartList.filter(e=>e.id!==id)
    updateList()
}

function search(e){
   //cartList=cartList.filter()
    console.log(e.value)
}
req.onreadystatechange=()=>{
    if(req.status==200 && req.readyState==4){
        products=JSON.parse(req.response);
        console.log(products)
        str=""
        products.forEach(e=> {
                   str+= `<div class="article">
                    <img src=../${e.image} alt="" class="prodimg">
                    <div class="titre">${e.titre}</div>
                    <div class="prix">${e.prix}DH</div>
                    <div  onclick="addProduct(${e.id})" class="add"></div>
                    <a href=<?="details.php?id=${e.id}>  class="detail">Detail</a>
                </div>`
            
        });
        article.innerHTML=str
    }
}
req.send();