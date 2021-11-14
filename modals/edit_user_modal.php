<!-- Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Izmjena korisnika</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="./update_user.php" method="POST">
          <div class="row">
              <div class="col-12">
                  <input type="text" name="first_name" id="editModalFirstName" class="form-control" placeholder="Unesite ime">
              </div>
              <div class="col-12 mt-3">
                  <input type="text" name="last_name" id="editModalLastName" class="form-control" placeholder="Unesite prezime">
              </div>
              <div class="col-12 mt-3">
                  <input type="email" name="email" id="editModalEmail" class="form-control" placeholder="Unesite e-mail adresu">
              </div>
              <input type="hidden" name="id" id="editModalHidden" class="form-control" value="nista">
              <div class="col-12 mt-3">

                  <label for="country-names">Država:</label>
                  <select name="country_name" id="country-names" class="form-control">
                  </select>
              
                  <label for="city-names">Grad:</label>
                  <select name="city_name" id="city-names" class="form-control">
                  </select>
                   <script src="./ajax/app.js"></script>  
              </div>
          </div>

          <div class="row mt-3">
              <div class="col-4 offset-4">
                  <button class="btn btn-success w-100">Izmijeni korisnika</button>
              </div>
          </div>
      </form>

      </div>
    </div>
  </div>
</div>