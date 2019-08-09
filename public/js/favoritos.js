const inputNum = document.getElementsByClassName("inputNum");

const invalidChars = [
  "-",
  "+",
  "e",
];

if(inputNum){
    for(let i = 0; i < inputNum.leght; i++){
          inputNum[i].addEventListener("keydown", (e) => {
          if (invalidChars.includes(e.key)) {
            e.preventDefault();
          }
        });
    }
}

const deleteList = (idx) => {
    const deleteEle = document.getElementById(idx);
    if(deleteEle){
        deleteEle.remove();
    }
};

const modalBody = document.getElementById('modalBody');
const addCartButton = document.getElementById('addCartButton');
const copyFavList = Array.from(modalBody.children);

if(modalBody && addCartButton){
    addCartButton.addEventListener('click', ()=>{
        if(modalBody.childElementCount <= 1){
            console.log('Siii!')
            for(let i= 0; i < copyFavList.length; i++){
                console.log('yes')
                modalBody.appendChild(copyFavList[i])
            }
        }else{
            console.log('No!!!')
        }
    })


}
