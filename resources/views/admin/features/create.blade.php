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
                        <label for="uptime">Uptime</label>
                        <input type="text" class="form-control" name="uptime" id="uptime" placeholder="Uptime">

                        <div class="invalid-feedback">
                          Please Provide Uptime.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="speed">Speed</label>
                        <input type="text" class="form-control" name="speed" id="speed" placeholder="Speed">

                        <div class="invalid-feedback">
                          Please Provide Speed.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="support">Support</label>
                        <input type="text" class="form-control" name="support" id="support" placeholder="Support">

                        <div class="invalid-feedback">
                          Please Provide Support.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data_center">Data Center</label>
                        <input type="text" class="form-control" name="data_center" id="data_center" placeholder="Data Center">

                        <div class="invalid-feedback">
                          Please Provide Data Center.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cpanel">Cpanel</label>
                        <input type="text" class="form-control" name="cpanel" id="cpanel" placeholder="Cpanel">

                        <div class="invalid-feedback">
                          Please Provide Cpanel.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="database">Database</label>
                        <input type="text" class="form-control" name="database" id="database" placeholder="Database">

                        <div class="invalid-feedback">
                          Please Provide Database.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="backup">Backup</label>
                        <input type="text" class="form-control" name="backup" id="backup" placeholder="Backup">

                        <div class="invalid-feedback">
                          Please Provide Backup.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="migration">Migration</label>
                        <input type="text" class="form-control" name="migration" id="migration" placeholder="Migration">

                        <div class="invalid-feedback">
                          Please Provide Migration.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="site_transfer">Site Transfer</label>
                        <input type="text" class="form-control" name="site_transfer" id="site_transfer" placeholder="Site Transfer">

                        <div class="invalid-feedback">
                          Please Provide Site Transfer.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="security">Security</label>
                        <input type="text" class="form-control" name="security" id="security" placeholder="Security">

                        <div class="invalid-feedback">
                          Please Provide Security.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guarantee">Guarantee</label>
                        <input type="text" class="form-control" name="guarantee" id="guarantee" placeholder="Guarantee">

                        <div class="invalid-feedback">
                          Please Provide Guarantee.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pay_method">Pay Method</label>
                        <input type="text" class="form-control" name="pay_method" id="pay_method" placeholder="Pay Method">

                        <div class="invalid-feedback">
                          Please Provide Pay Method.
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