<?php
include 'header.php';
include 'sidebar.php';
?>
<style>
.product-container {
    background-color: rgba(255, 255, 255, 0.7);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 600px;
    backdrop-filter: blur(5px);
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="number"],
  textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
  }

  textarea {
    resize: vertical;
  }

  /* button[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 3px;
    padding: 12px 20px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
  } */

  /* button[type="submit"]:hover {
    background-color: #45a049;
  } */

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;

  }

  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  .edit-btn, .delete-btn {
    padding: 6px 10px;
    margin-right: 5px;
    cursor: pointer;
    border: none;
    border-radius: 3px;
    background-color: #007bff;
    color: #fff;
  }

  .edit-btn:hover, .delete-btn:hover {
    background-color: #0056b3;
  }
  </style>

  

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <!-- <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Form Elements</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Form Componants</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Form Elements</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- [ breadcrumb ] end -->

                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        
                                        <div class="card-body">
                                            <h5>Driver Form</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form>
                                                    <div class="form-group">
                                                            <label for="exampleInputPassword1">Full Name</label>
                                                            <input type="fullname" class="form-control" id="exampleInputPassword1" >
                                                    </div>

                                                    <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                    <div class="form-group">
                                                            <label for="exampleInputPassword1">Address</label>
                                                            <input type="fullname" class="form-control" id="exampleInputPassword1" >
                                                        </div>

                                                    
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                                <div class="col-md-6">
                                                    <form>
                                                    <div class="form-group">
                                                            <label for="exampleInputPassword1">License</label>
                                                            <input type="license" class="form-control" id="exampleInputPassword1" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Salary</label>
                                                            <input type="text" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Car</label>
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                <option>car1</option>
                                                                <option>car2</option>
                                                                <option>car3</option>
                                                                <option>car4</option>
                                                                <option>car5</option>
                                                            </select>
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                      
                                                   
                                        </div>
                                
                                    </div>
                                </div>
                            </div>

                         
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    

<div class="col-md-6 pcoded-main-container pcoded-wrapper pcoded-content main-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Full Name</th>
                                                            <th>Email</th>
                                                            <th>Address</th>
                                                            <th>License</th>
                                                            <th>Salary</th>
                                                            <th>Car</th>
                                                            <th>Actions</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
      <!-- Table rows will be added dynamically -->
    </tbody>
                                                </table>
                                                </div>
  
    
  </div>


 

  <script>
    // Function to create a new row in the table
    function createTableRow(fullname, email, address, license, salary, car) {
      const tableBody = document.querySelector('#productTable tbody');
      const newRow = document.createElement('tr');
      newRow.innerHTML = `
        <td>${fullname}</td>
        <td>${email}</td>
        <td>${address}</td>
        <td>${license}</td>
        <td>${salary}</td>
        <td>${car}</td>
        <td>
          <button class="edit-btn">Edit</button>
          <button class="delete-btn">Delete</button>
        </td>
      `;
      tableBody.appendChild(newRow);
    }

    // Function to handle form submission
    document.getElementById('productForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the default form submission

      // Get form data
      const formData = new FormData(this);
      const category = formData.get('categoryName');
      const price = formData.get('price');
      const quantity = formData.get('quantity');
      const description = formData.get('description');

      // Create new row in the table
      createTableRow(category, price, quantity, description);

      // Reset the form
      this.reset();
    });

    // Event delegation for Edit and Delete buttons
    document.getElementById('productTable').addEventListener('click', function(event) {
      const target = event.target;

      if (target.classList.contains('edit-btn')) {
        // Handle edit action
        const row = target.closest('tr');
        const cells = row.querySelectorAll('td');

        // Populate form fields with table data for editing
        document.getElementById('categoryName').value = cells[0].textContent;
        document.getElementById('price').value = cells[1].textContent;
        document.getElementById('quantity').value = cells[2].textContent;
        document.getElementById('description').value = cells[3].textContent;

        // Remove the row from the table
        row.remove();
      } else if (target.classList.contains('delete-btn')) {
        // Handle delete action
        const row = target.closest('tr');
        row.remove();
      }
    });
  </script>
</body>
</html>
