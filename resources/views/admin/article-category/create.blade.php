    <!-- Add modal content -->
    <div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <form class="needs-validation" novalidate action="{{ URL::route($url.'.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add {{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Form Start -->
                    <div class="form-group">
                        <label for="title">Page Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Page Title" required>

                        <div class="invalid-feedback">
                          Please Provide Page Title.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="details">Page Details</label>
                        <textarea class="form-control summernote" name="details" id="details" rows="8"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="order">Order No</label>
                        <input type="number" class="form-control" name="order" id="order" placeholder="Order No" required>

                        <div class="invalid-feedback">
                          Please Provide Order No.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="meta_keyword">Meta Keyword</label>
                        <textarea class="form-control" name="meta_keyword" id="meta_keyword" rows="4"></textarea>

                        <div class="invalid-feedback">
                          Please Provide Meta Keyword.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="meta_desc">Meta Desc</label>
                        <textarea class="form-control" name="meta_desc" id="meta_desc" rows="4"></textarea>

                        <div class="invalid-feedback">
                          Please Provide Meta Desc.
                        </div>
                    </div>
                    <!-- Form End -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->