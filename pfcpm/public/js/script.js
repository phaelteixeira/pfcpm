function confirma(){
    var pupup = document.getElementById('popupcx')
    var sim = document.getElementById('popupbtnsim')
    sim.disabled = false
    pupup.style.display = 'block'
    
}

function confirmarPermuta(){
    alert('Permuta confirmada, Aguardar liberação da SPO e do CMD de pelotão')
}

function nao(){
    location.href = "";
}

