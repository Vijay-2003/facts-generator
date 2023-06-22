const para1 = document.getElementById("para1")
const para2 = document.getElementById("para2")
const btnf1 = document.getElementById("btnf")
const url1 = "https://official-joke-api.appspot.com/random_joke"

const facts1 = () =>
{
    fetch(url1).then((response) => {
        return response.json()
    }).then((data1) => {
        para1.innerText = data1.setup
        para2.innerText = data1.punchline
        console.log(data1)
    }).catch((error) => {
        console.log("error")
    }).finally((message) => {
        console.log("Working")
    })   
}   