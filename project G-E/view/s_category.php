<?php
include 'header.php';
include 'sidebar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Stationary Order Form</title>
<link rel="stylesheet" href="styles.css">
</head>
<style>
    .container {
    width: 100%;
    margin-bottom: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    margin-right: 600px;
}

h2 {
    text-align: center;
    weight: 50%;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"] {
    width: calc(100% - 16px);
    padding: 8px;
    box-sizing: border-box;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

#orderTable {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

#orderTable th, #orderTable td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

#orderTable th {
    background-color: #f2f2f2;
}

#orderTable tr:nth-child(even) {
    background-color: #f2f2f2;
}

.edit-button, .delete-button {
    padding: 5px 10px;
    cursor: pointer;
}

.edit-button {
    background-color: #28a745;
    color: #fff;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
}

.delete-button {
    background-color: #dc3545;
    color: #fff;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    margin-left: 5px;
}
</style>
<body>

<div class="container">
    <h2>Category</h2>
    <form id="orderForm" onsubmit="submitForm(event)" ac>
        <div class="form-group">
            <label for="categoryName">IteamName:</label>
            <input type="text" id="categoryName" name="categoryName" required>
        </div>
        <div class="form-group">
            <label for="unit">Desription:</label>
            <input type="text" id="unit" name="unit">
        </div>
        
        
        <button type="submit">Submit</button>
    </form>
</div>

<div class="container">
    <h2>category form</h2>

    <table id="orderTable">
        <tr>
            <th>Item Name</th>
            <th>Description</th>           
            <th>Actions</th>
        </tr>
    </table>
</div>

<script>
    function submitForm(event) {
    event.preventDefault();

    const categoryName = document.getElementById('categoryName').value;
    const description = document.getElementById('unit').value;

    if (!validateInput(categoryName)) {
        return;
    }

    addToTable(categoryName, description);
    document.getElementById('orderForm').reset();
}

function validateInput(categoryName) {
    if (!categoryName) {
        alert('Please fill out all required fields.');
        return false;
    }

    return true;
}

function addToTable(categoryName, unit) {
    const table = document.getElementById('orderTable');
    const newRow = table.insertRow(-1);

    const cell1 = newRow.insertCell(0);
    const cell2 = newRow.insertCell(1);
    const cell3 = newRow.insertCell(2);
    const cell4 = newRow.insertCell(3);
    const cell5 = newRow.insertCell(4);

    cell1.textContent = categoryName;
    cell2.textContent = unit;
    cell3.textContent = ''; // Placeholder for Price
    cell4.textContent = ''; // Placeholder for Who Ordered

    const editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.classList.add('edit-button');
    editButton.onclick = function() {
        editRow(newRow);
    };

    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.classList.add('delete-button');
    deleteButton.onclick = function() {
        deleteRow(newRow);
    };

    cell5.appendChild(editButton);
    cell5.appendChild(deleteButton);
}

function editRow(row) {
    const cells = row.cells;
    document.getElementById('categoryName').value = cells[0].textContent;
    document.getElementById('unit').value = cells[1].textContent;

    // Remove the row from the table
    row.parentNode.removeChild(row);
}

function deleteRow(row) {
    row.parentNode.removeChild(row);
}
</script>

</body>
</html>