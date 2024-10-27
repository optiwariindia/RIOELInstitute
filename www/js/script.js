HTMLElement.prototype.setValue = function (val) {
    this.innerText = val;
};
HTMLInputElement.prototype.setValue = function (val) {
    this.value = val;
};
HTMLFormElement.prototype.checkValidity = function () {
    const valid = Array.from(this.querySelectorAll("[name]")).reduce((a, c) => {
        return c?.validity?.valid && a;
    }, true);
    return valid;
};
HTMLFormElement.prototype.getData = function () {
    const data = Array.from(this.querySelectorAll("[name]")).reduce((a, c) => {
        let fldName = c.getAttribute("name");
        let fldType = c.getAttribute("type");
        switch (fldType) {
            case "radio":
            case "checkbox":
                if (!c.checked) return a;
                break;
            default:
                break;
        }
        if (!(fldName in a)) {
            a[fldName] = c.value;
            return a;
        }
        if (a[fldName] instanceof Array) {
            a[fldName].push(c.value);
            return a;
        }
        a[fldName] = [a[fldName], c.value];
        return a;
    }, {});
    return data;
};
HTMLFormElement.prototype.getInvalidInputs = function () {
    return Array.from(this.querySelectorAll(":invalid"));
};
HTMLFormElement.prototype.hasFile = function () {
    return !!this.querySelector("[type=file]");
};
HTMLElement.prototype.showError = function (error) {
    let parent = this.closest(".form-group") ?? this.parentElement;
    parent.classList.add("has-error");
    let er = parent.querySelector(".error");
    if (!er) {
        er = document.createElement("span");
        er.classList.add("error");
        parent.append(er);
    }
    er.innerText = error;
};
HTMLElement.prototype.getLabel=function(){
    let parent=this.closest(".form-group")??this.parentElement;
    let label=parent.querySelector("label");
    if(!label)return this.name;
    return label.innerText;
}
HTMLElement.prototype.clearError = function () {
    let parent = this.closest(".form-group") ?? this.parentElement;
    parent.classList.remove("has-error");
    let er = parent.querySelector(".error");
    if (er) {
        er.remove();
    }
};
function skipped(event) {
    event.preventDefault();
    const target = event.target;
    if(target.validity.valid)return;
    if(target.validity.valueMissing){
        target.classList.add("skipped")
        target.showError(`Please enter ${target.getLabel()}`);
        target.addEventListener("focus", () => {
            target.clearError();
        },{once:true})
        return;
    }
    target.showError(`Invalid ${target.getLabel()}`)
    target.addEventListener("focus", () => {
        target.clearError();
    },{once:true})
    return;
}
/* 
function savecontact(elm) {
    let form = elm.form;
    let inputs = form.querySelectorAll("[name]");
    let data = {};
    for (let index = 0; index < inputs.length; index++) {
        const element = inputs[index];
        data[element.getAttribute("name")] = element.value;
    }
    fetch("/savecontact", {
        method: "POST",
        body: JSON.stringify(data)
    }).then(resp => resp.json())
        .then(resp => {
            alert(resp.message.title)
        })
} 
*/
// Adding Event Listeners
document.querySelectorAll("[name]").forEach(inp => {
    inp.addEventListener("blur", skipped);
})