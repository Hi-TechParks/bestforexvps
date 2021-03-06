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
                        <label for="provider_id">Select Provider</label>
                        <select class="form-control" name="provider_id" id="provider_id" required>
                            <option value="">Select Provider</option>
                            @foreach( $providers as $provider )
                            <option value="{{ $provider->id }}">{{ $provider->title }}</option>
                            @endforeach
                        </select>

                        <div class="invalid-feedback">
                          Please Select Select Provider.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="package">Package Title</label>
                        <input type="text" class="form-control" name="package" id="package" placeholder="Package Title" required>

                        <div class="invalid-feedback">
                          Please Provide Package Title.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pri_price">Primary Price</label>
                        <input type="text" class="form-control" name="pri_price" id="pri_price" placeholder="Primary Price">

                        <div class="invalid-feedback">
                          Please Provide Primary Price.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="disc_price">Discount Price</label>
                        <input type="text" class="form-control" name="disc_price" id="disc_price" placeholder="Discount Price">

                        <div class="invalid-feedback">
                          Please Provide Discount Price.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cpu">CPU</label>
                        <input type="text" class="form-control" name="cpu" id="cpu" placeholder="CPU">

                        <div class="invalid-feedback">
                          Please Provide CPU speed.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="storage">Storage</label>
                        <input type="text" class="form-control" name="storage" id="storage" placeholder="Storage">

                        <div class="invalid-feedback">
                          Please Provide Storage Space.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ram">RAM</label>
                        <input type="text" class="form-control" name="ram" id="ram" placeholder="RAM">

                        <div class="invalid-feedback">
                          Please Provide RAM space.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bandwidth">Bandwidth</label>
                        <input type="text" class="form-control" name="bandwidth" id="bandwidth" placeholder="Bandwidth">

                        <div class="invalid-feedback">
                          Please Provide Bandwidth.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ip_address">IP Address</label>
                        <input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="IP Address">

                        <div class="invalid-feedback">
                          Please Provide IP Address.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="transfer">Transfer</label>
                        <input type="text" class="form-control" name="transfer" id="transfer" placeholder="Transfer">

                        <div class="invalid-feedback">
                          Please Provide Transfer.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="domain">Domain</label>
                        <input type="text" class="form-control" name="domain" id="domain" placeholder="Domain">

                        <div class="invalid-feedback">
                          Please Provide Domain.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">

                        <div class="invalid-feedback">
                          Please Provide Email.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ssl">SSL</label>
                        <input type="text" class="form-control" name="ssl" id="ssl" placeholder="SSL">

                        <div class="invalid-feedback">
                          Please Provide SSL.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="order">Order No</label>
                        <input type="text" class="form-control" name="order" id="order" placeholder="Order No" required>

                        <div class="invalid-feedback">
                          Please Provide Order No.
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