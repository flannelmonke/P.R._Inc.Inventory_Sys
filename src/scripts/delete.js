/**
 * Opens delete confirmation modal to prompt user and sets appropriate attributes of confirm button
 * @return {void}
 * @param {string} rowID 
 */
function showDeleteModal(rowID) {

    const modal = document.getElementById("confirmDelete");

    const confirmationText = document.getElementById("confirmationText");
    const row = document.getElementById(rowID);

    confirmationText.textContent = `Do you really want to delete the row with Product ID of ${row["cells"]["1"].firstElementChild.value} 
    and Product name of ${row["cells"]["2"].firstElementChild.value}`;

    const deleteButton = document.getElementById("sendDelete");
    deleteButton.setAttribute("onclick", "confirmDelete('" + row["cells"]["1"].firstElementChild.value + "', '" + rowID + "')");


    modal.showModal();

}

/**
 * Removes attributes set by showDeleteModal() method as well as closes modal.
 */
function closeConfirmation() {
    const modal = document.getElementById("confirmDelete");

    const confirmationText = document.getElementById("confirmationText");
    confirmationText.textContent = "";
    const deleteButton = document.getElementById("sendDelete");
    deleteButton.removeAttribute("onclick");

    modal.close();

}

/**
 * 
 * @param {string} product_id 
 * @param {string} rowID
 */
function confirmDelete(product_id, rowID) {
    const xhr = new XMLHttpRequest();
    const result = document.getElementById("result");
    xhr.open("DELETE", "./controller/tableController.php?product_id=" + product_id, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) { // Done
            if (xhr.status >= 200 && xhr.status < 300) {
                result.textContent = xhr.responseText;
                let row = document.getElementById(rowID);
                row.remove();
            } else {
                console.error("Error:", xhr.statusText);
            }
        }
    };

    xhr.send();

    closeConfirmation();


}