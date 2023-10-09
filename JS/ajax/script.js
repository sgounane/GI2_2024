let tb=document.querySelector("#tb")
let req=new XMLHttpRequest();
req.open("GET","https://jsonplaceholder.typicode.com/todos");
req.onreadystatechange=()=>{
   console.log(req.readyState);
   if(req.readyState==4 && req.status==200){
       let resp=JSON.parse(req.responseText)
       //let tr=resp[20]
       let txt=""
       resp.forEach(tr => {
        txt=txt+`<tr>
                    <td>${tr.id}</td>
                    <td>${tr.userId}</td>
                    <td>${tr.title}</td>
                    <td><input type="checkbox" ${tr.completed?'checked':""}/></td>
                </tr>`
        tb.innerHTML=txt
       console.log(resp[0]);
   })
};
   
}
req.send()