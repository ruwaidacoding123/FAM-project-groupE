<?php

include ('header.php');
include ('sidebar.php');

?>

<div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                          <div class="row">
                          <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Basic Table</h5>
                                            <span class="d-block m-t-5">use class <code>table</code> inside table element</span>
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <button id="addNew" class="btn btn-info float-right">Add new Transaction</button>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Amount</th>
                                                            <th>Type</th>
                                                            <th>Description</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                               
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </div>

                        <div class="modal" tabindex="-1" role="dialog" id="expenseModal">
                         <div class="modal-dialog" role="document">
                         <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                        </div>

                                   <form action="" id="expenseForm">
                                           <div class="row">
                                            <div class="col-sm-12">
                                           <div class="alert alert-success" role="alert">
                                             A simple success alert—check it out!
                                           </div>
                                           <div class="alert alert-danger" role="alert">
                                                 A simple danger alert—check it out!
                                            </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-froup">
                                                      <label for="">Amount</label>
                                                      <input type="text" name="" id="amount">
                                           </div>
                                           </div>

                          <div class="col-sm-12">
                          <div class="form-group">
                              <label >Type</label>
                                  <select name="type" id="type">
                                   <option value="Income">Income</option>
                                   <option value="Expense">Expense</option>
                                   </select>
                    
                                </div>
                  </div>


             <div class="col-sm-12">
                        <div class="form-froup">
                             <label for="">Description</label>
                             <input type="text" name="description" id="description">
                        
                        </div>
              </div>
      </div>
                                      

                                                      <div class="modal-footer">
                                                           <button type="submit" class="btn btn-primary">Save changes</button>
                                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                      </div>
                                            </form>

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



<?php

include ('footer.php');


?>

<script src="../js/expense.js"></script>