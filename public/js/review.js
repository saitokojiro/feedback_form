let star = document.querySelector(".star")
let starAll = document.querySelectorAll(".star")

let change_star =(e, val)=>{
    starAll.forEach((el,key)=>{
        if(key+1 <= val){
            console.log(key)
            el.setAttribute("class", "star checked");
        }
        else{
            el.setAttribute("class", "star");
        }
    })
}
