    <!-- Edit modal content -->
    <div id="editModal-{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <form class="needs-validation" novalidate action="{{ URL::route($url.'.update', $row->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit {{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Form Start -->
                    <div class="form-group">
                        <label for="provider_id">Select Provider</label>
                        <select class="form-control" name="provider_id" id="provider_id" required>
                            <option value="">Select Provider</option>
                            @foreach( $providers as $provider )
                            <option value="{{ $provider->id }}" @if( $row->provider_id == $provider->id ) selected @endif>{{ $provider->title }}</option>
                            @endforeach
                        </select>

                        <div class="invalid-feedback">
                          Please Select Select Provider.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="uptime">Uptime</label>
                        <input type="text" class="form-control" name="uptime" id="uptime" value="{{ $row->uptime }}" placeholder="Uptime">

                        <div class="invalid-feedback">
                          Please Provide Uptime.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="speed">Speed</label>
                        <input type="text" class="form-control" name="speed" id="speed" value="{{ $row->speed }}" placeholder="Speed">

                        <div class="invalid-feedback">
                          Please Provide Speed.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="support">Support</label>
                        <input type="text" class="form-control" name="support" id="support" value="{{ $row->support }}" placeholder="Support">

                        <div class="invalid-feedback">
                          Please Provide Support.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data_center">Data Center</label>
                        <input type="text" class="form-control" name="data_center" id="data_center" value="{{ $row->data_center }}" placeholder="Data Center">

                        <div class="invalid-feedback">
                          Please Provide Data Center.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cpanel">Cpanel</label>
                        <input type="text" class="form-control" name="cpanel" id="cpanel" value="{{ $row->cpanel }}" placeholder="Cpanel">

                        <div class="invalid-feedback">
                          Please Provide Cpanel.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="database">Database</label>
                        <input type="text" class="form-control" name="database" id="database" value="{{ $row->database }}" placeholder="Database">

                        <div class="invalid-feedback">
                          Please Provide Database.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="backup">Backup</label>
                        <input type="text" class="form-control" name="backup" id="backup" value="{{ $row->backup }}" placeholder="Backup">

                        <div class="invalid-feedback">
                          Please Provide Backup.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="migration">Migration</label>
                        <input type="text" class="form-control" name="migration" id="migration" value="{{ $row->migration }}" placeholder="Migration">

                        <div class="invalid-feedback">
                          Please Provide Migration.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="site_transfer">Site Transfer</label>
                        <input type="text" class="form-control" name="site_transfer" id="site_transfer" value="{{ $row->site_transfer }}" placeholder="Site Transfer">

                        <div class="invalid-feedback">
                          Please Provide Site Transfer.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="security">Security</label>
                        <input type="text" class="form-control" name="security" id="security" value="{{ $row->security }}" placeholder="Security">

                        <div class="invalid-feedback">
                          Please Provide Security.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guarantee">Guarantee</label>
                        <input type="text" class="form-control" name="guarantee" id="guarantee" value="{{ $row->guarantee }}" placeholder="Guarantee">

                        <div class="invalid-feedback">
                          Please Provide Guarantee.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pay_method">Pay Method</label>
                        <input type="text" class="form-control" name="pay_method" id="pay_method" value="{{ $row->pay_method }}" placeholder="Pay Method">

                        <div class="invalid-feedback">
                          Please Provide Pay Method.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status">Select Status</label>
                        <select class="wide" name="status" id="status" data-plugin="customselect">
                            <option value="1" @if( $row->status == 1 ) selected @endif>Active</option>
                            <option value="0" @if( $row->status == 0 ) selected @endif>Inactive</option>
                        </select>
                    </div>
                    <!-- Form End -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->