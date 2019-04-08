<?php include "header.php"?>   
    <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card mb-4 mt-4 bg-danger text-light">
            <div class="card-header text text-center"><b>WEB CALULATE</b></div>
            <div class="card-body">
                <form method="post" action="#" class="form">
                    <div class="form-group">
                        <label for="first">First Number</label>
                        <input type="number"  name="first" id="first" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Select Option:</label>
                        <select multiple class="custom-select" name="select" id="cal">
                        <option selected >None</option>
                        <option value="None">None</option>
                        <option value="Add">Add</option>
                        <option value="Minus">Minus</option>
                        <option value="Multiply">Minus</option>
                         <option value="devide">Divide</option>
                     </select> 
                    </div>
                    <div class="form-group">
                        <label for="second">Second Number</label>
                        <input type="number"  name="second" id="second" required class="form-control">
                    </div>
                   
                </div>
                <div class="card-footer">
                    <button type="submit" name="cal" class="btn btn-primary float-right">Calulate</button>
                </div>
            </form>
              <p>The result is: <?php include "src/functions.php"; include_once("cal.php");?></p>
            
        </div>
       
    </div>
    <div class="col-2"> </div>
</div>