
function autocompletar(array) {
 console.log(array);
 
  const inputMascota= document.querySelector('#tipo-mascota').value;
  console.log(inputMascota);
  let indexFocus=-1;

  inputMascota.addEventListener('input', function () {
    const tipoMascota = this.value;

    if(!tipoMascota) return false ;
    
    const divList = document.createElement('div');
    divList.setAttribute('id', this.id + '-lista-autocompletar');
    divList.setAttribute('class', 'lista-autocompletar-items');
    this.parentNode.appendChild(divList);

    if (array.lengh==0) {
      return false; 
    }
    array.forEach(item => {
     
      if (item.substr(0, tipoMascota.lengh)==tipoMascota) {
        const elementoLista= document.createElement('div');
        elementoLista.innerHTML=`<strong>${item.substr(0, tipoMascota.lengh)}</strong>${item.substr(tipoMascota.lengh)}`;
        elementoLista.addEventListener('click', function () {inputMascota.value=this.innerText;
          return false;

          
        });
        divList.appendChild(elementoLista);
      }
      console.log(item);
    });
  });

  inputMascota.addEventListener('keydown', function  () {
    
  });
}
autocompletar(['perro','gato','pez','zorro','maria']);