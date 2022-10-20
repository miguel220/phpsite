
/*document.getElementById('Editar').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = 'flex';
});*/


function fnModal($id,$nome,$email){
	document.querySelector('.bg-modal').style.display = 'flex';
	document.querySelector('#modalNome').value = $nome;
	document.querySelector('#modalEmail').value = $email;
	document.querySelector('#modalID').value = $id;
}

function fnModalClose(){
	document.querySelector('.bg-modal').style.display = 'none';
}
