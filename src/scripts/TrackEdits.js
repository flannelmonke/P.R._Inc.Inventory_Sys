let changes = {};

document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('htmx:load', function () {
        const table_body = document.getElementById("table_body");

        if (!table_body.dataset.listenerAttached) {
            table_body.addEventListener('input', function (event) {
                const input = event.target;

                if (input.tagName === 'INPUT') {
                    const row = input.parentElement.parentElement;
                    const rowId = row.getAttribute("data-row-id");
                    const cells = row["cells"];

                    // Initialize the row object if it doesn't exist
                    if (!changes[rowId]) {
                        changes[rowId] = {};
                    }

                    for (let i = 0; i < cells.length; i++) {
                        if (cells[i].tagName === "TD") {
                            const columnName = cells[i].firstElementChild.getAttribute("data-column-name");
                            changes[rowId][columnName] = cells[i].firstElementChild.value;
                        }
                    }

                    console.log("Current Changes:");
                    for (let rowKey in changes) {
                        console.log(`Row ID: ${rowKey}`);
                        for (let columnKey in changes[rowKey]) {
                            console.log(`  ${columnKey}: ${changes[rowKey][columnKey]}`);
                        }
                    }
                }
            });

            table_body.dataset.listenerAttached = 'true';
        }
    });
});


function SaveChanges() {
    const data = JSON.stringify(changes);

    const xhr = new XMLHttpRequest();

    xhr.open("PATCH", "./controller/tableController.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) { // Done
            if (xhr.status >= 200 && xhr.status < 300) {
                console.log("Success:", xhr.responseText);
            } else {
                console.error("Error:", xhr.statusText);
            }
        }
    };

    xhr.send(data);
}
