function confirma(){
    var pupup = document.getElementById('popupcx')
    var sim = document.getElementById('popupbtnsim')
    sim.disabled = false
    pupup.style.display = 'block'
    
}


function confirmar(a){
    if(a == 'Ok'){
        confirma()
    }else if(a == 'Não'){
        
    }else if(a == "Refazer"){
        return alert(a)
    }    
    
}

function nao(){
    location.href = ""
}

function sim(){
    return true
}


function confirmarPermuta(){
    alert('Permuta confirmada, Aguardar liberação da SPO e do CMD de pelotão')
}


