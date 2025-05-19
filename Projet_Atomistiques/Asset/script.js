const atomes = document.querySelectorAll("tr")
const suppr_atomes = document.querySelectorAll("tr")

atomes.forEach(atome => atome.addEventListener('click',()=>{
    let url = `${atome.id}`
    window.location.href=`../Controllers/modification.php?id=${atome.id}`
}))
