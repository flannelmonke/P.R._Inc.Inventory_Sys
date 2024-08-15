/**
 * Sets the specified row as editable.
 * 
 * @param {string} rowNum - The row number to set as editable. Must be an integer.
 */
function setEditable(rowNum) {
    let row = document.getElementById(rowNum);
    let children = row.childNodes;

    for (let i = 2; i < children.length - 4; i++) {
        if (children[i].nodeType === Node.ELEMENT_NODE) {
            var input = document.createElement("textarea");
            input.type = 'text';
            input.value = children[i].textContent;
            input.classList.add("textarea", "textarea-bordered", "textarea-xs", "w-full", "max-w-xs");
            if (i != 22) {
                input.style.resize = "none";
            }
            input.size = 1;
            children[i].textContent = '';
            children[i].appendChild(input);
        }
    }
}

