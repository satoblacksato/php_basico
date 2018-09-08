<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  CREAR AJAX
</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                               <div class="form-group">
                                    <label for="name">
                                        Título
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name" />
                                </div>
                                <div class="form-group">
                                    <label for="description">
                                        Descripcion
                                    </label>
                                    <textarea class="form-control"
                                              id="description" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tipo_id">
                                        Tipo
                                    </label>
                                    <select class="form-control"
                                            id="tipo_id" name="tipo_id">
                                        <?php echo getCombo($tipos)?>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btnSave">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

