// int,float,string,bool,array,object
// letbcf
// var
// const pi=3.14;
// pi=3.1415;
// console.log(pi)

let a = 5
let b = '5'
let c = 5.0
let array = [1, 2, [1, 2, 323], "456", "67"]
let obj = {
    name: "Test Object",
    firstName: function () {
        let temp = this.name.split(" ");
        return temp[0] ?? ""
    }
}
console.table({
    a: typeof a,
    b: typeof b,
    c: typeof c,
    array: typeof array,
    aeqb2: (a === b),
    aeqb1: (a == b),
    firstNumbe: array[0],
    objectName: obj.name,
    objectFirstName: obj.firstName()
})
function skipped(event) {
    event.preventDefault();
    const target = event.target;
    const value = target.value;
    if (value.length === 0) target.classList.add("skipped"); else target.classList.remove("skipped")
        console.log([target])
    if (!target.validity.valid) {
        let parent = target.closest(".form-group");
        let errorElement = parent.querySelector(".error")
        if (!errorElement) {
            errorElement = document.createElement("span")
            errorElement.classList.add("error")
            parent.append(errorElement)
        }
        errorElement.innerText = "Invalid "
    }else{
        let parent = target.closest(".form-group");
        let errorElement = parent.querySelector(".error")
        errorElement.innerText="";
    }
}






















