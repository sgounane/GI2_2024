let tb=document.querySelector("#tb")
let userSearche=document.querySelector("#userSearche")
let todoSearche=document.querySelector("#todoSearche")

let userInput=document.querySelector("#userid")
let todoInput=document.querySelector("#todo")
let addBtn=document.querySelector("#add")

let data=[]

addBtn.addEventListener("click",()=>{
    console.log("User:", userInput.value, "Todo:", todoInput.value)
    let newTodo={
        id:data[0].id+1,
        userId:userInput.value,
        title:todoInput.value,
        completed:false
    };
    data.unshift(newTodo)
    showList(data,tb)


})

userSearche.addEventListener("input",()=>{
   let fdata=data.filter(e=>e.userId.toString().includes(userSearche.value))
   showList(fdata,tb)
})

todoSearche.addEventListener("input",()=>{
    let fdata=data.filter(e=>e.title.includes(todoSearche.value))
   showList(fdata,tb)
})
let req=new XMLHttpRequest();
req.open("GET","https://jsonplaceholder.typicode.com/todos");

function showList(data,container){

    let txt=""
    //container.innerHTML=txt
       data.forEach(tr => {
        txt=txt+`<tr>
                    <td>${tr.id}</td>
                    <td>${tr.userId}</td>
                    <td>${tr.title}</td>
                    <td><input type="checkbox" ${tr.completed?'checked':""}/></td>
                </tr>`
                
        })
        container.innerHTML=txt
}
req.onreadystatechange=()=>{
   console.log(req.readyState);
   if(req.readyState==4 && req.status==200){
       let resp=JSON.parse(req.responseText)
       data=resp.sort((a,b)=>b.id-a.id)
       showList(data,tb)

    };
   
}
req.send()