const para = document.getElementById("para")
const btn = document.getElementById("btnf")
 const url = "https://catfact.ninja/fact"
 
const facts = () => {
    
    fetch(url).then((response) => {
        return response.json()
    }).then((data) => {
        para.innerText = data.fact
        console.log(data)
    }).catch((error1) => {
        console.log("error")
    }).finally((message1) => {
        console.log("Working")
    })   
}   
facts();

