<!-- Modal Create-->

<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">

        <div class="modal-header">
            <h5 class="modal-title">Добавить пользователя</h5>
            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
                                                                                                              <!--//$login = $_POST['Login_client'];
                                                                                                              //$password = $_POST['Password_client'];
                                                                                                              //$mail = $_POST['Mail_client'];
                                                                                                              //$phone = $_POST['Phone_client'];
                                                                                                              //$contactperson = $_POST['ContactPerson'];
                                                                                                              //$phonecontactperson = $_POST['Phone_ContactPerson'];
                                                                                                              //$contractor= $_POST['Contractor']; -->
        <div class="modal-body">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Name_client" value="" placeholder="Name_client">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Login_client" value="" placeholder="Login_client">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Password_client" value="" placeholder="Password_client">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Mail_client" value="" placeholder="Mail_client">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Phone_client" value="" placeholder="Phone_client">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="ContactPerson" value="" placeholder="ContactPerson">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Phone_ContactPerson" value="" placeholder="Phone_ContactPerson">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Contractor" value="" placeholder="Contractor">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Id_Discount" value="" placeholder="Id_Discount">
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="submit" name="create-submit" class="btn btn-primary">Добавить</button>
                </div>
            </form>
        </div> <!-- modal-body -->

    </div> <!-- modal-content -->
  </div> <!-- modal-dialog -->
</div> <!-- modal fade -->


<!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$value['Id_Client'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$value['Id_Client'] ?></h5>
          <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="?Id_Client=<?=$value['Id_Client'] ?>" method="post">
               <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Name_client" value="<?=$value['Name_client'] ?>" placeholder="Name_client">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Login_client" value="<?=$value['Login_client'] ?>" placeholder="Login_client">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Password_client" value="<?=$value['Password_client'] ?>" placeholder="Password_client">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Mail_client" value="<?=$value['Mail_client'] ?>" placeholder="Mail_client">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Phone_client" value="<?=$value['Phone_client'] ?>" placeholder="Phone_client">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="ContactPerson" value="<?=$value['ContactPerson'] ?>" placeholder="ContactPerson">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Phone_ContactPerson" value="<?=$value['Phone_ContactPerson'] ?>" placeholder="Phone_ContactPerson">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" name="Contractor" value="<?=$value['Contractor'] ?>" placeholder="Contractor">
                </div>
              	<div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
              		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
                </div>
          </form>
        </div> <!-- modal-body -->
    </div> <!--modal-content -->
  </div> <!-- modal-dialog -->
</div> <!-- modal fade -->
<!-- Modal Delete -->
<div class="modal fade" id="deleteModal<?=$value['Id_Client'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$value['Id_Client'] ?></h5>
        <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
          <form action="?Id_Client=<?=$value['Id_Client'] ?>" method="post">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
            	<button type="submit" name="delete-submit" class="btn btn-danger">Удалить</button>
    	   </form>
      </div>
    </div> <!-- modal-content -->
  </div> <!-- modal-dialog -->
</div> <!-- modal fade -->