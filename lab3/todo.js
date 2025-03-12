let text = document.querySelector("#text");
let addtext = document.querySelector("#item");
let btn=document.querySelector("#btn");

function addTask(){
      let check = text.value;
      if (check == "") {
        alert("Please Add  Task");
      } else {
        let list = document.createElement("li");
        list.innerText = check;
        addtext.append(list);
        text.value = "";
      }
}

btn.addEventListener("click",addTask);








      